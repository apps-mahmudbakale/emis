<?php

namespace App\Imports;

use App\Models\Lga;
use App\Models\School;
use App\Models\State;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SchoolsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $state = State::where('name', $row['state'])->first();
        $lga = Lga::where('name', $row['lga'])->first();
        
        // dd($lga->id);
        return new School([
            'name' => $row['school'],
            'code' => $row['code'],
            'location' => $row['location'],
            'type_school' => $row['type_school'],
            'education_level' => $row['education_level'],
            'state_id' => $state->id,
            'lga_id' => $lga->id,
        ]);
    }
}
