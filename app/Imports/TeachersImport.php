<?php

namespace App\Imports;

use App\Models\Lga;
use App\Models\State;
use App\Models\School;
use App\Models\Teacher;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeachersImport implements ToModel, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        // dd($row);
        $state = State::where('name', 'Kano')->first();
        $school = School::where('name', $row['school'])->first();
        $lga = Lga::where('state_id', $state->id)->where('name', ucfirst($row['lga']))->first();
        // dd($school->id);
        return new Teacher([
            'school_id' => $school->id,
            'lga_id' => $lga->id,
            'state_id' => $state->id,
            'firstname' => $row['firstname'],
            'lastname' => $row['lastname'],
            'phone' => $row['phone'],
            'gender' =>$row['gender'],
            'age_range' => $row['age_range'],
            'status' =>$row ['employement_status'],
            'education' => $row['qualification'],
            'experience_school' => $row['teaching_experience'],
            'subject' => $row['teaching_subject'],
            'certification' => $row['certification'],
            'competency' => $row['core_competency'],
            'ict_level' => $row['ict_level']
        ]);
    }
}
