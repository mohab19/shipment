@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/index_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
@endpush
@section('content')
<section class="pricing">
    <div class="container">
        <h3 class="mt-5">Pricing</h3>
        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        <div class="row mt-5 align-items-center justify-content-between">
            <div class=" col-lg-4">
                <div class="price shadow p-4">
                    <h4 class="text-center">Basic</h4>
                    <h3 class="price text-center">$47</h3>
                    <ul class="list-unstyled">
                        <li class="d-flex"> <i class="fas fa-check mx-2"></i><p>Officia quaerat eaque neque</p></li>
                        <li class="d-flex"><i class="fas fa-check mx-2"></i><p>Possimus aut consequuntur</p> </li>
                        <li class="d-flex"><i class="fas fa-check mx-2"></i><p>Lorem ipsum dolor sit amet</p></li>
                        <li class="d-flex"><i class="fas fa-check mx-2"></i><p>Consectetur adipisicing elit</p></li>
                        <li class="d-flex"><i class="fas fa-check mx-2"></i><p>Dolorum esse odio </p></li>
                    </ul>
                    <div class="text-center">
                        <button class="btn btn-primary text-center mt-4">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4">
                <div class="price shadow p-4">
                    <h4 class="text-center">Premium</h4>
                    <h3 class="price text-center">$47</h3>
                    <ul class="list-unstyled">
                        <li class="d-flex"> <i class="fas fa-check mx-2"></i><p>Officia quaerat eaque neque</p></li>
                        <li class="d-flex"><i class="fas fa-check mx-2"></i><p>Possimus aut consequuntur</p> </li>
                        <li class="d-flex"><i class="fas fa-check mx-2"></i><p>Lorem ipsum dolor sit amet</p></li>
                        <li class="d-flex"><i class="fas fa-check mx-2"></i><p>Consectetur adipisicing elit</p></li>
                        <li class="d-flex"><i class="fas fa-check mx-2"></i><p>Dolorum esse odio </p></li>
                    </ul>
                    <div class="text-center">
                        <button class="btn btn-primary text-center mt-4">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4">
                <div class="price shadow p-4">
                    <h4 class="text-center">Professional</h4>
                    <h3 class="text-center price">$47</h3>
                    <ul class="list-unstyled">
                        <li class="d-flex"> <i class="fas fa-check mx-2"></i><p>Officia quaerat eaque neque</p></li>
                        <li class="d-flex"><i class="fas fa-check mx-2"></i><p>Possimus aut consequuntur</p> </li>
                        <li class="d-flex"><i class="fas fa-check mx-2"></i><p>Lorem ipsum dolor sit amet</p></li>
                        <li class="d-flex"><i class="fas fa-check mx-2"></i><p>Consectetur adipisicing elit</p></li>
                        <li class="d-flex"><i class="fas fa-check mx-2"></i><p>Dolorum esse odio </p></li>
                    </ul>
                    <div class="text-center">
                        <button class="btn btn-primary text-center mt-4">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="quote">
    <div class="container">
        <h2 class="py-5 mb-3 text-center">Get Shipping Estimates</h2>
        <div class="d-flex justify-content-center">
            <input type="text" placeholder="No. of shipments / Month" id="shipfrom" class="mx-2">
            <select name="shipfrom" id="shipfrom" class="mx-2">
                <option value="">Ship from</option>
                <option value="Cairo">Cairo</option>
                <option value="Alex">Alex</option>
                <option value="Delta">Delta</option>
                <option value="Suez">Suez</option>
            </select>
        </div>
        <div class="text-center mt-5"><a href="" class="startbosto ">Get a quote</a></div>
    </div>
</section>
@endsection
