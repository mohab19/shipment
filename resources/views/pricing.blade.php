@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/index_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
@endpush
@section('content')
<section class="pricing">
    <div class="container">
        <h3 class="mt-5">{{$contents->where('type', 'pricing_header')->first()['title_'.app()->getLocale()]}}</h3>
        <p class="lead">{{$contents->where('type', 'pricing_header')->first()['content_'.app()->getLocale()]}}</p>
        <div class="row mt-5 align-items-center justify-content-between">
            @foreach($pricing as $key => $price)
            <div class=" col-lg-4">
                <div class="price shadow p-4">
                    <h4 class="text-center">{{$price["title_".app()->getLocale()]}}</h4>
                    <h3 class="price text-center">{{$price->value}}</h3>
                    <p>
                        {{$price["content_".app()->getLocale()]}}
                    </p>
                    <div class="text-center">
                        <button class="btn btn-primary text-center mt-4">Buy Now</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="quote">
    <div class="container">
        <h2 class="py-5 mb-3 text-center">@lang("home.get_estimate")</h2>
        <div class="d-flex justify-content-center">
            <input type="text" placeholder="@lang('home.no_of_shipment')" id="no_of_shipment" class="form-control mx-2">
            <select name="shipfrom" id="shipfrom" class="control-form mx-2">
                <option value="0">@lang('home.ship_from')</option>
                @foreach($pricings as $key => $price)
                <option value="{{$price->price}}">{{$price["city_".app()->getLocale()]}}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center mt-5 mb-5">
            <a href="#" id="get_quota" class="startbosto">@lang("home.get_quota")</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table text-center mt-5" style="">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Cairo</th>
                            <th>Alex</th>
                            <th>Suez</th>
                            <th>Upper Egypt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-weight: bold;">Cairo</td>
                            <td>50 EGP</td>
                            <td>50 EGP</td>
                            <td>50 EGP</td>
                            <td>50 EGP</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
@section('JavaScript')
<script type="text/javascript">
    // $(document).ready(function() {
    //     $('#get_quota').get(0).on('click', function(e) {
    //         e.preventDefault();
    //         var city           = $('#shipfrom').val();
    //         var no_of_shipment = $('#no_of_shipment').val();
    //         if(city == 0 || no_of_shipment == "") {
    //             alert("please inter the missing inputs!");
    //         } else {
    //             $('table').toggle();
    //         }
    //     });
    // });

    document.querySelector(".table").style.display="none"; 

// let button=document.getElementById("get_quota");
//     button.addEvenetListener("click",function(){
//     document.querySelector(".table").style.display="block"; 
//     alert()   
//     }); 
console.log("helo")
 </script>
@endsection
