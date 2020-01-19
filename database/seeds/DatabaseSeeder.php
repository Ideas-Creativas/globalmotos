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
        factory(\App\User::class)->times(10)->create();
        factory(\App\Marcas::class)->times(3)->create();
        factory(\App\Motos::class)->times(30)->create();
        factory(\App\Banners::class)->times(5)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
