<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtSurvey = Survey::paginate(3);
        return view('Survey.index-survey', compact('dtSurvey'));
    }

    public function cetakSurvey()
    {
        $dtCetakSurvey = Survey::get();
        return view('Survey.cetak-survey', compact('dtCetakSurvey'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Survey.create-survey');
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
            'id_survey' => 'required||unique:survey,id_survey',
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ]);

        Survey::create($validateData);
        return redirect('index-survey')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $sur = Survey::findorfail($id);
        return view('Survey.edit-survey', compact('sur'));
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
        $sur = Survey::findorfail($id);
        $sur->update($request->all());
        return redirect('index-survey')->with('toast_success', 'Data Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sur = Survey::findorfail($id);
        $sur->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
