<?php

use Illuminate\Database\Seeder;

class CandidateInterviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('candidate_interview')->insert([[
        	'candidateId'=>App\Candidate::all()->random()->id,
        	'interviewId'=>App\Interview::all()->random()->id
        ],
        [
			'candidateId'=>App\Candidate::all()->random()->id,
        	'interviewId'=>App\Interview::all()->random()->id
        ]]);     
    }
}
