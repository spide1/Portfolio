<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class background_image extends Model
{
    use HasFactory;
    protected $fillable=[
        'background_image1',
        'background_image2',
        'youtube_video',
    ];
}
