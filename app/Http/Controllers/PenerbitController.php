<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPenerbit = Penerbit::paginate(3);
        return view('Penerbit.penerbit', compact('dtPenerbit'));
    }

    public function cetakPenerbit()
    {
        $dtCetakPenerbit = Penerbit::get();
        return view('Penerbit.cetak-penerbit', compact('dtCetakPenerbit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Penerbit.create-penerbit');
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
            'id_penerbit' => 'required||unique:penerbit,id_penerbit',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|max:12'
        ]);

        Penerbit::create($validateData);
        return redirect('penerbit')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $pener = Penerbit::findorfail($id);
        return view('Penerbit.edit-penerbit', compact('pener'));
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
        $pener = Penerbit::findorfail($id);
        $pener->update($request->all());
        return redirect('penerbit')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pener = Penerbit::findorfail($id);
        $pener->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
