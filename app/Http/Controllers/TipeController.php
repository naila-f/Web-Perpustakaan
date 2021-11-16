<?php

namespace App\Http\Controllers;
use App\Models\Tipe;
use Illuminate\Http\Request;

class TipeController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtTipe = Tipe::paginate(3);
        return view('Tipe.index-tipe', compact('dtTipe'));
    }
    public function cetakTipe()
    {
        $dtCetakTipe = Tipe::get();
        return view('Tipe.cetak-tipe', compact('dtCetakTipe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tipe.create-tipe');
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
            'kode_tipe' => 'required|unique:tipe,kode_tipe',
            'tipe' => 'required'
        ]);
        Tipe::create($validateData);
        return redirect('index-tipe')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $tip = Tipe::findorfail($id);
        return view('Tipe.edit-tipe', compact('tip'));
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
        $tip = Tipe::findorfail($id);
        $tip->update($request->all());
        return redirect('index-tipe')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tip = Tipe::findorfail($id);
        $tip->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
