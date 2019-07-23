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
    public function scopeSearchByKeyWordForAdmin($query, $keyword)
    {   
        if ($keyword) 
            return $query->where('title', 'like', '%'.$keyword.'%')
                        ->orwhere('content', 'like', '%'.$keyword.'%')
                        ->orWhereHas('user', function (Builder $q) use ($keyword){
                            $q->where('fullname', 'like', '%'.$keyword.'%');
                        })
                        ->orWhereHas('category', function (Builder $q) use ($keyword){
                            $q->where('name', 'like', '%'.$keyword.'%');
                        })
                        ->orWhereHas('job', function (Builder $q) use ($keyword){
                            $q->where('name', 'like', '%'.$keyword.'%');
                        });    
    }
    public function scopeSort($query, $field, $orderBy)
    {   
        if ($field) 
            return $query->orderBy($field, $orderBy);    
    }
}
