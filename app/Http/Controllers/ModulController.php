<?php

namespace App\Http\Controllers;
use App\Models\Modul;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtModul = Modul::paginate(3);
        return view('Modul.index-modul', compact('dtModul'));
    }
    public function cetakModul()
    {
        $dtCetakModul = Modul::get();
        return view('Modul.cetak-modul', compact('dtCetakModul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Modul.create-modul');
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
            'tahun_terbit' => 'required',
            'penulis' => 'required'
        ]);
        Modul::create($validateData);
        return redirect('index-modul')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $mod = Modul::findorfail($id);
        return view('Modul.edit-modul', compact('mod'));
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
        $mod = Modul::findorfail($id);
        $mod->update($request->all());
        return redirect('index-modul')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mod = Modul::findorfail($id);
        $mod->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
