<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Resep;
use App\Kategori;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reseps = Resep::all();
        return view('admin.index',compact('reseps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
    
        return view('admin.tambah', compact('kategori'));
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
        'kategori_id' => 'required',
        'judul' => 'required',
        'isi' => 'required',
        'gambar' => 'required | mimes:jpeg,jpg,png',
    ]);

       $file = $request->file('gambar');
       $fileName = $file->getClientOriginalName();
       $request->file('gambar')->move("gambar/", $fileName);
       $resep = new Resep;

        $resep->kategori_id  = $request->kategori_id;
        $resep->judul   = $request->judul;
        $resep->isi     = $request->isi;
        $resep->gambar  = $fileName;


        $resep->save();

        //ngirim mail
        //Mail::to('test@emailuser.com')->send(new BlogPosted());

        return redirect('admin/resep')->with('message', 'berhasil !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resep = Resep::findOrFail($id);
        return $resep;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resep = Resep::where('id',$id)->first();
        $kategori = Kategori::all();

        if(!$resep){
            abort(404);
        }
        return view('admin.editresep', compact('resep','kategori'));
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
        'kategori_id' => 'required',
        'judul' => 'required',
        'isi' => 'required',
        'gambar' => 'required | mimes:jpeg,jpg,png',
        ]);

        $update = Resep::where('id',$id)->first();
        $update->kategori_id = $request['kategori_id'];
        $update->judul = $request['judul'];
        $update->isi = $request['isi'];

        if($request->file('gambar') == "")
        {
            $update->gambar = $update->gambar;
        }
        else
        {
            $file = $request->file('gambar');
            $fileName = $file->getClientOriginalName();
            $request->file('gambar')->move("gambar/", $fileName);
            $update->gambar = $fileName;
        }
            $update->update();


    //     //return $request->all();
    //     $validatedData = $request->validate([
    //     'kategori_id' => 'required',
    //     'judul' => 'required',
    //     'isi' => 'required',
    //     'gambar' => 'required | mimes:jpeg,jpg,png',
    // ]);

    //     $filename = time().'.png';
    //     $request->file('gambar')->move('gambar/', $filename);
    //     $resep = Resep::where('id',$id);
    //     $resep->update([
    //         'kategori_id' => $request->kategori_id,
    //         'judul' => $request->judul,
    //         'isi' => $request->isi,
    //         'gambar' => $request->gambar,
    //     ]);

    return redirect('admin/resep')->with('message', 'berhasil !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reseps = Resep::where('id',$id);
        $reseps->delete();
        return redirect('admin/resep')->with('message', 'artikel sudah di hapus!');
    }
    

    
}
