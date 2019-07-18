<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([[
        	'name'=>'Admin',
            'description'=>'The admins have all permissions, especially they can manage the role and the user.'
        ],
        [
			'name'=>'User',
            'description'=>'The users can supports admin about writing the article, managing the candidate and the interview.'
        ]]);
        
    }
}
