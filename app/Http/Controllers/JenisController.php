<?php

namespace App\Http\Controllers;
use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtJenis = Jenis::paginate(3);
        return view('Jenis.jenis', compact('dtJenis'));
    }
    public function cetakJenis()
    {
        $dtCetakJenis = Jenis::get();
        return view('Jenis.cetak-jenis', compact('dtCetakJenis'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jenis.create-jenis');
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
            'kode_jenis' => 'required',
            'nama_jenis' => 'required'
        ]);
        Jenis::create($validateData);
        return redirect('jenis')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $jen = Jenis::findorfail($id);
        return view('Jenis.edit-jenis', compact('jen'));
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
        $jen = Jenis::findorfail($id);
        $jen->update($request->all());
        return redirect('jenis')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jen = Jenis::findorfail($id);
        $jen->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
