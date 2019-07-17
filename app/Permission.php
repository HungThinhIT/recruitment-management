<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $primaryKey = 'id';
	public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_permission', 'permissionId', 'roleId');
    }

}
