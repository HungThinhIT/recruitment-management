<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Database\Eloquent\Builder;

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
        try{
            if ($request->keyword !=null&& $request->property !=null && $request->orderby !=null )
            {
                $data = $request->only("keyword","property","orderby");
                return response()->json(
                        Article::where('title', 'like', '%'.$data["keyword"].'%')
                                ->orwhere('content', 'like', '%'.$data["keyword"].'%')
                                ->orWhereHas('user', function (Builder $query) use ($data){
                                    $query->where('fullname', 'like', '%'.$data["keyword"].'%');
                                })
                                ->orWhereHas('category', function (Builder $query) use ($data){
                                    $query->where('name', 'like', '%'.$data["keyword"].'%');
                                })
                                ->orWhereHas('job', function (Builder $query) use ($data){
                                    $query->where('name', 'like', '%'.$data["keyword"].'%');
                                })
                                ->orderBy($data["property"], $data["orderby"])
                                ->with(["user","job","category"])
                                ->paginate(10)
                    );
            }     
            else if ($request->keyword !=null)
            {
                $data = $request->keyword;
                return response()->json(
                        Article::where('title', 'like', '%'.$data.'%')
                                ->orwhere('content', 'like', '%'.$data.'%')
                                ->orWhereHas('user', function (Builder $query) use ($data){
                                    $query->where('fullname', 'like', '%'.$data.'%');
                                })
                                ->orWhereHas('category', function (Builder $query) use ($data){
                                    $query->where('name', 'like', '%'.$data.'%');
                                })
                                ->orWhereHas('job', function (Builder $query) use ($data){
                                    $query->where('name', 'like', '%'.$data.'%');
                                })
                                ->with(["user","job","category"])
                                ->paginate(10));    
            }
            else if ($request->property !=null && $request->orderby !=null )
            {
                $data = $request->only("property","orderby");
                return response()->json(Article::orderBy($data["property"], $data["orderby"])
                                ->with(["user","job","category"])
                                ->paginate(10));
            }
            else{
                return response()->json(Article::with(["user","job","category"])
                                ->paginate(10));
            }
        }
        catch(\Illuminate\Database\QueryException $queryEx){
            return response()->json(['message' => $data["property"]." field is not existed"],422);
        }
        catch(\InvalidArgumentException $ex){
            return response()->json(['message' => $data["orderby"]." field is invalid"],422);
        }
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
