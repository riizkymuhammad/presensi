<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Scanlog extends Model
{
    use HasFactory;

    protected $table = 'scanlog';

    public function namauser()
    {
        return $this->belongsTo(User::class, 'PIN', 'identity_number');
    }
}
