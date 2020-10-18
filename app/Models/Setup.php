<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    //
    protected $table = 'setup_aplikasi';
    protected $fillable = ['jumlah_hari_kerja', 'nama_aplikasi', 'created_at', 'updated_at'];
}
