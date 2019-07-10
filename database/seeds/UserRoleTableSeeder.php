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
        $roleID = App\Role::where('name','Admin')->first('id')->toArray();
        $userID = App\User::where('name','admin')->first('id')->toArray();
        //dd($userID["id"]);
        DB::table('user_role')->insert([
        	'roleId'=>$roleID["id"],
        	'userId'=>$userID["id"]
        ]);
    }
}
