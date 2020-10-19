<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    public function jabatan()
    {
        //relasi one to one (hasone) jika dilihat dari table jabatan mengarah ke foreignkey yaitu jabatan_id di table karyawan
        //tapi jika ditable karyawan adalah belongsTo (bersama dengan) 
        return $this->belongsTo('\App\Jabatan', 'jabatan_karyawan'); //jika namanya bukan jabatan_id
    }

    public function karyawan_details()
    {
        return $this->hasOne('\App\Models\Karyawan_details', 'karyawan_id');
    }

    public function karyawan_keluarga()
    {
        return $this->hasMany('\App\Models\Karyawan_keluarga', 'karyawan_id');
    }
}
