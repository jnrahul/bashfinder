<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('address');
            $table->text('pin_code');
            $table->string('email');
            $table->string('oc_time');
            $table->text('description');
            $table->integer('mob_phone');
            $table->integer('land_phone');
            $table->float('lat', 10, 6);
            $table->float('lng', 10, 6);
            $table->boolean('veg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('restaurants');
    }
}
