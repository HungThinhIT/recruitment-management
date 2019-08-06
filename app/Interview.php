<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $table = 'interviews';
    protected $primaryKey = 'id';

    public $fillable = ["name", "timeStart", "timeEnd", "address", "status"];
  
    public function scopeFilter($query, QueryFilter $filters)
    {
        return $filters->apply($query);
    }
  
	  public function candidates()
    {
        return $this->belongsToMany('App\Candidate', 'candidate_interview', 'interviewId', 'candidateId');
    }
  
    public function interviewers()
    {
        return $this->belongsToMany('App\Interviewer', 'interview_interviewer', 'interviewId', 'interviewerId');
    }
}
