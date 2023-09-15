<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name'     => 'Manuel Henriquez',
            'email'    => 'manuel@pruebas.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory(20000)->create();
    }
}
