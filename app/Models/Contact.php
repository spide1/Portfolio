<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=[
        'email',
        'phone1',
        'phone2',
        'fb',
        'ig',
        'address',
        'g-map',
        'u_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'u_id', 'id');
    }
}
