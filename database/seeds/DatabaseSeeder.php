<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(JabatanSeeder::class);
        factory(App\Jabatan::class, 5)->create();
        $this->call(UserLoginSeeder::class);
    }
}
