<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all()->toArray();

        return view('admin.products.index', ['products' => $products]);
    }

    public function new(Request $request)
    {
        if ($request->isMethod('POST')) {

            $data = $request->request->all();
            unset($data['_token']);

            Product::create($data);

            return redirect()->route('admin_products_index');
        }

        return view('admin.products.new');
    }

    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->isMethod('PATCH')) {

            $data = $request->request->all();
            unset($data['_token']);

            $product->update($data);

            return redirect()->route('admin_products_edit', ['id' => $id]);
        }


        return view('admin.products.edit', $product);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('admin_products_index');
    }
}
