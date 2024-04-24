<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'article' => 'required|string|alpha_num|unique:products',
            'name' => 'required|string|min:10',
            'status' => 'required|in:Доступен,Не доступен',
        ]);
        Product::create($validatedData);
        $message = 'Продукт успешно добавлен!';

        return redirect()->route('product.index')->with('message', $message);
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'article' => 'required|string|alpha_num|unique:products',
            'name' => 'required|string|min:10',
            'status' => 'required|in:Доступен,Не доступен',
        ]);
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('product.index');
    }
}

