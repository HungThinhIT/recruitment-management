<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\ArticleRequest;


/**
 * @group Article management
 */
class ArticleController extends Controller
{
    protected $articleServices;

    public function __construct()
    {
        $this->articleServices = new ArticleServices;
    }
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
                        ->SearchByKeyWord($request->input('keyword'),$orderby)
                        ->sort($request->input('property'),$orderby)
                        ->paginate(10);
        return response()->json($articles); 
    }

    /**
     * Display a listing of the article recruitment for guests.
     * 10 rows/request
     * @bodyParam keyword string keyword want to search (search by title, content, name of job, address of job, position of job, experience and status of job).
     * @bodyParam position string The position of job, if select "all", this param is empty.  Example: Tester
     * @bodyParam category string The category of article (Recruitment/Others). Example: Recruitment
     * @bodyParam location string The location of job, if select "all", this param is empty. Example: Office 1 (453-455 Hoang Dieu)
     * @bodyParam status string The status of job, if select "all", this param is empty. Example: Full-time
     * @bodyParam orderby string The order sort (ASC/DESC). Example: asc
     */
    public function showListArticleForCandidatePage(Request $request)
    {
        $orderby = $request->input('orderby')? $request->input('orderby'): 'desc';
        $articles = Article::with(["job"])
                                    ->SearchByKeyWord($request->input('keyword'),$orderby)
                                    ->OfLocation($request->input('location'),$orderby)
                                    ->OfPosition($request->input('position'),$orderby)
                                    ->OfStatus($request->input('status'),$orderby)
                                    ->OfCategory($request->input('category'),$orderby)
                                    ->where('isPublic',1)
                                    ->paginate(10);
            return response()->json($articles);                              
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
     * @bodyParam image file The image of the article.
     * @bodyParam jobId numeric The jobId of the article.
     * @bodyParam content string required The content of the article.
     * @bodyParam catId numeric required The catId of the article.
     * @bodyParam isPublic boolean required Publish/not publish (1/0). Example: 0
     */
    public function store(ArticleRequest $request)
    {
        //upload image    
        if ($request->file("image"))    
        {
            $imageName = $this->articleServices->handleUploadedImage($request->file('image'));
            if(!$imageName)
                return response()->json(['message' => "Upload failed, image is not exist"],422);
        }
        else $imageName='';
        $article = Article::create($request->except("image","created_at","updated_at") 
                                    + ["userId" => $request->user()->id]
                                    + ["image"  =>$imageName]);
        return response()->json([
            'message'=>'Created an article successfully',
            'article'=>$article]);
    }
    /**
     * Display an Article by Id for Candidate page.
     *
     */
    public function showArticleForCandidatePage($idArticle)
    {
        $article = Article::with(["job"])->findOrFail($idArticle);
        if ($article->jobId)
        {
            $article->job->experience = $article->job -> convertExperiencetoString($article->job->experience);
        } 
        return response()->json($article);
    }

    /**
     * Display an Article by Id.
     *
     */
    public function show($idArticle)
    {
        $article = Article::with(["user","job","category"])->findOrFail($idArticle);
        if ($article->jobId)
        {
            $article->job->experience = $article->job -> convertExperiencetoString($article->job->experience);
        }       
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
     * @bodyParam image file The image of the article.
     * @bodyParam jobId numeric The jobId of the article.
     * @bodyParam content string required The content of the article.
     * @bodyParam catId numeric required The catId of the article.
     * @bodyParam isPublic boolean required Publish/not publish (1/0). Example: 1
     */
    public function update(ArticleRequest $request, $idArticle)
    {
        $article = Article::findOrFail($idArticle);
        $imageName = $article->image;
        if ($request->file("image"))
        {
            unlink('upload/images/articles/'.$article->image);
            $imageName = $this->articleServices->handleUploadedImage($request->file('image'));
            if(!$imageName) 
                return response()->json(['message' => "Upload failed, image is not exist"],422);
        }
        $article->update($request->except("image","created_at","updated_at")
                            + ["image"  =>$imageName]
                            + ["jobId"=> $request->input("jobId")]);
        return response()->json(['message'=>'Updated the article successfully',
                                'article'=>$article],200);
    }

    /**
     * Delete the article by Id.
     * @bodyParam articleId array required The id/list id of job. If you want to delete all, the value of articleId = ["all"]. Example: [1,2,3,4,5]
     */
    public function destroy(ArticleRequest $request)
    {
        $articleIds = request("articleId");
        //if delete all
        if (in_array('all', $articleIds))
        {
                DB::table('articles')->delete();
                return response()->json([
                    'message'=>'Deleted all articles successfully.'],200);
        }
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

    /**
     * Get list articles related to the current article (same job,same category).
     * @bodyParam count numeric The total item you want to get.
     */
    public function showArticleRelatedForCandidatePage($idArticle,Request $request)
    {
        $count = $request->input('count')? $request->input('count'): 10;
        $currentArticle = Article::findOrFail($idArticle);
        $articles = Article::with(["job"])  ->where('id','!=',$idArticle)
                                ->where('isPublic',1)                                        
                                ->where('jobId',$currentArticle->jobId)
                                ->orwhere('catId',$currentArticle->catId)
                                ->orderby('created_at','desc')
                                ->limit($count)
                                ->get();
        return response()->json($articles);
    }
}
class ArticleServices
{
    public function handleUploadedImage($image)
    {
        if (!is_null($image)) {
            $imageName = 'article_'.str_random(12).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/images/articles'),$imageName);
            return $imageName;
        }
        else{
            return NULL;
        }
    }
}