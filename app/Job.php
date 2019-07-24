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
    public function scopeSearchByKeyWord($query, $keyword)
    {   
        if ($keyword) 
            return $query->where('name', 'like', '%'.$keyword.'%')
                                ->orwhere('description', 'like', '%'.$keyword.'%')
                                ->orwhere('position', 'like', '%'.$keyword.'%')
                                ->orwhere('salary', 'like', '%'.$keyword.'%')
                                ->orwhere('address', 'like', '%'.$keyword.'%')
                                ->orwhere('status', 'like', '%'.$keyword.'%')
                                ->orwhere('amount', '=', $keyword);    
    }
    public function scopeSort($query, $field, $orderBy)
    {   
        if ($field) 
            return $query->orderBy($field, $orderBy);    
    }

    public function convertExperiencetoString($numberExperience)
    {
        $stringExperience = NULL;
        switch ((int)$numberExperience) {
            case 1:
                $stringExperience = "1 years";
                break;
            case 2:
                $stringExperience = "2 years";
                break;
            case 3:
                $stringExperience = "3 years";
                break;
            case 4:
                $stringExperience = "4 years";
                break;
            case 5:
                $stringExperience = "5 years";
                break;   
            default:
                $stringExperience = "More than 5 years";
                break;
        }
        return $stringExperience;
    }
}
