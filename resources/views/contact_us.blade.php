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
                    <h2>How can we help?</h2>
                    <p class="lead">Just as convenient as our delivery service,
                        Leave your valuable information to contact you.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <input type="text" placeholder="name" class="form-control mt-4">
                    <div class="form-group d-flex  mt-4 ">
                     <input type="number" placeholder="Mobile No." class="form-control  ">
                     <input type="email" placeholder="Email" class="form-control ">
                    </div>
                    <input type="text"  placeholder="Company No" class="form-control mt-4">
                    <div class="form-group d-flex mt-4">
                    <input type="text" placeholder="Title" class="form-control">
                    <input type="number" placeholder="number of shipments per month" class="form-control">
                    </div>
                    <textarea  class=" mt-3 w-100"  rows="10"></textarea>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
