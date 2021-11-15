<?php

namespace App\Http\Controllers;

use App\Models\Daftarhadir;
use Illuminate\Http\Request;

class DaftarhadirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtDaftarhadir = Daftarhadir::paginate(3);
        return view('Daftarhadir.daftarhadir', compact('dtDaftarhadir'));
    }

    public function cetakDaftarhadir()
    {
        $dtCetakDaftarhadir = Daftarhadir::get();
        return view('Daftarhadir.cetak-daftarhadir', compact('dtCetakDaftarhadir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Daftarhadir.create-daftarhadir');
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
            'id_hadir' => 'required||unique:daftarhadir,id_hadir',
            'keperluan' => 'required',
            'tanggal_kehadiran' => 'required'
        ]);

        Daftarhadir::create($validateData);
        return redirect('daftarhadir')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $daf = Daftarhadir::findorfail($id);
        return view('Daftarhadir.edit-daftarhadir', compact('daf'));
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
        $daf = Daftarhadir::findorfail($id);
        $daf->update($request->all());
        return redirect('daftarhadir')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daf = Daftarhadir::findorfail($id);
        $daf->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
