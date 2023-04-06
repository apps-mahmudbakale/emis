<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'location',
        'type_school',
        'education_level',
        'state_id',
        'lga_id',
        'no_of_students',
        'no_of_staff',
        'category',

    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function lga()
    {
        return $this->belongsTo(Lga::class);
    }
}
