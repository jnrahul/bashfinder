<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['name', 'address', 'email', 'oc_time', 'description', 'mob_phone', 'land_phone', 'lat', 'lng'];
}
