<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable= ["title", "content", "image", "jobId", "catId", "userId","isPublic"];
	public function user()
    {
        return $this->belongsTo('App\User','userId');
    }
    public function category()
    {
        return $this->belongsTo('App\Category','catId');
    }
    public function job()
    {
        return $this->belongsTo('App\Job','jobId');
    }

    public function scopeSearchByKeyWord($query, $keyword, $orderby)
    {   
        if ($keyword) 
            return $query->where('title', 'like', '%'.$keyword.'%')
                        ->orwhere('content', 'like', '%'.$keyword.'%')
                        ->orWhereHas('job', function (Builder $q) use ($keyword){
                            $q    ->where('name', 'like', '%'.$keyword.'%')
                            ->orwhere('address', 'like', '%'.$keyword.'%')
                            ->orwhere('position', 'like', '%'.$keyword.'%')
                            ->orwhere('category', 'like', '%'.$keyword.'%')
                            ->orwhere('experience', 'like', '%'.$keyword.'%')
                            ->orwhere('status', 'like', '%'.$keyword.'%');
                            })                    
                        ->orderBy("created_at", $orderby);    
    }
    public function scopeSort($query, $field, $orderBy)
    {   
        if ($field) 
            return $query->orderBy($field, $orderBy);    
    }
    public function scopeOfPosition($query,$position,$orderby)
    {
        if ($position) 
            return $query->whereHas('job', function (Builder $q) use ($position){
                            $q  ->where('position', $position);
                            })
                            ->orderBy("created_at", $orderby);
    }
    public function scopeOfLocation($query,$location,$orderby)
    {
        if ($location) 
            return $query->whereHas('job', function (Builder $q) use ($location){
                            $q  ->where('address', $location);
                            })
                            ->orderBy("created_at", $orderby);
    }
    public function scopeOfStatus($query,$status,$orderby)
    {
        if ($status) 
            return $query->whereHas('job', function (Builder $q) use ($status){
                            $q  ->where('status', $status);
                            })
                            ->orderBy("created_at", $orderby);
    }
    public function scopeOfCategory($query,$category,$orderby)
    {
        if ($category) 
            return $query->whereHas('category', function (Builder $q) use ($category){
                            $q  ->where('name', $category);
                            })
                            ->orderBy("created_at", $orderby);
    }
    public function scopeOfExperience($query,$experience,$orderby)
    {   
        if ($experience) 
            return $query->whereHas('job', function (Builder $q) use ($experience){
                            switch ($experience) {
                                case '1':
                                    $q  ->where('experience', 1);
                                    break;
                                case '2':
                                    $q  ->whereBetween ('experience', [2,4]);
                                    break;
                                case '3':
                                    $q  ->where('experience', 5);
                                    break;
                                case '4':
                                    $q  ->where('experience','>', 5);
                                    break;
                                default:
                                    break;
                            }                           
                            })
                            ->orderBy("created_at", $orderby);
    }
}
