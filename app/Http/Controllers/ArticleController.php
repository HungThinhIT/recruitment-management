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
     * Display a listing of the article for admin/user.
     * 10 rows/request
     */
    public function index()
    {
        return response()->json(Article::with(["user","job","category"])->paginate(10));
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
     * @bodyParam catId string required The catId of the article.
     */
    public function store(ArticleRequest $request)
    {
        $request->request->add(["userId"=>$request->user()->id]);
        Article::create($request->except("created_at","updated_at"));
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
        return response()->json(Article::with(["user","job","category"])->findOrFail($idArticle));
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
     * @bodyParam catId string required The catId of the article.
     */
    public function update(ArticleRequest $request, $idArticle)
    {
        $request->request->add(["userId"=>$request->user()->id]);
        Article::findOrFail($idArticle)->update($request->except("created_at","updated_at"));
        return response()->json(['message'=>'Updated the article successfully'],200);
    }

    /**
     * Delete the article by Id.
     * @bodyParam articleId string required The id/list id of job. Example: 1,2,3,4,5
     */
    public function destroy(Article $article)
    {
        $articleIds = explode (",", request("articleId"));
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
