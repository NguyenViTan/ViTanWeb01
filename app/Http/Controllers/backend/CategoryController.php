<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Controllers\backend\CategoryController;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Category::where('nvt_category.status','!=',0)
        
        ->select('nvt_category.id','nvt_category.id','nvt_category.name','nvt_category.image','nvt_category.slug')
        ->orderBy('nvt_category.created_at','desc')
        ->get();

        return view('backend.category.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category=new Category();
        $category->name=$request->name;
        $category->slug=Str::of($request->name)->slug('-');
        $category->parent_id=$request->parent_id;
        $category->sort_order=$request->sort_order;
        $category->description=$request->description;
        $category->created_at=date('Y-m-d H:i:s');
        $category->created_by=Auth::id()??1;
        $category->status=$request->status;
        $category->save();
        return redirect()->route('admin.category.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
