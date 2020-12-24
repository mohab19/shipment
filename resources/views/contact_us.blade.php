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

                <div class="row my-2">
                <div class="col-lg-12">
                <i class="fas fa-phone-alt my-2"></i> <b>: 02 505050</b>
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
                <div class="contact-form text-center">
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
                    <input type="submit" value="SEND" class="btn mt-3" style="background-color:#343A40;color:#fff;padding:10px 30px;border-radius:5px">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
