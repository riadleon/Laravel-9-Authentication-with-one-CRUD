<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('backend.product.product', compact('data'));
    }
    public function create()
    {
        return view('backend.product.create');
    }

    public function store(Request $request)
    {
        //    validation code

        $request->validate([
            'name' => 'required|unique:products',
            'price' => 'required'

        ]);

        try {
            $data = $request->all();
            Product::create($data);
            return redirect()->route('product.index')->withSuccess('Product Added successfully');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {
        $data = Product::where('id', $id)->first();
        return view('backend.product.edit', compact('data'));
    }


    public function update(Request $request,  $id)
    {
        $data = $request->except('_token');
        Product::where('id', $id)->update($data);
        return redirect()->route('product.index')->withSuccess('Successfully Updated');
    }


    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('product.index')->withSuccess('Successfully Deleted');
    }
}
