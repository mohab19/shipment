<?php

namespace App\Http\Controllers;

use App\Http\Requests\PricingRequest;
use Illuminate\Http\Request;
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
        $price = Pricing::create($request->all());
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
        return view("pricing.edit", compact("pricing"));
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
}
