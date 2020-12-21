@extends('admin.layouts.head')
@section('StyleSheets')
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/buttons.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/select.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/fixedHeader.bootstrap4.css')}}">
@endsection
@section('title')
    <title>@lang('pricing.pricing')</title>
@endsection
@section('content')
<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h1 class="page-title">@lang('pricing.pricing')
                    <small>@lang('main.create')</small>
                </h1>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{URL( app()->getLocale() . '/admin')}}" class="breadcrumb-link">@lang('main.dashboard')</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><span>@lang('pricing.pricing')</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="row">
                <!-- ============================================================== -->
                <!-- data table  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">@lang('pricing.edit')</h5>
                        <div class="card-body">
                            <div class="alert alert-dismissible" id="notification" style="display: none;">
                                <ul style="margin-bottom: 0;">

                                </ul>
                            </div>
                            <form id="form">
                                @csrf
                                @method('PUT')
                                <input type="hidden" id="form_name" value="Pricing" data-id="pricing">
                                <input type="hidden" name="url" id="route" value="{{route('pricing.update', [ app()->getLocale(), $pricing->id])}}">
                                <div class="form-group">
                                    <label for="city_ar" class="col-form-label">@lang('pricing.city_ar')</label>
                                    <input type="text" name="city_ar" class="form-control" value="{{$pricing->city_ar}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="city_en" class="col-form-label">@lang('pricing.city_en')</label>
                                    <input type="text" name="city_en" class="form-control" value="{{$pricing->city_en}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="price" class="col-form-label">@lang('pricing.price')</label>
                                    <input type="text" name="price" class="form-control" value="{{$pricing->price}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="note_ar" class="col-form-label">@lang('pricing.note_ar')</label>
                                    <textarea type="text" name="note_ar" class="form-control">{{$pricing->note_ar}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="note_en" class="col-form-label">@lang('pricing.note_en')</label>
                                    <textarea type="text" name="note_en" class="form-control">{{$pricing->note_en}}</textarea>
                                </div>

                                <div class="col-sm-12 text-center pl-0 mt-3" style="float: right;">
                                    <button type="submit" class="btn btn-space btn-primary col-sm-4">@lang('main.save')</button>
                                    <a href="{{url()->previous()}}"><span class="btn btn-space btn-secondary col-sm-4">@lang('main.cancel')</span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end data table  -->
                <!-- ============================================================== -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('JavaScript')
<script type="text/javascript">
    $(document).ready(function() {
        $("#txtEditor1").richText();
        $("#txtEditor2").richText();
        $("#txtEditor3").richText();
    });
</script>
@endsection
