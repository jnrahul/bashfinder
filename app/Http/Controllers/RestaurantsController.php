<?php

namespace App\Http\Controllers;

use App\Acme\Transformers\RestaurantTransformer;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Sorskod\Larasponse\Larasponse;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class RestaurantsController extends ApiController
{

    protected $restaurantTransformer;
    protected $fractal;

    function __construct(RestaurantTransformer $restaurantTransformer,Larasponse $fractal)
    {
        $this->restaurantTransformer = $restaurantTransformer;
        $this->fractal = $fractal;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $limit = Input::get('limit')?:10;
        $restaurants = Restaurant::paginate($limit);
        return $this->respond([
            'data' => $this->fractal->paginatedCollection($restaurants, new RestaurantTransformer())
        ]);
//        $restaurants = Restaurant::all();
//        return Response::json([
//            'data' => $this->fractal->collection($restaurants, new RestaurantTransformer())
//        ], 200);
        /*return Response::json([
            'data' => $this->restaurantTransformer->transformCollection($restaurants->all())
        ], 200);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $restaurant = Restaurant::find($id);

        if(! $restaurant)
        {
            return $this->respondNotFound('Restaurant does not exist.');
            /*return Response::json([
                'error' => [
                    'message'       => 'Restaurant does not exist.',
                    'status_code'   => 404
                ]
            ], 404);*/
        }
        return $this->respond([
            'data' => $this->fractal->item($restaurant, new RestaurantTransformer())
        ]);
        /*return Response::json([

            'data' => $this->restaurantTransformer->transform($restaurant)
        ], 200);*/

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
