<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // route: /product
        // view - all products
        $products = Product::paginate(10);
        return view('product.index', ['products' => $products->toArray()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // view - add page Product
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // saving post variables <-> data Product

        $validated = $request->validated();
        Product::create($validated);

        // redirect to /product
        return redirect('/product')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // view - 1 single record /product/1
        $product = Product::find($id);
        return view('product.show', ['product' => $product->toArray()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // view - edit page product/1
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // saving - post variables for updating
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // delete - 1 single record /product/1
        Product::destroy($id);
        return redirect('/product')->with('success', 'Product deleted successfully.');
    }
}
