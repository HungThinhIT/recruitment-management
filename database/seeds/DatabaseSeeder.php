<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(JobTableSeeder::class);
         $this->call(InterviewerTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(ArticleTableSeeder::class);
         $this->call(InterviewTableSeeder::class);
         $this->call(CandidateTableSeeder::class);
         $this->call(PermissionTableSeeder::class);
         $this->call(RolePermissionTableSeeder::class);
         $this->call(CandidateInterviewTableSeeder::class);
         $this->call(JobCandidateTableSeeder::class);
         $this->call(UserRoleTableSeeder::class);
    }
}
