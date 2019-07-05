<?php

use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_permission')->insert([[
        	'roleId'=>App\Role::all()->random()->id,
        	'permissionId'=>App\Permission::all()->random()->id
        ],
        [
			'roleId'=>App\Role::all()->random()->id,
        	'permissionId'=>App\Permission::all()->random()->id
        ]]);
    }
}
