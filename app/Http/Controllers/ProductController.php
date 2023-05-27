<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('product.index', ['products' => $products, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        try {
            $insert_batch = [];
            for ($i=0; $i < 5; $i++) { 
                $insert_batch[] = [
                    'nama_produk' => $request->nama_produk.'-'.$i,
                    'deskripsi_produk' => $request->deskripsi_produk,
                    'harga_produk' => $request->harga_produk,
                    'category_id' => $request->category_id
                ];
            }
            Product::insert($insert_batch);

            return redirect()->route('product.index')->with('sukses', 'Berhasil Menambahkan Data');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan '.$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('product.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'harga_produk' => $request->harga_produk,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('product.index')->with('sukses', 'Berhasil Merubah Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('sukses', 'Berhasil Menghapus Data');
    }
}
