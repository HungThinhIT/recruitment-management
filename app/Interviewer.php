<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interviewer extends Model
{
    protected $table = 'interviewers';
    protected $primaryKey = 'id';

    public function scopeSearchByKeyword($query, $request){
        if($request->has('keyword') && $request->input("keyword") != ""){
            $query->where('fullname','LIKE','%'.$request->input("keyword").'%')
            ->orWhere('email','LIKE','%'.$request->input("keyword").'%')
            ->orWhere('phone','LIKE','%'.$request->input("keyword").'%')
            ->orWhere('address','LIKE','%'.$request->input("keyword").'%')
            ->orWhere('technicalSkill','LIKE','%'.$request->input("keyword").'%');
        }
        return $query;
    }

    public function scopeSearchAndSort($query, $request){
        if($request->has('keyword') && $request->input("keyword") != ""
        && $request->has('sort') && $request->has('field')
        ){
            $query->where('fullname','LIKE','%'.$request->input("keyword").'%')
            ->orWhere('email','LIKE','%'.$request->input("keyword").'%')
            ->orWhere('phone','LIKE','%'.$request->input("keyword").'%')
            ->orWhere('address','LIKE','%'.$request->input("keyword").'%')
            ->orWhere('technicalSkill','LIKE','%'.$request->input("keyword").'%')
            ->orderBy($request->input("field"), $request->input("sort"));
        }
        return $query;
    }
}
