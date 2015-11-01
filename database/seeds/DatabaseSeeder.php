<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Restaurant;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Restaurant::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        $this->call('RestaurantsTableSeeder');

        Model::reguard();
    }
}
