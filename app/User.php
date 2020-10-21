<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role()
    {
        //relasi many to many
        return $this->belongsToMany('\App\Models\Role', 'akses_user', 'user_id', 'master_akses_id');
        //askes user adalah nama table pivot yang digunakan untuk reslasi data many to many
        //user_id untuk field user_id di master akses data dan master_akses_id untuk field di
        //table akses_user
        //user_id duluan karena master table
    }
}
