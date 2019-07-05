<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    public function articles()
    {
        return $this->hasMany('App\Article','jobId','id');
    }
    public function candidates()
    {
        return $this->belongsToMany('App\Candidate', 'job_candidate', 'jobId', 'candidateId');
    }
}
