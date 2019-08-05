<?php

namespace App\Providers;

use App\Article;
use App\User;
use App\FormatArticle;
use App\Role;
use App\Candidate;
use App\Interviewer;
use App\Interview;
use App\Job;
use App\Category;
use App\Policies\FormatArticlePolicy;
use App\Policies\PublishArticlePolicy;
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
use App\Policies\CategoryPolicy;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Role::class => RolePolicy::class,
        Article::class => ArticlePolicy::class,
        Candidate::class => CandidatePolicy::class,
        Interviewer::class => InterviewerPolicy::class,
        Interview::class => InterviewPolicy::class,
        Job::class => JobPolicy::class,
        Category::class => CategoryPolicy::class,
        FormatArticle::class => FormatArticlePolicy::class,
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

//        Gate::define('article.edit', function (User $user,Article $article) {
//            if($user->id == $article->userId){
//                return true;
//            }
//            if($user->hasAccess("Article-edit")){
//                return true;
//            }
//        });

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
        Gate::define("user.view",UserPolicy::class."@viewAny");
        Gate::define("user.edit",UserPolicy::class."@update");
        Gate::define("user.delete",UserPolicy::class."@delete");

        /*
        * Article Gate.
        */
        Gate::define("article.create",ArticlePolicy::class."@create");
        Gate::define("article.view",ArticlePolicy::class."@view");
        Gate::define("article.edit",ArticlePolicy::class."@update");
        Gate::define("article.delete",ArticlePolicy::class."@delete");
        Gate::define("article-publish.edit",PublishArticlePolicy::class."@update");

        /*
        * Candidate Gate.
        */
        Gate::define("candidate.create",CandidatePolicy::class."@create");
        Gate::define("candidate.view",CandidatePolicy::class."@view");
        Gate::define("candidate.edit",CandidatePolicy::class."@update");
        Gate::define("candidate.delete",CandidatePolicy::class."@delete");

        /*
        * Interviewer Gate.
        */
        Gate::define("interviewer.create",InterviewerPolicy::class."@create");
        Gate::define("interviewer.view",InterviewerPolicy::class."@view");
        Gate::define("interviewer.edit",InterviewerPolicy::class."@update");
        Gate::define("interviewer.delete",InterviewerPolicy::class."@delete");

        /*
        * Interview Gate.
        */
        Gate::define("interview.create",InterviewPolicy::class."@create");
        Gate::define("interview.view",InterviewPolicy::class."@view");
        Gate::define("interview.edit",InterviewPolicy::class."@update");
        Gate::define("interview.delete",InterviewPolicy::class."@delete");

        /*
        * Job Gate.
        */
        Gate::define("job.create",JobPolicy::class."@create");
        Gate::define("job.view",JobPolicy::class."@view");
        Gate::define("job.edit",JobPolicy::class."@update");
        Gate::define("job.delete",JobPolicy::class."@delete");

        /*
        * Category Gate.
        */
        Gate::define("category.create",CategoryPolicy::class."@create");
        Gate::define("category.view",CategoryPolicy::class."@view");
        Gate::define("category.edit",CategoryPolicy::class."@update");
        Gate::define("category.delete",CategoryPolicy::class."@delete");

        /*
        * Category Gate.
        */
        Gate::define("format.management",FormatArticlePolicy::class."@create");
        Gate::define("format.management",FormatArticlePolicy::class."@view");
        Gate::define("format.management",FormatArticlePolicy::class."@update");
        Gate::define("format.management",FormatArticlePolicy::class."@delete");
    }
}
