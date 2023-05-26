<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function check_data(){
        return 'check_data SUCCESS !';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = [
            [
                'id' => '1',
                'name' => 'Pakaian Wanita'
            ],
            [
                'id' => '2',
                'name' => 'Pakaian Pria'
            ],
            [
                'id' => '3',
                'name' => 'Makanan'
            ],
        ];
        return view('category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('store category -> LEWAT METHOD POST',$request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd('show category '.$id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('category.edit', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd('update category -> LEWAT METHOD PUT', $id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd('destroy category -> LEWAT METHOD DELETE', $id);
    }
}
