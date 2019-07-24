<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    protected $fillable = ["name", "description", "address", "position", "salary", "status", "experience","category", "amount", "publishedOn", "deadline"];
    public $timestamps = true;

    public function articles()
    {
        return $this->hasMany('App\Article','jobId','id');
    }
    public function candidates()
    {
        return $this->belongsToMany('App\Candidate', 'job_candidate', 'jobId', 'candidateId');
    }
}
