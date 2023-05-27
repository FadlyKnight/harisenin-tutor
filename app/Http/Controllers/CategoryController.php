<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('category.create');
    }
    public function store(Request $request){
        try {
            Category::create([
                'nama_kategori' => $request->nama_kategori
            ]);
            return redirect()->route('product.index')->with('sukses', 'Berhasil Menambahkan Data');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan ');
        }
    }
}
