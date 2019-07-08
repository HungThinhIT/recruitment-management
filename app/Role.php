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
}
