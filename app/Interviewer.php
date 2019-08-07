<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interviewer extends Model
{
    protected $table = 'interviewers';
    protected $primaryKey = 'id';
    protected $fillable = ["fullname", "address", "phone", "email","image", "technicalSkill"];
    public function interviews()
    {
        return $this->belongsToMany('App\Interview', 'interview_interviewer', 'interviewerId', 'interviewId');
    }

    //scope
    public function scopeSearchByKeyWord($query, $keyword)
    {   
        if ($keyword) 
            return $query->where('fullname','LIKE','%'.$keyword.'%')
                        ->orWhere('email','LIKE','%'.$keyword.'%')
                        ->orWhere('phone','LIKE','%'.$keyword.'%')
                        ->orWhere('address','LIKE','%'.$keyword.'%')
                        ->orWhere('technicalSkill','LIKE','%'.$keyword.'%');    
    }
    public function scopeSort($query, $field, $orderBy)
    {   
        if ($field) 
            return $query->orderBy($field, $orderBy);    
    }
}
