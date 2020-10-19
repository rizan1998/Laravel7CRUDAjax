<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan_keluarga extends Model
{
    //join one to many
    protected $table = 'karyawan_keluarga';

    public function karyawan()
    {
        //relasi ke table karyawan
        return $this->belongsTo('\App\Models\Karyawan', 'karyawan_id');
    }
}
