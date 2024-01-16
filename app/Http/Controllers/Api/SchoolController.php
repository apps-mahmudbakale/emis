<?php

namespace App\Http\Controllers\Api;

use App\Models\Lga;
use App\Models\State;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();

        return response()->json($schools);
    }


    public function findByLga($lga)
    {
        $schools = School::where('lga_id', $lga)->get(['id', 'name']);

        return response()->json($schools);
    }

    public function lgaByState($state)
    {
        $state = State::where('name', $state)->first();
        $lgas = Lga::where('state_id', $state->id)->get();

        return response()->json($lgas);
    }

    public function saveSchool(Request $request)
    {

        $school = DB::table('schools')->where('id', $request->school_id)->update([
            'no_of_students' =>$request->no_of_students,
            'no_of_staff' => $request->no_of_staff,
            'no_of_boys' => $request->no_of_boys,
            'no_of_girls' => $request->no_of_girls,
            'type' => $request->school_type,
            'gender' => $request->school_gender,
            'category' => $request->school_category,
            'agency' => $request->school_agency,
        ]);

        if($school){
            return response()->json([
                'success' => true,
                'message' => 'School Synced Successfully'
            ]);
        }

    }
}
