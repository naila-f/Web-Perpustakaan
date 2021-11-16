<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPenulis = Penulis::paginate(3);
        return view('Penulis.index-penulis', compact('dtPenulis'));
    }

    public function cetakPenulis()
    {
        $dtCetakPenulis = Penulis::get();
        return view('Penulis.cetak-penulis', compact('dtCetakPenulis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Penulis.create-penulis');
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
            'id_penulis' => 'required||unique:penulis,id_penulis',
            'nama' => 'required',
            'no_hp' => 'required|max:12'
        ]);

        Penulis::create($validateData);
        return redirect('index-penulis')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $pen = Penulis::findorfail($id);
        return view('Penulis.edit-penulis', compact('pen'));
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
        $pen = Penulis::findorfail($id);
        $pen->update($request->all());
        return redirect('index-penulis')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pen = Penulis::findorfail($id);
        $pen->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
