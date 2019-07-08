<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Policies\ArticlePolicy;
use App\Policies\CandidatePolicy;
use App\Policies\InterviewerPolicy;
use App\Policies\InterviewPolicy;
use App\Policies\JobPolicy;



class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\User' => 'App\Policies\UserPolicy',
        'App\Role' => 'App\Policies\RolePolicy',
        'App\Article' => 'App\Policies\ArticlePolicy',
        'App\Candidate' => 'App\Policies\CandidatePolicy',
        'App\Interviewer' => 'App\Policies\InterviewerPolicy',
        'App\Job' => 'App\Policies\JobPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->defineGateAuthorize();


        Passport::routes();
        //Modify TokenExpireIn time Here.
        Passport::personalAccessTokensExpireIn(now()->addMonths(1));
    }

    public function defineGateAuthorize(){
        /*
        * Role Gate.
        */
        Gate::define("Role.create",RolePolicy::class."@create");
        Gate::define("Role.list",RolePolicy::class."@view");
        Gate::define("Role.edit",RolePolicy::class."@update");
        Gate::define("Role.delete",RolePolicy::class."@delete");

        /*
        * User Gate.
        */
        Gate::define("user.create",UserPolicy::class."@create");
        Gate::define("user.view",UserPolicy::class."@view");
        Gate::define("user.edit",UserPolicy::class."@edit");
        Gate::define("user.delete",UserPolicy::class."@delete");

        /*
        * Article Gate.
        */
        Gate::define("article.create",ArticlePolicy::class."@create");
        Gate::define("article.view",ArticlePolicy::class."@view");
        Gate::define("article.edit",ArticlePolicy::class."@edit");
        Gate::define("article.delete",ArticlePolicy::class."@delete");

        /*
        * Candidate Gate.
        */
        Gate::define("candidate.create",CandidatePolicy::class."@create");
        Gate::define("candidate.view",CandidatePolicy::class."@view");
        Gate::define("candidate.edit",CandidatePolicy::class."@edit");
        Gate::define("candidate.delete",CandidatePolicy::class."@delete");

        /*
        * Interviewer Gate.
        */
        Gate::define("interviewer.create",InterviewerPolicy::class."@create");
        Gate::define("interviewer.view",InterviewerPolicy::class."@view");
        Gate::define("interviewer.edit",InterviewerPolicy::class."@edit");
        Gate::define("interviewer.delete",InterviewerPolicy::class."@delete");

        /*
        * Job Gate.
        */
        Gate::define("interview.create",InterviewPolicy::class."@create");
        Gate::define("interview.view",InterviewPolicy::class."@view");
        Gate::define("interview.edit",InterviewPolicy::class."@edit");
        Gate::define("interview.delete",InterviewPolicy::class."@delete");

        /*
        * Interview Gate.
        */
        Gate::define("job.create",JobPolicy::class."@create");
        Gate::define("job.view",JobPolicy::class."@view");
        Gate::define("job.edit",JobPolicy::class."@edit");
        Gate::define("job.delete",JobPolicy::class."@delete");
    }
}
