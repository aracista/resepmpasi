<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
     public function index()
    {
        // $reseps = Resep::all();
        // return view('index', ['reseps' => $reseps]);
        return view('tentang');
    }
}
