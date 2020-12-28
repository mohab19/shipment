@extends('admin.layouts.head')
@section('StyleSheets')
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/buttons.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/select.bootstrap4.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL('assets/vendor/datatables/css/fixedHeader.bootstrap4.css')}}">
@endsection
@section('title')
    <title>@lang('settings.settings')</title>
@endsection
@section('content')
<div class="container-fluid dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h1 class="page-title">@lang('settings.settings')
                    <small>@lang('main.create')</small>
                </h1>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{URL( app()->getLocale() . '/admin')}}" class="breadcrumb-link">@lang('main.dashboard')</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><span>@lang('settings.settings')</span></li>
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
                        <h5 class="card-header">@lang('settings.add_new')</h5>
                        <div class="card-body">
                            <div class="alert alert-dismissible" id="notification" style="display: none;">
                                <ul style="margin-bottom: 0;">

                                </ul>
                            </div>
                            <form id="form">
                                @csrf
                                @method('PUT')
                                <input type="hidden" id="form_name" value="Content" data-id="contents">
                                <input type="hidden" name="url" id="route" value="{{route('contents.update', [ app()->getLocale(), $content->id])}}">
                                <div class="form-group">
                                    <label for="title_ar" class="col-form-label">@lang('contents.title_ar')</label>
                                    <input type="text" name="title_ar" class="form-control" value="{{$content->title_ar}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="title_en" class="col-form-label">@lang('contents.title_en')</label>
                                    <input type="text" name="title_en" class="form-control" value="{{$content->title_en}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="content_ar" class="col-form-label">@lang('contents.content_ar')</label>
                                    <textarea type="text" name="content_ar" class="form-control">{{$content->content_ar}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content_en" class="col-form-label">@lang('contents.content_en')</label>
                                    <textarea type="text" name="content_en" class="form-control">{{$content->content_en}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="type" class="col-form-label">@lang('settings.type')</label>
                                    <input type="text" name="type" class="form-control" value="{{$content->type}}" readonly required>
                                </div>
                                <div class="form-group">
                                    <label for="value" class="col-form-label">@lang('settings.value')</label>
                                    <input type="text" name="value" value="{{$content->value}}" class="form-control">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="col-form-label" for="customFile">@lang('news.image')</label>
                                    <input type="file" name="image" onchange="readURL(this)" class="form-control" id="customFile">
                                </div>

                                <div class="form-group col-sm-6 mt-4">
                                    <div class="image">
                                        @if($content->image != null)
                                        <img src="{{url('images/contents').'/'.$content->image}}" width="200" height="180" alt="">
                                        @else
                                        <img src="" width="200" height="180" alt="">
                                        @endif
                                    </div>
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
