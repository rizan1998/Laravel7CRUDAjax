<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jabatan;
use Faker\Generator as Faker;

$factory->define(Jabatan::class, function (Faker $faker) {
    return [
        //jabatan factory
        'nama_jabatan' => $faker->firstName('famele'),
        'gaji_pokok' => 5000000,
        'tunjangan_jabatan' => 300000,
        'tunjangan_makan_perhari' => $faker->numberBetween(15000, 20000),
        'tunjangan_transport_perhari' => 20000
    ];
});
