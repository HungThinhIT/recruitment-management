<?php

use Illuminate\Database\Seeder;
use App\Interview;
class InterviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Interview::class, 5)->create();
    }
}
