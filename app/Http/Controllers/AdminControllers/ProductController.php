<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newProduct = new Product;
        $newProduct-> code = $request -> input('code');
        $newProduct-> name = $request -> input('name');
        $newProduct-> cost = $request -> input('cost');
        $newProduct-> stock = $request -> input('stock');
        $newProduct-> categories_id = $request -> input('category');
        $newProduct->save();
        return redirect()->route('admin.products_index')->with('info','Producto creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product-> code = $request -> input('code');
        $product-> name = $request -> input('name');
        $product-> cost = $request -> input('cost');
        $product-> stock = $request -> input('stock');
        $product-> categories_id = $request -> input('category');
        $product->save();
        return redirect()->route('admin.products_index')->with('info','Producto editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product:: findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products_index')->with('info','Producto eliminado exitosamente');
    }
}
