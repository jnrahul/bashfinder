<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Intervention\Image\Response;

Route::group(['prefix' => 'api/v1'], function()
{
    Route::resource('restaurants', 'RestaurantsController');
});


Route::get('/', function ()
{
    return view('welcome');
});


App::bind('League\Fractal\Serializer\SerializerAbstract', 'League\Fractal\Serializer\DataArraySerializer');