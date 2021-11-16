<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtNovel = Novel::paginate(3);
        return view('Novel.index-novel', compact('dtNovel'));
    }

    public function cetakNovel()
    {
        $dtCetakNovel = Novel::get();
        return view('Novel.cetak-novel', compact('dtCetakNovel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Novel.create-novel');
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
            'id_novel' => 'required||unique:novel,id_novel',
            'judul' => 'required',
            'penulis' => 'required',
            'tahun_terbit' => 'required|max:12'
        ]);

        Novel::create($validateData);
        return redirect('index-novel')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $nov = Novel::findorfail($id);
        return view('Novel.edit-novel', compact('nov'));
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
        $nov = Novel::findorfail($id);
        $nov->update($request->all());
        return redirect('index-novel')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nov = Novel::findorfail($id);
        $nov->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
