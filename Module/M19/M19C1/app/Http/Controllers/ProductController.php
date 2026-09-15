<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        // $products = DB::table('products')->orderBy('id', 'desc')->paginate(10);
        $products = Product::orderBy('id', 'desc')->paginate(10);

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id'  => 'required|string|unique:products,product_id',
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric',
            'stock'       => 'nullable|integer',
            'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        // DB::table('products')->insert([
        //     'product_id'  => $request->product_id,
        //     'name'        => $request->name,
        //     'description' => $request->description,
        //     'price'       => $request->price,
        //     'stock'       => $request->stock,
        //     'image'       => $imagePath,
        //     'created_at'  => now(),
        //     'updated_at'  => now(),
        // ]);

        Product::create([
            'product_id'  => $request->product_id,
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'image'       => $imagePath,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        // $product = DB::table('products')->where('id', $id)->first();
        $product = Product::where('id', $id)->first();
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        // $product = DB::table('products')->where('id', $id)->first();
        $product = Product::where('id', $id)->first();
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // $product = DB::table('products')->where('id', $id)->first();
        $product = Product::where('id', $id)->first();

        $request->validate([
            'product_id'  => 'required|string|unique:products,product_id,' . $id,
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric',
            'stock'       => 'nullable|integer',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePath = $product->image;

        if ($request->hasFile('image')) {
            if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('image')->store('products', 'public');
        }

        // DB::table('products')->where('id', $id)->update([
        //     'product_id'  => $request->product_id,
        //     'name'        => $request->name,
        //     'description' => $request->description,
        //     'price'       => $request->price,
        //     'stock'       => $request->stock,
        //     'image'       => $imagePath,
        //     'updated_at'  => now(),
        // ]);

        Product::where('id', $id)->update([
            'product_id'  => $request->product_id,
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'image'       => $imagePath,
            'updated_at'  => now(),
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        // $product = DB::table('products')->where('id', $id)->first();
        $product = Product::where('id', $id)->first();

        if ($product && $product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        // DB::table('products')->where('id', $id)->delete();
        Product::where('id', $id)->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
