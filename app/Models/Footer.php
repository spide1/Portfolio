<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable=[
        'additionl-1',
        'additionl-2',
        'u_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'u_id', 'id');
    }
}
