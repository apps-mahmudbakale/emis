<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
