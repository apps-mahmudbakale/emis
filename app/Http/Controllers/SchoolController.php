<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use App\Models\State;
use App\Models\School;
use Illuminate\Http\Request;
use App\Imports\SchoolsImport;
use Maatwebsite\Excel\Facades\Excel;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('schools.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $state = State::where('name', 'Kano')->first();
        $lgas = Lga::where('state_id', $state->id)->get();
        return view('schools.create', compact('lgas'));
    }


    public function import(Request $request)
    {
        // dd($request->all());
        // if ($request->hasFile('csv')) {
        //     dd($request->file('csv'));
        // }
        Excel::import(new SchoolsImport, $request->file('csv')->store('files'));

        return redirect()->route('app.schools.index')->with('success', 'Schools Imported');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $state = State::where('name', 'Kano')->first();
        $school = School::create(array_merge($request->all(), ['state_id' => $state->id]));
        return redirect()->route('app.schools.index')->with('success', 'Schools Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
        return view('schools.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School $school)
    {
        $state = State::where('name', 'Kano')->first();
        $lgas = Lga::where('state_id', $state->id)->get();
        return view('schools.edit', compact('school', 'lgas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, School $school)
    {
        $state = State::where('name', 'Kano')->first();
        $school->update(array_merge($request->all(), ['state_id' => $state->id]));
        return redirect()->route('app.schools.index')->with('success', 'Schools Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        $school->delete();
        return redirect()->route('app.schools.index')->with('success', 'Schools Deleted');
    }
}
