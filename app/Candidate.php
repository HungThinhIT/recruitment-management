<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidates';
    protected $primaryKey = 'id';
    public function jobs()
    {
        return $this->belongsToMany('App\Job', 'job_candidate', 'candidateId', 'jobId');
    }
    public function interviews()
    {
        return $this->belongsToMany('App\Interview', 'candidate_interview', 'candidateId', 'interviewId');
    }
}
