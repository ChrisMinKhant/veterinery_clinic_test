<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'pawrent',
        'breed',
        'gender',
        'date_of_birth',
        'phone',
        'address',
        'township',
    ];
}
