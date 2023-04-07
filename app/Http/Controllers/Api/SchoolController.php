<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lga;
use App\Models\School;
use App\Models\State;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();

        return response()->json($schools);
    }


    public function findByLga($lga)
    {
        $schools = School::where('lga_id', $lga)->get();

        return response()->json($schools);
    }

    public function lgaByState($state)
    {
        $state = State::where('name', $state)->first();
        $lgas = Lga::where('state_id', $state->id)->get();
        
        return response()->json($lgas);
    }

    public function saveSchoool(Request $request)
    {
        # code...
    }
}
