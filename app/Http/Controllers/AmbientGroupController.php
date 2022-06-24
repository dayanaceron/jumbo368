<?php

namespace App\Http\Controllers;

use App\Models\AmbientGroup;
use Illuminate\Http\Request;

class AmbientGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambients = AmbientGroup::simplePaginate(10);

        return view('Ambient.index', compact('ambients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ambient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ambients = new AmbientGroup();
        $ambients->aula_lunes = $request->aula_lunes;
        $ambients->aula_martes = $request->aula_martes;
        $ambients->aula_miercoles = $request->aula_miercoles;
        $ambients->aula_jueves = $request->aula_jueves;
        $ambients->aula_viernes = $request->aula_viernes;
        $ambients->save();

        return redirect()->route('aulas.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(AmbientGroup $ambientGroup)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ambients = AmbientGroup::findOrFail($id);

        return view('Ambient.edit', compact('ambients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ambients = AmbientGroup::findOrFail($id);
        $ambients->aula_lunes = $request->input('aula_lunes');
        $ambients->aula_martes = $request->input('aula_martes');
        $ambients->aula_miercoles = $request->input('aula_miercoles');
        $ambients->aula_jueves = $request->input('aula_jueves');
        $ambients->aula_viernes = $request->input('aula_viernes');
        $ambients->save();

        return redirect()->route('aulas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AmbientGroup::findOrFail($id)->delete();

        return back()->with('succes', 'Aula Eliminada Correctamente!!');
    }
}
