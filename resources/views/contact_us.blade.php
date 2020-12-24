@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/index_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush
@section('content')
<section class="contact mt-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="contact-caption mt-5">
                    <h2>{{$contents->where('type', 'contact_us')->first()["title_".app()->getLocale()]}}</h2>
                    <p class="lead">{{$contents->where('type', 'contact_us')->first()["content_".app()->getLocale()]}}</p>

                    <div class="row my-2">
                        <div class="col-lg-12">
                            <i class="fas fa-phone-alt my-2"></i>
                            <b>: {{$settings->where('name', 'phone')->first()->value}}</b>
                        </div>
                        <div class="col-lg-12">
                            <i class="fas fa-fax my-2"></i>
                            <b>: {{$settings->where('name', 'fax')->first()->value}}</b>
                        </div>
                        <div class="col-lg-12">
                            <i class="far fa-envelope my-2"></i>
                            <b>: {{$settings->where('name', 'email')->first()->value}}</b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                <i class="fas fa-fax my-2"></i> <b>: 13235551234@efaxsend.com</b>
                </div>
                <div class="col-lg-12">
                <i class="far fa-envelope my-2"></i> <b>: shipment@hotmail.com</b>
                </div>
                </div>
                            </div>
            </div>
            <div class="col-lg-6">
                <form class="contact-form text-center" action="{{url(app()->getLocale().'/contact_us')}}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="@lang('home.name')" class="form-control mt-4">
                    <div class="form-group d-flex  mt-4 ">
                        <input type="number" name="phone" placeholder="@lang('home.mobile_no')" class="form-control  ">
                        <input type="email" name="email" placeholder="@lang('home.email')" class="form-control ">
                    </div>
                    <input type="text" placeholder="@lang('home.title')" class="form-control">
                    <textarea class="mt-3 w-100" name="body" rows="10" placeholder="@lang('home.body')"></textarea>
                    <button type="submit" class="btn mt-3" style="background-color:#343A40;color:#fff;padding:10px 30px;border-radius:5px">@lang('home.send')</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
