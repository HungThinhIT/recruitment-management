<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name'];

  public function users()
    {
        return $this->belongsToMany('App\User', 'user_role', 'roleId', 'userId');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Permission', 'role_permission', 'roleId', 'permissionId');
    }

    public function hasAccess(array $permissions): bool
    {
        foreach ($permissions as $permission) {
            if($this->hasPermission($permission)) return true;
        }
        return false;
    }

    private function hasPermission(String $permission): bool
    {
        foreach($this->permissions as $value){
            if($value->name == $permission) return true;
        }
        return false;
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    //scope
    public function scopeSearchByKeyWord($query, $keyword)
    {   
        if ($keyword) 
            return $query->where('name', 'LIKE', '%'.$keyword.'%');    
    }
    public function scopeSort($query, $field, $orderBy)
    {   
        if ($field) 
            return $query->orderBy($field, $orderBy);    
    }
}
