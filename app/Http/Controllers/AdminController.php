<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resep;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.tambah');
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
        'id_kat' => 'required',
        'judul' => 'required',
        'isi' => 'required',
        'gambar' => 'required | mimes:jpeg,jpg,png',
    ]);

        $filename = time().'.png';
        $request->file('gambar')->storeAs('public/gambar', $filename);
        $resep = new Resep;

        $resep->id_kat  = $request->id_kat;
        $resep->judul   = $request->judul;
        $resep->isi     = $request->isi;
        $resep->gambar  = $filename;


        $resep->save();

        //ngirim mail
        //Mail::to('test@emailuser.com')->send(new BlogPosted());

        return redirect('admin')->with('message', 'berhasil !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $reseps = Resep::find($id);
        //$blogs = DB::table('blog')->paginate(1);
        return view('admin.daftarartikel', compact('reseps'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reseps = Resep::find($id);

        if(!$reseps){
            abort(404);
        }
        return view('admin.editresep')->with('reseps', $reseps);
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
        'id_kat' => 'required',
        'judul' => 'required',
        'isi' => 'required',
        'gambar' => 'required | mimes:jpeg,jpg,png',
    ]);

        $filename = time().'.png';
        $request->file('gambar')->storeAs('public/gambar', $filename);
        $resep = new Resep;

        $resep->id_kat  = $request->id_kat;
        $resep->judul   = $request->judul;
        $resep->isi     = $request->isi;
        $resep->gambar  = $filename;


        $resep->save();

        //ngirim mail
        //Mail::to('test@emailuser.com')->send(new BlogPosted());

        return redirect('admin')->with('message', 'berhasil !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $reseps = Resep::find($id);
        $reseps->delete();
        return redirect('admin')->with('message', 'artikel sudah di hapus!');
    }
}
 -->