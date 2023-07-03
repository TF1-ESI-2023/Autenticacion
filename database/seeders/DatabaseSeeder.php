<?php

namespace Database\Seeders;

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
        #\App\Models\User::factory(10)->create();
        \App\Models\Empanada::factory(3)->create([
            "nombre" => "Jamon y queso",
            "precio" => 10,
            "user_id" => 1
        ]);
        \App\Models\Empanada::factory(5)->create([
            "nombre" => "Queso y longaniza",
            "precio" => 40,
            "user_id" => 2
        ]);

        \App\Models\Empanada::factory(3)->create([
            "nombre" => "Provolone y aceituna",
            "precio" => 10,
            "user_id" => 3
        ]);

    }
}
