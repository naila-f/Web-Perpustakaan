<?php

namespace App\Http\Controllers;
use App\Models\Kamus;
use Illuminate\Http\Request;

class KamusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtKamus = Kamus::paginate(3);
        return view('Kamus.kamus', compact('dtKamus'));
    }
    public function cetakKamus()
    {
        $dtCetakKamus = Kamus::get();
        return view('Kamus.cetak-kamus', compact('dtCetakKamus'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kamus.create-kamus');
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
            'penulis' => 'required',
            'penerbit' => 'required'
        ]);
        Kamus::create($validateData);
        return redirect('kamus')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $kam = Kamus::findorfail($id);
        return view('Kamus.edit-kamus', compact('kam'));
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
        $kam = Kamus::findorfail($id);
        $kam->update($request->all());
        return redirect('kamus')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kam = Kamus::findorfail($id);
        $kam->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
