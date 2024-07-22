<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'description',
        'image',
        'u_id',
    ];
    protected $casts = [
        'image' => 'array',
    ];


    
    // Relationship with user
    public function user()
    {
        return $this->belongsTo(User::class, 'u_id', 'id');
    }
}
