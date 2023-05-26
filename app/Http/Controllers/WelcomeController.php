<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request){
        if ($request->name == 'budi') {
            return view('welcome');
        } elseif ($request->name == 'bagus') {
            return 'HALO PONTIANAK';
        }
        return 'HALO BANDUNG';
    }

}
