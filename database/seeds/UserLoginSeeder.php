<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            [
                [
                    'name' => 'rijan alpalah',
                    'username' => 'rizan1998',
                    'email' => 'rizanalfalah@gmail.com',
                    'password' => bcrypt(12345),
                    'remember_token' => Str::random(60)
                ],
                [
                    'name' => 'ahmad hamdi',
                    'username' => 'ahmad1997',
                    'email' => 'redeyes199802@gmail.com',
                    'password' => bcrypt(12345),
                    'remember_token' => Str::random(60)
                ]
            ]
        );

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

        DB::table('karyawan_keluarga')->insert(
            [
                [
                    'karyawan_id' => '1',
                    'nama' => 'ibu',
                    'hubungan' => 'ibu'
                ],
                [
                    'karyawan_id' => '1',
                    'nama' => 'ayah',
                    'hubungan' => 'ayah'
                ],
                [
                    'karyawan_id' => '2',
                    'nama' => 'ibuAhmadHamdi',
                    'hubungan' => 'ibu'
                ],
                [
                    'karyawan_id' => '2',
                    'nama' => 'ayahAhmadHamdi',
                    'hubungan' => 'ayahAhmadHamdi'
                ]
            ]
        );
        DB::table('karyawan_details')->insert(
            [
                [
                    'karyawan_id' => '1',
                    'alamat' => 'ciloto'
                ],
                [
                    'karyawan_id' => '2',
                    'alamat' => 'padarincang'
                ]
            ]
        );

        //table akses_id
        DB::table('akses_id')->insert(
            [
                [
                    'level_akses' => 'admin',
                    'keterangan' => 'admin staff e-commerce'
                ],
                [
                    'level_akses' => 'user',
                    'keterangan' => 'user pembeli e-commerce'
                ]
            ]
        );

        //table akses_id
        DB::table('akses_id')->insert(
            [
                [
                    'level_akses' => 'admin',
                    'keterangan' => 'admin staff e-commerce'
                ],
                [
                    'level_akses' => 'user',
                    'keterangan' => 'user pembeli e-commerce'
                ]
            ]
        );

        //akses user
        DB::table('master_akses')->insert(
            [
                [
                    'user_id' => 1,
                    'master_akses_id' => 1
                ],
                [
                    'user_id' => 1,
                    'master_akses_id' => 2
                ],
                [
                    'user_id' => 2,
                    'master_akses_id' => 1
                ],
                [
                    'user_id' => 2,
                    'master_akses_id' => 2
                ],
            ]
        );
    }
}
