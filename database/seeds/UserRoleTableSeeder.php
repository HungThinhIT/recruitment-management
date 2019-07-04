<?php

use Illuminate\Database\Seeder;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_role')->insert([[
        	'roleId'=>App\Role::all()->random()->id,
        	'userId'=>App\User::all()->random()->id
        ],
        [
			'roleId'=>App\Role::all()->random()->id,
        	'userId'=>App\User::all()->random()->id
        ]]);
    }
}
