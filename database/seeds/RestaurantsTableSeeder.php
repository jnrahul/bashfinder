<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 30) as $index)
        {
            Restaurant::create([
                'name' => $faker->name,
                'address' => $faker->address,
                'email' => $faker->email,
                'oc_time' => $faker->word,
                'description' => $faker->paragraph(3),
                'mob_phone' => $faker->randomNumber(5),
                'land_phone' => $faker->randomNumber(5),
                'lat' => $faker->latitude,
                'lng' => $faker->longitude,
                'veg' => $faker->boolean(50),

            ]);
        }
    }
}