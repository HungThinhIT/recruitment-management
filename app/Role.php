<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_role', 'roleId', 'userId');
    }
    public function permissions()
    {
        return $this->belongsToMany('App\Permission', 'role_permission', 'roleId', 'permissionId');
    }
}
