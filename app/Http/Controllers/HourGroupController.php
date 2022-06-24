<?php

namespace App\Http\Controllers;

use App\Models\HourGroup;
use Illuminate\Http\Request;

class HourGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hours = HourGroup::simplePaginate(10);

        return view('Hours.index', compact('hours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Hours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hours = new HourGroup();
        $hours->hora_lunes = $request->hora_lunes;
        $hours->hora_martes = $request->hora_martes;
        $hours->hora_miercoles = $request->hora_miercoles;
        $hours->hora_jueves = $request->hora_jueves;
        $hours->hora_viernes = $request->hora_viernes;
        $hours->save();

        return redirect()->route('hora.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(HourGroup $hourGroup)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hours = HourGroup::findOrFail($id);

        return view('Hours.edit', compact('hours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hours = HourGroup::findOrFail($id);
        $hours->hora_lunes = $request->input('hora_lunes');
        $hours->hora_martes = $request->input('hora_martes');
        $hours->hora_miercoles = $request->input('hora_miercoles');
        $hours->hora_jueves = $request->input('hora_jueves');
        $hours->hora_viernes = $request->input('hora_viernes');
        $hours->save();

        return redirect()->route('horas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HourGroup::findOrFail($id)->delete();

        return back()->with('succes', 'Hora Eliminada Correctamente!!');
    }
}
