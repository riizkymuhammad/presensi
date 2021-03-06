<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Unit;
use App\Models\Homebase;

class User extends Authenticatable
{
    use HasRoles,HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'gelar_depan',
        'gelar_belakang',
        'doskar',
        'unit_kerja',
        'homebase',
        'status',
        'identity_number',
        'password',
        'email',
        'no_hp',
        'whatsapp',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function unitkerja()
    {
        return $this->belongsTo(Unit::class, 'unit_kerja', 'id');
    }

    public function homebases()
    {
        return $this->belongsTo(Homebase::class, 'homebase', 'id');
    }
}
