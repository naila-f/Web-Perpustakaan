<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtKategori = Kategori::paginate(3);
        return view('Kategori.kategori', compact('dtKategori'));
    }
    public function cetakKategori()
    {
        $dtCetakKategori = Kategori::get();
        return view('Kategori.cetak-kategori', compact('dtCetakKategori'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kategori.create-kategori');
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
            'kode_kategori' => 'required',
            'nama_kategori' => 'required'
        ]);
        Kategori::create($validateData);
        return redirect('kategori')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $kat = Kategori::findorfail($id);
        return view('Kategori.edit-kategori', compact('kat'));
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
        $kat = Kategori::findorfail($id);
        $kat->update($request->all());
        return redirect('kategori')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kat = Kategori::findorfail($id);
        $kat->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
