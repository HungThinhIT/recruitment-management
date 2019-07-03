<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public function articles()
    {
        return $this->hasMany('App\Article','catId','id');
    }
}
