@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/index_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/media.css') }}">
<style media="screen">
    .hr {
        background: #fff;
        width: 50%;
        margin: 0 auto;
        padding: 0;
    }
    .or-span {
        color: #fff;
        text-align: center;
        position: absolute;
        background: #b24354;
        bottom: 92px;
        left: 172px;
        padding: 0 10px;
    }
    .button-login {
        padding: 10px;
        margin: 18px auto;
    }
</style>
@endpush
@section('content')
<!--sart login-->
<section class="login-table">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-lg-4">
                <form class="form" action="{{url('/'.app()->getLocale().'/register')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="inputName"></label>
                        <input type="text" placeholder="@lang('home.enter_name')" name="name" class="form-control d-block">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail"></label>
                        <input type="text" placeholder="@lang('home.enter_email')" name="email" class="form-control d-block">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail"></label>
                        <input type="password" placeholder="@lang('home.password')" name="password" class="form-control d-block">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail"></label>
                        <input type="password" placeholder="@lang('home.password_confirmation')" name="password_confirmation" class="form-control d-block">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn w-50 button-login">@lang('home.register')</button>
                        <hr class="hr">
                        <span class="or-span">or</span>
                        <a href="{{url('/'.app()->getLocale().'/login')}}" class="btn w-50 button-login">@lang('home.login')</a>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="best-price text-center">
                    <i class="fas fa-dollar-sign fa-2x"></i>
                    <h4 class="mt-5">{{$contents->where('type', 'brief')->first()['title_'.app()->getLocale()]}}</h4>
                    <p class="text-muted">{{$contents->where('type', 'brief')->first()['content_'.app()->getLocale()]}}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="call-us text-center">
                    <i class="fas fa-phone fa-2x"></i>
                    <h4 class="mt-5">{{$contents->where('type', 'support')->first()['title_'.app()->getLocale()]}}</h4>
                    <p class="text-muted">{{$contents->where('type', 'support')->first()['content_'.app()->getLocale()]}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
