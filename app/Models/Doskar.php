<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doskar extends Model
{
    use HasFactory;

    protected $hidden = [
        'nama',
    ];
}
