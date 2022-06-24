<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::simplePaginate(5);

        return view('Teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher->tnombre = $request->nombres;
        $teacher->tapellido = $request->apellidos;
        $teacher->tdireccion = $request->direccion;
        $teacher->tcorreo = $request->correo;
        $teacher->ttelefono = $request->telefono;
        $teacher->tnivel_academico = $request->nivel;
        $teacher->save();

        return redirect('profesores/create');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Teacher $teacher
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('Teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Models\Teacher $teacher
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->tnombre = $request->input('nombres');
        $teacher->tapellido = $request->input('apellidos');
        $teacher->tdireccion = $request->input('direccion');
        $teacher->tcorreo = $request->input('correo');
        $teacher->ttelefono = $request->input('telefono');
        $teacher->tnivel_academico = $request->input('nivel');
        $teacher->save();

        return redirect()->route('profesores.index')->with('succes', 'Profesor Actualizado Correctamente!');
    }
    /*
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Teacher::find($id)->delete();

        return back()->with('succes', 'Profesor Eliminado Correctamente!!');
    }
}