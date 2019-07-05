<?php

use Illuminate\Database\Seeder;

class JobCandidateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_candidate')->insert([[
        	'candidateId'=>App\Candidate::all()->random()->id,
        	'jobId'=>App\Job::all()->random()->id
        ],
        [
			'candidateId'=>App\Candidate::all()->random()->id,
        	'jobId'=>App\Job::all()->random()->id
        ]]);
    }
}
