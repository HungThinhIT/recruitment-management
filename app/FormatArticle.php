<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormatArticle extends Model
{
    protected $table = "format_article";
    protected $primaryKey = "id";
    protected $fillable = ["title","content"];
    public $timestamps = false;
}
