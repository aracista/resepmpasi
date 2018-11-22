<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resep;

class BerandaController extends Controller
{
    public function index()
    {
        $reseps = Resep::orderBy('id', 'desc')
                ->limit(5)->get();
        return view('index', ['reseps' => $reseps]);
        return view('index');
    }

    public function resep()
    {
        $resep = Resep::all();
        $reseps = Resep::all();

        return view('resep',compact('resep','reseps'));
    }

    public function show($id)
    {
    	$resep = Resep::findOrFail($id);
        return view('detail-resep',compact('resep'));
    }
}
