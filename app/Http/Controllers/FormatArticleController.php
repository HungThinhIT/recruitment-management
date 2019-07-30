<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormatArticleRequest;
use Illuminate\Http\Request;
use App\FormatArticle;

class FormatArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Store a newly created resource in storage.
     *
     */
    public function store(FormatArticleRequest $request)
    {
        $formatArticle = FormatArticle::create($request->all());
        return response()->json(["message" => "Created format article successfully", "id" => $formatArticle->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * Update the specified resource in storage.
     *
     */
    public function update(FormatArticleRequest $request, $idFormatArticle)
    {
        FormatArticle::findOrFail($idFormatArticle)->update($request->all());
        return response()->json(["message" => "Updated format article successfully!"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
