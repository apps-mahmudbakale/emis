<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'lga_id',
        'firstname',
        'lastname',
        'phone',
        'gender',
        'age_range',
        'status',
        'other_school',
        'other_status',
        'education',
        'experience_teacher',
        'experience_school',
        'subject',
        'certification',
        'competency',
        'cmp_skills',
        'ict_level'
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

public function lga()
{
    return $this->belongsTo(Lga::class);
}


}
