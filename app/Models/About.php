<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable=[
        'heading',
        'highlight',
        'description',
        'image',
        'u_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'u_id', 'id');
    }

}
