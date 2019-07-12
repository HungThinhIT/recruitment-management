<?php

use Illuminate\Database\Seeder;
use App\Candidate;
class CandidateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Candidate::class, 5)->create(); 
    }
}
