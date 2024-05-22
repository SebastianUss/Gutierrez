<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Producto::create([
                'codigo' => $faker->unique()->randomNumber(5, true),
                'nombre' => $faker->sentence(2),
                'descripcion' => $faker->text(160),
                'precio' => $faker->randomFloat(2, 1, 100),
                'stock' => $faker->numberBetween(1, 100),
            ]);
    }   
}
}