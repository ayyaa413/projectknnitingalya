<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    
    public function detail()
    {
        $product = Product::find();


        return view('detail', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
        ]);

    $product = new Product();
    $product->name = $request->input('name');
    $product->category = $request->input('category');
    $product->description = $request->input('description');
    $product->price = $request->input('price');
    $product->stok = $request->input('stok');

    if ($request->hasFile('image')) {
        $fileName = time().'.'.$request->image->extension();  
        $request->image->storeAs($fileName);
        $product->image = $fileName;
    } else {
        $product->image = 'default.jpg';
    }

    $product->save();

    return redirect()->route('admin.products.index')->with('success', 'Product created successfully');
}
        // $product = new Product($request->all());

    //     if ($request->hasFile('image')) {
    //         $product->image = $request->file('image')->store('products');
    //     }

    //     $product->save();

    //     return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    // }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
        ]);

        $product->update($request->all());

        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('products');
        }

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
