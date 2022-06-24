<?php

namespace App\Http\Controllers;

use App\Models\AmbientGroup;
use App\Models\Group;
use App\Models\HourGroup;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::simplePaginate(3);

        return view('Groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::All();
        $subjects = Subject::All();
        $hours = HourGroup::All();
        $ambients = AmbientGroup::All();

        return view('Groups.create', compact('teachers', 'subjects', 'hours', 'ambients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $groups = new Group();
        $groups->gperiodo = $request->periodo;
        $groups->ganio = $request->año;
        $groups->teacher_id = $request->teacher_id;
        $groups->subject_id = $request->subject_id;
        $groups->aula_id = $request->aula_id;
        $groups->hora_id = $request->hora_id;
        $groups->save();

        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Group::findOrFail($id);
        $teachers = Teacher::All();
        $subjects = Subject::All();
        $hours = HourGroup::All();
        $ambients = AmbientGroup::All();

        return view('Groups.edit', compact('group', 'teachers', 'subjects', 'ambients', 'hours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $groups = Group::findOrFail($id);
        $groups->gperiodo = $request->input('periodo');
        $groups->ganio = $request->input('año');
        $groups->teacher_id = $request->input('teacher_id');
        $groups->subject_id = $request->input('subject_id');
        $groups->aula_id = $request->input('aula_id');
        $groups->hora_id = $request->input('hora_id');
        $groups->save();
        return redirect()->route('groups.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::findOrFail($id)->delete();

        return back()->with('succes', 'Materia Eliminada Correctamente!!');
    }
}
