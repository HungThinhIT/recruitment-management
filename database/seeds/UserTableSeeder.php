<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
        	'name' => 'admin',
	        'email' => 'admin@gmail.com',
	        'email_verified_at' => now(),
	        'password' => Hash::make(123123), 
	        'remember_token' => Str::random(10),
	        'fullname'=>'Admin',
	        'phone'=>'0123456789',
	        'address'=>'453-455 Hoàng Diệu, TP Đà Nẵng',
	        'image'=>'avt_default_profile.png',
        ]);
        factory(User::class, 5)->create();
    }
}
