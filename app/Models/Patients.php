<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status_id',
        'pawrent',
        'breed_id',
        'gender_id',
        'date_of_birth',
        'phone',
        'address',
        'township_id',
    ];
}
