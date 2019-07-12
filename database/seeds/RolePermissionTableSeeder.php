<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionsId = Permission::get("id")->toArray();
        $role = Role::where("name","Admin")->first();
        foreach ($permissionsId as $key => $value) {
            $role->permissions()->attach($value); 
        }
    }
}
