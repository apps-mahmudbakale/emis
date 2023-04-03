<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'state_id',
        'lga_id',
        'no_of_students',
        'no_of_staff',
        'category',

    ];
}
