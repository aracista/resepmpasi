<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pesan;

class KontakController extends Controller
{
    public function index()
    {
    	return view('kontak');
    }

    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
        'nama' => 'required',
        'email' => 'required',
        'komentar' => 'required',
    ]); 

        $pesan = new Pesan;

        $pesan->nama= $request->nama;
        $pesan->email= $request->email;
        $pesan->komentar= $request->komentar;


        $pesan->save();

        //ngirim mail
        //Mail::to('test@emailuser.com')->send(new BlogPosted());

        return redirect('kontak')->with('message', 'pesan sudah di terkirim !');

    }

    public function showpesan()
    {
       
        $pesans = Pesan::paginate(4);
        return view('admin.lihatpesan', ['pesans' => $pesans]);
    }


}
