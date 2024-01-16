<?php

namespace App\Models;

use App\Models\School;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'num_of_classroom',
        'unavailable_classroom',
        'combined_classroom',
        'electricity',
        'school_amenities',
        'extra_curricular_activities',
        'water',
        'toilet'
    ];

    public function school(){
        return $this->belongsTo(School::class);
    }
}
