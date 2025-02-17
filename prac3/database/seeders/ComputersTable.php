<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComputersTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // Seed computers table
        foreach (range(1, 20) as $index) {
            DB::table('computers')->insert([
                'computer_name' => 'Computer-' . $index,
                'model' => $faker->word,
                'operatin_system' => $faker->word,
                'processor' => $faker->word,
                'memory' => $faker->randomNumber(4),
                'available' => $faker->randomElement([0, 1]),
            ]);
        }
    }
}
