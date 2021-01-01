<?php

namespace App\Http\Controllers;

use App\Http\Requests\PricingRequest;
use Illuminate\Http\Request;
use App\PricingCity;
use App\Pricing;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    **/
    public function index()
    {
        $pricing = Pricing::all();
        return view("pricing.index", compact('pricing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pricing.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($lang, PricingRequest $request)
    {
        $price        = Pricing::create($request->all());
        $pricing_city = PricingCity::create([
            'city_from'     => $price->id,
            'city_to'       => $price->id,
            'packages_from' => $request->packages_from,
            'packages_to'   => $request->packages_to,
            'price'         => $request->local
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Pricing $pricing)
    {
        $cities         = Pricing::all();
        $cities_pricing = PricingCity::where('city_from', $pricing->id)->get();
        return view("pricing.edit", compact("pricing", "cities", "cities_pricing"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update($lang, PricingRequest $request, Pricing $pricing)
    {
        $pricing->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Pricing $pricing)
    {
        $pricing->delete();
    }

    public function add_city(Request $request)
    {
        $city_pricing = PricingCity::create([
            'city_from'     => $request->city_from,
            'city_to'       => $request->city_to,
            'packages_from' => $request->packages_from,
            'packages_to'   => $request->packages_to,
            'price'         => $request->price
        ]);

        $city_from = Pricing::where("id", $city_pricing->city_from)->first();
        $city_to   = Pricing::where("id", $city_pricing->city_to)->first();

        $data = [
            'id'            => $city_pricing->id,
            'city_from'     => $city_from["city_".app()->getLocale()],
            'city_to'       => $city_to["city_".app()->getLocale()],
            'packages_from' => $city_pricing->packages_from,
            'packages_to'   => $city_pricing->packages_to,
            'price'         => $city_pricing->price
        ];

        return json_encode($data);
    }

    public function delete_city($lang, $id)
    {
        $city_pricing = PricingCity::where("id", $id)->delete();
        return 200;
    }

    public function get_quota($lang, Request $request)
    {
        $city_from = Pricing::where('id', $request->city_id)->first();
        $cities_to = PricingCity::where('city_from', $request->city_id)->
                                  where('packages_from', '<=', $request->no_of_shipment)->
                                  where('packages_to', '>=', $request->no_of_shipment)->
                                  get();

        $data      = array();
        $data["city_from"] = $city_from["city_".app()->getLocale()];
        $data["note"]      = $city_from["note_".app()->getLocale()];
        $data["cities_to"] = array();

        foreach ($cities_to as $key => $city) {
            $data["cities_to"][$key]["city_to"] = $city->City_to["city_".app()->getLocale()];
            $data["cities_to"][$key]["pricing"] = $city->price;
        }

        return json_encode($data);
    }

}
