<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtBerita = Berita::paginate(3);
        return view('Berita.berita', compact('dtBerita'));
    }
    public function cetakBerita()
    {
        $dtCetakBerita = Berita::get();
        return view('Berita.cetak-berita', compact('dtCetakBerita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Berita.create-berita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request->all());
         $validateData = $request->validate([
            'judul' => 'required',
            'author' => 'required',
            'resume' => 'required',
            'publised_at' => 'required' 
        ]);
        Berita::create($validateData);
        return redirect('berita')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $ber = Berita::findorfail($id);
        return view('Berita.edit-berita', compact('ber'));
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
        $ber = Berita::findorfail($id);
        $ber->update($request->all());
        return redirect('berita')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ber = Berita::findorfail($id);
        $ber->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
