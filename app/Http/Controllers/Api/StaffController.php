<?php

namespace App\Http\Controllers\Api;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function create(Request $request)
    {
        // dd($request->all());

        $staff = Teacher::updateOrCreate(
            ['staff_id' => $request->staff_id, 'school_id' => $request->school_id],
            [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'age_range' => $request->age_range,
                'status' => $request->status,
                'other_school' => $request->other_school,
                'other_status' => $request->other_status,
                'education' => $request->education,
                'experience_teacher' => $request->experience_teacher,
                'experience_school' => $request->experience_school,
                'subject' => $request->subject,
                'certification' => $request->certification,
                'competency' => $request->competency,
                'cmp_skills' => $request->cmp_skills,
                'ict_level' => $request->ict_level
            ]
            );
            
            if($staff){
                return response()->json([
                    'success' => true,
                    'message' => 'Staff Synced Successfully'
                ]);
            }
    }
}
