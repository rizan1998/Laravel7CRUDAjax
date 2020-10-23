<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //input manual karyawan seeder
        DB::table('karyawan')->insert(
            [
                [
                    'nama_karyawan' => 'rijan alpalah',
                    'jabatan_karyawan' => 1,
                    'divisi' => 1
                ],
                [
                    'nama_karyawan' => 'ahmad hamdi',
                    'jabatan_karyawan' => 2,
                    'divisi' => 2
                ]
            ]
        );
    }
}
