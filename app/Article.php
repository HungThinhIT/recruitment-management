<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable= ["title", "content", "image", "jobId", "catId", "userId"];

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
}
