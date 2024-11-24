<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $total = $products->count();
        return view('admin.product.home', compact(['products', 'total']));
        // $products = Product::orderBy('id_produto', 'desc')->get();
        // $total = Product::count();
        // return view('admin.product.home', compact(['products', 'total']));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);
        Product::create($request->all());
        return redirect()->route('admin.product.home')->with('success', 'Produto adicionado com sucesso');
    }

    public function edit($id_produto)
    {   //id_produto
        $products = Product::findOrFail($id_produto);
        return view('admin.product.update', compact('products'));
    }

    public function update(Request $request, $id_produto)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer'
        ]);

        $product = Product::findOrFail($id_produto);
        $product->update($request->all());

        return redirect()->route('admin/products')->with('success', 'Produto atualizado com sucesso');
    }

    public function destroy($id_produto)
    {
        $product = Product::findOrFail($id_produto);
        $product->delete();

        return redirect()->route('admin/products')->with('success', 'Produto deletado com sucesso');
    }
}
