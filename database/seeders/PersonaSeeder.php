<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Persona::create([
                'nombre' => $faker->firstName,
                'apellido' => $faker->lastName,
                'dni' => $faker->unique()->numerify('########'),
                'edad' => $faker->numberBetween(18, 80),
            ]);
        }
    }
}
