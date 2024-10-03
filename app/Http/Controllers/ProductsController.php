<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $categorias = Category::paginate(25);
        return view('admin.produtos.index', compact('products'));
    }
    public function create()
    {
        $categorias = Category::all();
        return view('admin.produtos.create', compact('products'));
    }
    public function store(StoreProductsRequest $request)
    {
    }
    public function show(Products $products)
    {
        return view('admin.produtos.show', compact('products'));
    }
    public function edit(Products $products)
    {
        return view('admin.produtos.edit', compact('products'));
    }
    public function update(UpdateProductsRequest $request, Products $products)
    {
        $products->update($request->all()); return redirect()->away('/produtos')->with('success', 'Produto atualizado com sucesso');
    }
    public function destroy(Products $products)
    {
        $products->delete($request->all()); return redirect()->away('/produtos')->with('success', 'Produto removido com sucesso');
    }
}
