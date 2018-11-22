<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('admin.kategori',compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori-baru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
        'nama' => 'required',
    ]);

        Kategori::create($request->all());


        

        return redirect('admin/kategori')->with('message', 'berhasil !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $kategori = Kategori::where('id',$id)->first();

        if(!$kategori){
            abort(404);
        }
        return view('admin.kategori-edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'nama' => 'required',
    ]);

        $kategori = Kategori::find($id);
        $kategori->update([
            'nama' => $request->nama,
        ]);

    return redirect('admin/kategori')->with('message', 'berhasil !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::where('id',$id);
        $kategori->delete();
        return redirect('admin/kategori')->with('message', 'artikel sudah di hapus!');
    }
}
