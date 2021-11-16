<?php

namespace App\Http\Controllers;

use App\Models\Majalah;
use Illuminate\Http\Request;

class MajalahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtMajalah = Majalah::paginate(3);
        return view('Majalah.index-majalah', compact('dtMajalah'));
    }

    public function cetakMajalah()
    {
        $dtCetakMajalah = Majalah::get();
        return view('Majalah.cetak-majalah', compact('dtCetakMajalah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Majalah.create-majalah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id_majalah' => 'required||unique:majalah,id_majalah',
            'nama' => 'required',
            'tahun_terbit' => 'required'
        ]);

        Majalah::create($validateData);
        return redirect('index-majalah')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $maj = Majalah::findorfail($id);
        return view('Majalah.edit-majalah', compact('maj'));
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
        $maj = Majalah::findorfail($id);
        $maj->update($request->all());
        return redirect('index-majalah')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maj = Majalah::findorfail($id);
        $maj->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
