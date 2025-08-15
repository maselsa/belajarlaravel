<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProductsController extends Controller
{
    // READ (index)
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    // SHOW (detail)
    public function show($id)
    {
        $products = Products::findOrFail($id);
        return view('products.show', compact('products'));
    }

    // CREATE (form & store)
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'supplier_id' => 'required|integer',
            'name' => 'required|string',
            'images' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'stock' => 'required|integer',
            'unit' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'description' => 'nullable|string'
        ]);


        $images = $request->file('images');
        $directory ='images/';
        $filename = str::random(10) . '.' . $images->getClientOriginalExtension();
        Storage::putFileAs($directory, $images, $filename);

        $products = Products::create([
            'supplier_id' => $request->supplier_id,
            'name' => $request->name,
            'images' => $filename,
            'stock' => $request->stock,
            'unit' => $request->unit,
            'price' => $request->price,
            'discount' => $request->discount,
            'description' => $request->description,
        ]);
        return redirect()->route('products.index');
    }

    // UPDATE
    public function edit($id)
    {
        $products = Products::findOrFail($id);
        return view('products.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'supplier_id' => 'required|integer',
            'name' => 'required|string',
            'images' => 'nullable|images',
            'stock' => 'required|numeric|min',
            'unit' => 'required|max:4',
            'price' => 'required',
            'discount' => 'nullable|numeric',
            'description' => 'nullable|string'
        ]);

        $products = Products::findOrFail($id);
        $filename = $product->images;

        if ($request->hasFile('images')){
            $images = $request->file('images');
            $directory = 'images/';
            $filename = Str::random(10) . '.' .
               $images->getClientOriginalExtension();
            Storage::putFileAs($directory, $images, $filename);
        }
        $products->update($request->all());
        return redirect()->route('products.index')->with('success', 'products updated successfully.');
    }

    // DELETE
    public function destroy($id)
    {
        Products::destroy($id);
        return redirect()->route('products.index')->with('success', 'products deleted successfully.');
    }
}