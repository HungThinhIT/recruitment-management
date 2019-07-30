<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormatArticleRequest;
use Illuminate\Http\Request;
use App\FormatArticle;
/**
 * @group Format article management
 *
 */
class FormatArticleController extends Controller
{
    /**
     * Display a listing of the format article.
     *
     * @bodyParam numberRecord string The record number you want to get per page(numberRecord > 0) Default is return all.
     */
    public function index(Request $request)
    {
        $this->validate($request, ["numberRecord" => "numeric|min:1"]);

        $formatArticles = NULL;
        if($request->has("numberRecord") && $request->input("numberRecord") > 0 ){
            $formatArticles = FormatArticle::paginate($request->input("numberRecord"));
        }
        else{
            $formatArticles = FormatArticle::all();
        }
        return response()->json($formatArticles);

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
     * Create a format article.
     * @bodyParam title string required The title of format.
     * @bodyParam content string required The content of format.
     */
    public function store(FormatArticleRequest $request)
    {
        $formatArticle = FormatArticle::create($request->all());
        return response()->json(["message" => "Created format article successfully", "id" => $formatArticle->id]);
    }

    /**
     * Show a format article by id.
     */
    public function show($formatId)
    {
        $formatActive = FormatArticle::findOrFail($formatId);
        return response()->json($formatActive);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update a format article by Id.
     * @bodyParam title string required The title of format.
     * @bodyParam content string required The content of format.
     */

    public function update(FormatArticleRequest $request, $idFormatArticle)
    {
        FormatArticle::findOrFail($idFormatArticle)->update($request->all());
        return response()->json(["message" => "Updated format article successfully!"]);
    }

    /**
     * Delete a format article/many/all. <br>
     *
     * If you want to delete all, { <br>
     * formatId : [0]
     * status: "all" <br>}<br>
     * And else, { <br>
     * formatId : [1,2,3,...]
     * status: "none" <br>}<br>
     *
     *
     * @bodyParam formatId string required The title of format.
     * @bodyParam status string required The title of format.
     */
    public function destroy(FormatArticleRequest $request)
    {
        $formatId = $request->input("formatId");
        if($request->has("status") && $request->has("formatId")){
            if($request->input("status") == "all" && $formatId[0] == 0){
                FormatArticle::truncate();
                return response()->json([
                    'message'=>'Deleted all format article successfully.'],200);
            }
            if($formatId[0] != 0 && $request->input("status") == "none"){
                $exists = FormatArticle::whereIn('id', $formatId)->pluck('id');
                $notExists = collect($formatId)->diff($exists);
                //Get list id not found from array to var.
                $idsNotFound = "";
                foreach ($notExists as $key => $value) {
                    $idsNotFound .= $value.",";
                }
                if($notExists->isNotEmpty()){
                    return response()->json([
                        'message'=>'Not found id: '.rtrim($idsNotFound,",")]);
                }
                FormatArticle::whereIn('id', $formatId)->delete();
                return response()->json([
                    'message'=>'Deleted interviewer successfully.'],200);
            }
            else{
                return response()->json([
                    'message'=>'The data is invalid.'],422);
            }
        }
        else{
            return response()->json([
                'message'=>'The [formatId] and [status] is invalid.'],422);
        }
    }
}
