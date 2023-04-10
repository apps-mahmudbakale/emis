<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function create(Request $request)
    {
        $facility = Facility::updateOrCreate(
            ['school_id' =>$request->school_id],
            [
                'num_of_classroom' =>$request->num_of_classroom,
                'unavailable_classroom' =>$request->unavailable_classroom,
                'combined_classroom' =>$request->combined_classroom,
                'electricity' =>$request->electricity,
                'school_amenities' =>implode(",", $request->school_amenities),
                'extra_curricular_activities' =>implode(",", $request->school_extra_curricular),
                'water' =>$request->water,
                'toilet' =>$request->toilet,
            ]
        );

        if($facility){
            return response()->json([
                'success' => true,
                'message' => 'Facility Synced Successfully'
            ]);
        }
    }
}
