<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable=[
        'heading',
        'image',
        'description',
        'u_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'u_id', 'id');
    }
}
