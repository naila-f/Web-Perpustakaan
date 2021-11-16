<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtBuku = Buku::paginate(3);
        return view('Buku.index-buku', compact('dtBuku'));
    }
    public function cetakBuku()
    {
        $dtCetakBuku = Buku::get();
        return view('Buku.cetak-buku', compact('dtCetakBuku'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Buku.create-buku');
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
            'kode_buku' => 'required',
            'judul' => 'required',
            'tahun_terbit' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required'
        ]);
        Buku::create($validateData);
        return redirect('index-buku')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $buk = Buku::findorfail($id);
        return view('Buku.edit-buku', compact('buk'));
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
        $buk = Buku::findorfail($id);
        $buk->update($request->all());
        return redirect('index-buku')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buk = Buku::findorfail($id);
        $buk->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
