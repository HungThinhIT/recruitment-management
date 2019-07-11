<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';

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
}
