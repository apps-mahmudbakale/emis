<?php

namespace App\Models;

use App\Models\Lga;
use App\Models\School;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date_of_birth',
        'place_of_birth',
        'gender',
        'nationality',
        'school_id',
        'lga_id',
        'class',
        'special_needs',
        'attendance_percentage',
        'performance_percentage',
        'home_address',
        'guardian_name',
        'guardian_phone'
    ];

    public function school(){
        return $this->belongsTo(School::class);
    }

    public function lga(){
        return $this->belongsTo(Lga::class);
    }
}
