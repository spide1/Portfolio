<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'service',
        'service_title',
        'description',
        'design1',
        'description1',
        'design2',
        'description2',
        'design3',
        'description3',
        'design4',
        'description4',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'u_id', 'id');
    }
}
