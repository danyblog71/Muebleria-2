<?php

namespace App\Http\Controllers\StoreControllers;
use App\Http\Controllers\Controller;
use App\Models\{Product, Category, ProductDetail,Image};
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('store.index', compact('categories'));
    }

    public function showProducts($texto)
    {
        $categories = Category::all();
        $products = Product::join("images","images.product_id","=","products.id")->where('images.priority','=',"Principal")->get();
    
        return view('store.show_products', compact('categories','products', 'texto' ));
    }

    public function productDetail($id)
    {
        $categories = Category::all();
        
        $product = Product::findOrFail($id);
        $product_detail = Product::find($id)->ProductDetail;
        $products_image = Product::find($id)->Image;
        return view('store.product_detail', compact('categories', 'product', 'product_detail', 'products_image'));


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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
