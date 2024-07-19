<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time_Date extends Model
{
    use HasFactory;
    protected $fillable=[

        'time_date',
        'close_date',
        'number',
        'email',
        'location',
        'sub_location'
    ];
}
