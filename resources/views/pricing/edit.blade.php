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
                                <input type="hidden" name="city_from" value="{{$pricing->id}}">
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
                                @if(count($cities) > 0)
                                <hr>
                                <form class="mt-3 text-center">
                                    @csrf
                                    <div class="form-group">
                                        <select class="form-control" name="city_to">
                                            @foreach($cities as $key => $city)
                                            <option value="{{$city->id}}">{{$city["city_".app()->getLocale()]}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="city_price" class="form-control">
                                    </div>
                                    <span id="city_pricing" class="btn btn-primary offset-md-4 col-sm-4"><i class="fas fa-plus"></i> @lang('pricing.add_pricing')</span>
                                </form>
                                @endif

                                <div class="col-sm-12 text-center pl-0 mt-3" style="float: right;">
                                    <button type="submit" class="btn btn-space btn-primary col-sm-4">@lang('main.save')</button>
                                    <a href="{{url()->previous()}}"><span class="btn btn-space btn-secondary col-sm-4">@lang('main.cancel')</span></a>
                                </div>
                            </form>
                            <br>
                            <br>
                            <br>
                            <br>
                            <hr>
                            <div class="mt-5">
                                <table id="table" class="table table-striped table-bordered second text-center">
                                    <thead>
                                        <tr>
                                            <th>@lang('pricing.id')</th>
                                            <th>@lang('pricing.city_from')</th>
                                            <th>@lang('pricing.city_to')</th>
                                            <th>@lang('pricing.price')</th>
                                            <th>@lang('pricing.action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cities_pricing as $key => $CPricing)
                                        <tr id="tr{{$CPricing->id}}">
                                            <td>{{$CPricing->id}}</td>
                                            <td>{{$CPricing->City_from["city_".app()->getLocale()]}}</td>
                                            <td>{{$CPricing->City_to["city_".app()->getLocale()]}}</td>
                                            <td>{{$CPricing->price}}</td>
                                            <td><span class="delete_price btn btn-danger" data-id="{{$CPricing->id}}" style="padding: 5px 10px;"><i class="fas fa-trash"></i></span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>@lang('pricing.id')</th>
                                            <th>@lang('pricing.city_from')</th>
                                            <th>@lang('pricing.city_to')</th>
                                            <th>@lang('pricing.price')</th>
                                            <th>@lang('pricing.action')</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
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
        $("#city_pricing").on('click', function() {
            token     = $('input[name="_token"]').val();
            city_to   = $('select[name="city_to"]').val();
            city_from = $('input[name="city_from"]').val();
            price     = $('input[name="city_price"]').val();
            if(city_to == "" || price == "") {
                alert("Please fill the missing inputs!");
            } else {
                $.ajax({
                    type: 'post',
                    url : '{{url(app()->getLocale()."/admin/add_city")}}',
                    data: {
                        _token : token,
                        city_from : city_from,
                        city_to : city_to,
                        price: price
                    },
                    success: function(response) {
                        response = JSON.parse(response);
                        console.log(response);
                        html = '<tr id="tr'+response.id+'">';
                        html += '<td>'+response.id+'</td>';
                        html += '<td>'+response.city_from+'</td>';
                        html += '<td>'+response.city_to+'</td>';
                        html += '<td>'+response.price+'</td>';
                        html += '<td><span class="delete_price btn btn-danger" data-id="'+response.id+'" style="padding: 5px 10px;"><i class="fas fa-trash"></i></span></td>';
                        html += '</tr>';
                        $('#table tbody').append(html);
                        $('.delete_price').on('click', function() {
                            var here = $(this);
                            var id   = here.data("id");
                            $.ajax({
                                type: "get",
                                url : '{{url(app()->getLocale()."/admin/delete_city")}}/'+id,
                                success: function(response) {
                                    $("#tr"+id).remove();
                                }
                            });
                        });
                    }
                });
            }
        });
        $('.delete_price').on('click', function() {
            var here = $(this);
            var id   = here.data("id");
            $.ajax({
                type: "get",
                url : '{{url(app()->getLocale()."/admin/delete_city")}}/'+id,
                success: function(response) {
                    $("#tr"+id).remove();
                },
                error: function(response) {
                    alert("Something Went Wrong!");
                }
            });
        });
    });
</script>
@endsection
