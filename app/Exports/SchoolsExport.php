<?php

namespace App\Exports;

use App\Models\School;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class SchoolsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'School Name',
            'School Code',
            'State',
            'LGA',
            'School Location',
            'School Type',
            'School Agency',
            'School Gender',
            'No of Staff',
            'No of Student',
            'No of Boys',
            'No of Girls',
        ];
    }
    public function collection()
    {
        return School::with(['state', 'lga'])
            ->get()
            ->map(function ($school) {
                return [
                    'School Name' => $school->name,
                    'School Code' => $school->code,
                    'State' => optional($school->state)->name, // Assuming state relationship
                    'LGA' => optional($school->lga)->name,     // Assuming lga relationship
                    'School Location' => $school->location,
                    'School Type' => $school->type_school,
                    'School Agency' => $school->agency,
                    'School Gender' => $school->gender,
                    'No of Staff' => $school->no_of_staff,
                    'No of Student' => $school->no_of_student,
                    'No of Boys' => $school->no_of_boys,
                    'No of Girls' => $school->no_of_girls,
                ];
            });
    }
}
