<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Category;
use Illuminate\Http\Request;
/**
 * @group Category management
 *
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the category.
     *
     * @bodyParam keyword string keyword want to search (search by name). Example: name
     * @bodyParam field string Field in table you want to sort (name). Example: name
     * @bodyParam orderBy string The order sort (ASC/DESC). Example: desc
     * @bodyParam paginate numeric The count of item you want to paginate.
     */
    public function index(Request $request)
    {
        $this->validate($request,['paginate' => 'numeric']);
        $count = $request->input("paginate")?$request->input("paginate"):0;
        if ($count ==0)
        {
            $categoryActive = Category::query()->search($request)
            ->orderBy($request->input("field"),$request->input("orderBy"))
            ->get();
        }
        else
        {
            $categoryActive = Category::query()->search($request)
            ->orderBy($request->input("field"),$request->input("orderBy"))
            ->paginate($count);
        }      
        return response()->json($categoryActive);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
