<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $list = Product::where('nvt_product.status','!=',0)
         ->join('nvt_category','nvt_category.id','=','nvt_product.category_id')
         ->join('nvt_brand','nvt_brand.id','=','nvt_product.brand_id')
         ->select('nvt_product.id','nvt_product.id','nvt_product.name','nvt_product.image','nvt_category.name as categoryname','nvt_brand.name as brandname')
         ->orderBy('nvt_product.created_at','desc')
         ->get();

         return view('backend.product.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_category= Category::where('status','!=',0)
        ->orderBy('created_at','asc')
        ->get();
        $list_brand= Brand::where('status','!=',0)
        ->orderBy('created_at','asc')
        ->get();
        $htmlcategoryid="";
        $htmlbrandid="";
        foreach($list_category as $item)
        {
            $htmlcategoryid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
        }
        foreach($list_brand as $item)
        {
            $htmlbrandid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
        }
        return view("backend.product.create",compact("htmlcategoryid","htmlbrandid"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product=new Product();
        $product->name=$request->name; //form
        $product->slug=Str::of($request->name)->slug('-');
        $product->category_id=$request->category_id;//form
        $product->brand_id=$request->brand_id;//form
        $product->price=$request->price;//form
        $product->pricesale=$request->pricesale;//form
        $product->qty=$request->qty;//form
        $product->description=$request->description;//form
        $product->detail=$request->detail;//form
        $product->created_at=date('Y-m-d H:i:s');
        $product->created_by=Auth::id()??1;
        $product->status=$request->status;//form
         $product->image=$request->image;//form
        $product->save();
        return redirect()->route('admin.product.index');
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
