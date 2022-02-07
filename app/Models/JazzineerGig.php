<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JazzineerGig extends Model
{
    use HasFactory;

    protected $fillable = [
        'event', 'month', 'year', 'date', 'file'
    ];
}
