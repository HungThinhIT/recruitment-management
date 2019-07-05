<?php

use Illuminate\Database\Seeder;
use App\Interviewer;
class InterviewerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Interviewer::class, 1)->create();       }
}
