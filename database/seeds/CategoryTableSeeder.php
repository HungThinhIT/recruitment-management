<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    	
        DB::table('categories')->insert([[
        	'name'=>'Tin tuyển dụng'
        ],
        [
			'name'=>'Kết quả'
        ]]);    
    }
}
