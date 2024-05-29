<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // view - add page Product
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // saving post variables <-> data Product
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // view - 1 single record /product/1
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
    public function destroy(Product $product)
    {
        // delete - 1 single record /product/1
    }
}
