<?php namespace App\Acme\Transformers;

use League\Fractal\TransformerAbstract;

class RestaurantTransformer extends TransformerAbstract
{
    /**
     * @param $restaurant
     * @return array
     */
    public function transform($restaurant)
    {
        return[
            'id'    => (int)$restaurant['id'],
            'name'  => $restaurant['name'],
            'veg'   => (boolean)$restaurant['veg']
        ];
    }

}