<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        if(!Auth::user()) {
            abort(403);
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // route: /product
        // view - all products
        $products = Product::paginate(10);
        // return $products->toArray();
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
    public function edit($id)
    {
        // view - edit page product/1/edit
        $product = Product::find($id);
        return view('product.edit', ['product' => $product->toArray()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateProductRequest $request)
    {
        // saving - post variables for updating

        $validated = $request->validated();
        Product::find($id)->update($validated);
        
        // redirect to /product
        return redirect('/product')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Request $request)
    {
        // delete - 1 single record /product/1->appends($request->query())
        Product::destroy($id);
        $query_param = $request->current_page ? '?page=' . $request->current_page : '';
        return redirect('/product' . $query_param)->with('success', 'Product deleted successfully.');
    }

    public function search(Request $request)
    {
        $products = Product::where('product_name', 'like', '%' . $request->q . '%')
            ->orWhere('price', 'like', '%' . $request->q . '%')
            ->orWhere('stock', 'like', '%' . $request->q . '%')
            ->orWhere('description', 'like', '%' . $request->q . '%')
            ->orWhere('manufacturer', 'like', '%' . $request->q . '%')
            ->orWhere('manufacturer_email', 'like', '%' . $request->q . '%')
            ->orWhere('manufacturer_contact', 'like', '%' . $request->q . '%')
            ->orWhere('manufacturer_address', 'like', '%' . $request->q . '%')
            ->paginate(10)->appends($request->query());
        return view('product.index', ['products' => $products->toArray()]);
    }
}
