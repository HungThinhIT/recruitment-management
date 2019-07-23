<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;


/**
 * @group Article management
 */
class ArticleController extends Controller
{
    /**
     * Display a listing of the article.
     * @bodyParam keyword string keyword want to search (search by title, content, name of job, name of category, fullname of user).
     * @bodyParam property string Field in table you want to sort (title, content, name of job, name of category, name of user, isPublic). Example: title
     * @bodyParam orderby string The order sort (ASC/DESC). Example: asc
     */
    public function index(Request $request)
    {
        $orderby = $request->input('orderby')? $request->input('orderby'): 'desc';
        $articles = Article::with(["user","job","category"])
                        ->SearchByKeyWord($request->input('keyword'))
                        ->sort($request->input('property'),$orderby)
                        ->paginate(10);
        return response()->json($articles); 
    }

    /**
     * Display a listing of the article recruitment for guests.
     * 10 rows/request
     */
    public function showListArticleForCandidatePage()
    {
        // return the article in category Recruitment (catId=1)
        return response()->json(
            Article::with(["job"])
            ->where('catId',1)
            ->paginate(10));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Create an article.
     *
     * @bodyParam title string required The title of the article.
     * @bodyParam image string  The image of the article.
     * @bodyParam jobId numeric required The jobId of the article.
     * @bodyParam content string required The content of the article.
     * @bodyParam catId numeric required The catId of the article.
     */
    public function store(ArticleRequest $request)
    {
        Article::create($request->except("created_at","updated_at") + ["userId" => $request->user()->id]);
        return response()->json([
            'message'=>'Created an article successfully']);
    }
    /**
     * Display an Article by Id for Candidate page.
     *
     */
    public function showArticleForCandidatePage($idArticle)
    {
        return response()->json(Article::findOrFail($idArticle));
    }

    /**
     * Display an Article by Id.
     *
     */
    public function show($idArticle)
    {
        $article = Article::with(["user","job","category"])->findOrFail($idArticle);
        $article->job->experience = $article->job -> convertExperiencetoString($article->job->experience);
        return response()->json($article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the article by Id.
     *
     * @bodyParam title string required The title of the article.
     * @bodyParam image string  The image of the article.
     * @bodyParam jobId numeric required The jobId of the article.
     * @bodyParam content string required The content of the article.
     * @bodyParam catId numeric required The catId of the article.
     */
    public function update(ArticleRequest $request, $idArticle)
    {
        Article::findOrFail($idArticle)->update($request->except("created_at","updated_at"));
        return response()->json(['message'=>'Updated the article successfully'],200);
    }

    /**
     * Delete the article by Id.
     * @bodyParam articleId array required The id/list id of job. Example: [1,2,3,4,5]
     */
    public function destroy(ArticleRequest $request)
    {
        $articleIds = request("articleId");
        $exists = Article::whereIn('id', $articleIds)->pluck('id');
        $notExists = collect($articleIds)->diff($exists);
        $idsNotFound = "";
        foreach ($notExists as $key => $value) {
            $idsNotFound .= $value.",";
        }
        if($notExists->isNotEmpty()){
            return response()->json([
                'message'=>'Not found id: '.substr($idsNotFound,0,strlen($idsNotFound)-1)],404);
        }
        Article::destroy($exists);
        return response()->json([
           'message'=>'Deleted the article successfully']);
    }
}
