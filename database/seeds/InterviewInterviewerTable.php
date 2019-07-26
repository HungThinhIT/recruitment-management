<?php

use Illuminate\Database\Seeder;

class InterviewInterviewerTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interview_interviewer')->insert([[
        	'interviewerId'=>App\Interviewer::all()->random()->id,
        	'interviewId'=>App\Interview::all()->random()->id
        ],
        [
			'interviewerId'=>App\Interviewer::all()->random()->id,
        	'interviewId'=>App\Interview::all()->random()->id
        ]]);  
    }
}
