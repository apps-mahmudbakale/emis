<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use App\Models\State;
use App\Models\School;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Imports\TeachersImport;
use Maatwebsite\Excel\Facades\Excel;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teachers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schools = School::all();
        $state = State::where('name', 'Kano')->first();
        $lgas = Lga::where('state_id', $state->id)->get();
        // dd($lgas);
        return view('teachers.create', compact('schools', 'lgas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = Teacher::create($request->all());
        return redirect()->route('app.teachers.index')->with('success', 'Teacher Added');
    }

    public function import(Request $request)
    {
        // dd($request->all());
        // if ($request->hasFile('csv')) {
        //     dd($request->file('csv'));
        // }
        Excel::import(new TeachersImport, $request->file('csv')->store('files'));

        return redirect()->route('app.schools.index')->with('success', 'Schools Imported');
    }

    public function export(Request $request)
    {
        // dd($request->all());
        if($request->format == 'pdf'){

        }
        if($request->format == 'excel'){
            // dd('EXcel');
             return Excel::download(new SchoolsExport, 'schools.xlsx');
        }
        if($request->format == 'csv'){
             return Excel::download(new SchoolsExport, 'schools.csv');
        }

        return redirect()->route('app.schools.index')->with('error', 'Please Select Format to Export');
    }
    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        $schools = School::all();
        return view('teachers.edit', compact('teacher', 'schools'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update(array_merge($request->except('lga_id'), ['lga_id' => auth()->user()->school->lga_id]));
        return redirect()->route('app.teachers.index')->with('success', 'Teacher Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('app.teachers.index')->with('success', 'Teacher Deleted');
    }
}

