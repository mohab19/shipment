@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/index_style.css') }}">
<style>
#map{display:flex !important}
#map2{display:none !important}
@media (max-width: 575.98px) {
	#map{display:none !important}
 }


@media (min-width: 576px) and (max-width: 767.98px) {  }


@media (min-width: 768px) and (max-width: 991.98px) {  }


@media (min-width: 992px) and (max-width: 1199.98px) {}


@media (min-width: 1200px) { }
	  body{overflow-x:hidden}
</style>
@endpush
@section('content')
<!-- start paner -->
<section class="main-panel">
	<div class="layer">
      <img src="" alt="">
	</div>
	<div class="content">
		<h2>{{$contents->where('type', 'panner')->first()["title_".app()->getLocale()]}}</h2>
		<p>{{$contents->where('type', 'panner')->first()["content_".app()->getLocale()]}}</p>
		<span class="btn begin"><i class="fas fa-angle-double-down fa-lg"></i></span>
	</div>
</section>
<!-- end paner -->

<!-- start features -->
<section class="features">
	<div class="container text-center">
		<h2 class="header">@lang('home.why_choose') <span>@lang('home.me')</span></h2>
		<div class="row justify-content-between">
			@foreach($features as $key => $feature)
			<div class="feature col-lg-3 ">
				<span><i class="{{$feature->value}} fa-3x"></i></span>
				<h5>{{$feature["title_".app()->getLocale()]}}</h5>
				<p>{!! $feature["content_".app()->getLocale()] !!}</p>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- end features -->

<!--start about-->
<section class="about">
    <div class="container">
	    <h2 class="text-center py-4"></h2>
	    <div class="row">
		    <div class="col-lg-6">
			    <div class="about-text">
				    <h2 class="sub-title py-3"><span>{{$contents->where('type', 'about_us')->first()["title_".app()->getLocale()]}}</span></h2>
				    <p>{{$contents->where('type', 'about_us')->first()["content_".app()->getLocale()]}}</p>
			    </div>
			    <div class="about-icon mt-5">
					<div class="row">
						@foreach($about_us_features as $key => $feature)
						<div class="col-md-6">
							<div class="item">
								<i class="{{$feature->value}} my-3 fa-2x" style="color:#6BCBD9"></i>
								<h3>{{$feature["title_".app()->getLocale()]}}</h3>
								<p>{{$feature["content_".app()->getLocale()]}}</p>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="offset-lg-1 col-lg-4  col-md-8 mt-5">
				<div class="about-img">
					<img src="{{url('/images/contents').'/'.$contents->where('type', 'about_us_pic')->first()['image']}}" width="350" height="400" class="img-fluid"  alt="shipping">
				</div>
			</div>
		</div>
	</div>
</section>
<!--end about-->

<!-- start parteners -->
<section class="partners">
	<div class="container">
		<h2 class="pb-5 text-center">@lang('home.our_parteners')</h2>
		<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				@php $counter = 0; @endphp
				@foreach($our_parteners as $key => $partners)
					@if($key == 0 || $key%4 == 0)
		  			<div class="carousel-item @if($key == 0) active @endif">
						<div class="row">
					@endif
							<div class="col-lg-3">
								<div class="logo">
						 			<img src="{{url('/images/contents').'/'.$partners->image}}" width="60" height="120
									" class="w-50" w alt="">
								</div>
							</div>
					@if($key != 0 && $key%3 == 0)
						</div>
		  			</div>
					@elseif($key+1 == count($our_parteners))
						</div>
					</div>
					@endif
	  			@endforeach
			</div>
			<ol class="carousel-indicators position-static mt-3">
				@foreach($our_parteners as $key => $partners)
					@if($key == 0 || $key%4 == 0)
					<li data-target="#carouselExampleIndicators2" data-slide-to="{{$counter}}" @if($key == 0) class="active" @endif></li>
					@php $counter++; @endphp
					@endif
				@endforeach
	  		</ol>
  		</div>
  	</div>
</section>
<!--end parteners-->

<!-- start why panel -->
<section class="panel">
	<div class="container">
	<div class="panel-background">
	</div>
	<div class="text-center">
		<h2>@lang('home.how_much')</h2>
		<div class="row" @if(app()->getLocale() == 'ar') style="direction:ltr" @endif>
			<div class="col-lg-7 col-md-12 position-relative" id="map">
			<b class="dot dot1" data-toggle="tooltip" data-html="true" title="Alexandria"  style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 59px; left: 194px;"></b>
		    <b class="dot dot2" data-toggle="tooltip" data-html="true" title="damietta" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%; display:inline-block;position: absolute;top: 45px;left: 275px;"></b>
			<b class="dot dot3" data-toggle="tooltip" data-html="true" title="port said" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%; display:inline-block;position: absolute;top: 59px;left: 307px;"></b>
			<b class="dot dot4" data-toggle="tooltip" data-html="true" title="El Behira" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 76px; left: 210px;"></b>
			<b class="dot dot5" data-toggle="tooltip" data-html="true" title="Kafr el zayat" style="width:10px;height:10px;background-color:#6BCBD9 ;border-radius: 50%;display:inline-block;position: absolute;top: 90px; left: 227px"></b>
			<b class="dot dot6" data-toggle="tooltip" data-html="true" title="Kafr El shiekh" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 68px;left: 234px;"></b>
			<b class="dot dot7" data-toggle="tooltip" data-html="true" title="Tanta" style="width:10px;height:10px;background-color:#6BCBD9 ;border-radius: 50%;display:inline-block;position: absolute;left: 242px;top: 91px;"></b>
			<b class="dot dot8" data-toggle="tooltip" data-html="true" title="Giza" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 131px;left: 234px;"></b>
			<b class="dot dot9"  style="width:10px;height:10px;background-color: transparent;border-radius: 50%;display:inline-block;position: absolute;top: 16%;left: 12%;"></b>
			<b class="dot dot10" data-toggle="tooltip" data-html="true" title="Mansoura" style="width:10px;height:10px;background-color: #6BCBD9 ;border-radius: 50%;display:inline-block;position: absolute;top: 83px;  left: 265px;"></b>
			<b class="dot dot11" data-toggle="tooltip" data-html="true" title="Elmahla" style="width:10px;height:10px;background-color:  #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top:83px;left:250px"></b>
			<b class="dot dot12" data-toggle="tooltip" data-html="true" title="Menoufia" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 102px; left: 227px"></b>
			<b class="dot dot13" data-toggle="tooltip" data-html="true" title="Banha" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 106px;left: 242px;"></b>
			<b class="dot dot14" data-toggle="tooltip" data-html="true" title="Fayoum" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 171px;left: 226px;"></b>
			<b class="dot dot15" data-toggle="tooltip" data-html="true" title="sharqia" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 109px; left: 280px;"></b>
			<b class="dot dot16" data-toggle="tooltip" data-html="true" title="Ismailia" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 92px;left: 306px;"></b>
			<b class="dot dot17" data-toggle="tooltip" data-html="true" title="suez" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 116px;left: 313px;"></b>
			<b class="dot dot18" data-toggle="tooltip" data-html="true" title="Qaluibia" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 118px;left: 242px;"></b>
			<b class="dot dot19" data-toggle="tooltip" data-html="true" title="" style="width:10px;height:10px;background-color:transparent;border-radius: 50%;display:inline-block;position: absolute>
			<b class="dot dot20" data-toggle="tooltip" data-html="true" title="Aswan" style="width:10px;height:10px;background-color: orange;border-radius: 50%;display:inline-block;position: absolute"></b>
			<b class="dot dot21" data-toggle="tooltip" data-html="true" title="Hurghada" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 208px;left: 360px;"></b>
			<b class="dot dot22" data-toggle="tooltip" data-html="true" title="Beni seuf" style="width:10px;height:10px;background-color:#6BCBD9 ;border-radius: 50%;display:inline-block;position: absolute;top: 180px;left: 250px;"></b>
			<b class="dot dot23" data-toggle="tooltip" data-html="true" title="Menyia" style="width:10px;height:10px;background-color: #6BCBD9 ;border-radius: 50%;display:inline-block;position: absolute;top: 210px;left: 250px;"></b>
			<b class="dot dot24" data-toggle="tooltip" data-html="true" title="Asut" style="width:10px;height:10px;background-color:#6BCBD9 ;border-radius: 50%;display:inline-block;position: absolute;top: 233px;left: 257px;"></b>
			<b class="dot dot25" data-toggle="tooltip" data-html="true" title="Sohag" style="width:10px;height:10px;background-color:#6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 263px; left: 280px;"></b>
			<b class="dot dot26" data-toggle="tooltip" data-html="true" title="Quna" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 288px;left: 312px;"></b>
			<b class="dot dot27" data-toggle="tooltip" data-html="true" title="Luxor" style="width:10px;height:10px;background-color: #6BCBD9;border-radius: 50%;display:inline-block;position: absolute;    top: 319px;left: 312px;"></b>

			<img src="{{asset('images/Bosta-map-1-1.svg')}}" class="img-fluid my-5" style="height: 350px;" alt="">
			<b class="dot dot28" data-toggle="tooltip" data-html="true" title="Cairo" style="width:10px;height:10px;background-color:#6BCBD9;border-radius: 50%;display:inline-block;position: absolute;top: 131px;left: 251px"></b>
			<b class="dot dot29" data-toggle="tooltip" data-html="true" title="Aswan" style="width:10px;height:10px;background-color:#6BCBD9 ;border-radius: 50%;display:inline-block;position: absolute;top: 344px;left: 312px;"></b>
			<b class="dot dot30" data-toggle="tooltip" data-html="true" title="" style="width:10px;height:10px;background-color:#6BCBD9 ;border-radius: 50%; display:inline-block;position: absolute;top: 68px;left: 260px;"></b>
		</div>


			<div class="col-md-5">
				<h4>{{$contents->where('type', 'coverage')->first()["title_".app()->getLocale()]}}</h4>
				<p>{{$contents->where('type', 'coverage')->first()["content_".app()->getLocale()]}}</p>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- end why panel -->

<!-- end why panel -->

<!-- start transport -->
<section class="transport">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5">
				<div class="left">
					<h2>{{$contents->where('type', 'logistics')->first()["title_".app()->getLocale()]}}</h2>
					<p>{{$contents->where('type', 'logistics')->first()["content_".app()->getLocale()]}}</p>
				</div>
			</div>
			<div class="offset-lg-1 col-lg-6">
				<div class="right d-flex">
					<input type="text" class="w-75 p-2">
					<button class="btn track">@lang('home.track_now')</button>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end transport -->

<!-- start work -->
<section class="work">
	<div class="overlay">
		<div class="container text-white">
			<h2 class="text-center">@lang('home.how_works')</h2>
			<div class="row">
				@foreach($work_hows as $key => $how)
				<div class="col-lg-4">
					<div class="step">
						<span class="number my-3">{{$key+1}}</span>
					 	<h4 class="my-3">{{$how["title_".app()->getLocale()]}}</h4>
					 	<p>{{$how["content_".app()->getLocale()]}}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
<!-- end work -->

<!-- start feedback -->
<section class="feedback">
  	<div class="container">
	  	<h2 class="text-center py-3">@lang('home.happy_clients')</h2>
	  	<div id="client-carousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				@php $counter = 0; @endphp
				@foreach($happy_clients as $key => $client)
					@if($key == 0 || $key%3 == 0)
		  			<div class="carousel-item @if($key == 0) active @endif">
						<div class="row">
					@endif
							<div class="col-md-4">
								<div class="feed shadow p-4 text-center">
									<img src="{{url('/images/contents').'/'.$client->image}}" width="50" height="100" class="w-25 rounded-circle py-3" alt="">
							 		<p>{{$client["content_".app()->getLocale()]}}</p>
						 			<h4>{{$client["title_".app()->getLocale()]}}</h4>
							 		<p class="text-muted">{{$client["value"]}}</p>
								</div>
							</div>
					@if($key != 0 && $key%2 == 0)
						</div>
		  			</div>
					@elseif($key+1 == count($happy_clients))
						</div>
					</div>
					@endif
	  			@endforeach
			</div>
			<ol class="carousel-indicators position-static mt-3">
				@foreach($happy_clients as $key => $client)
					@if($key == 0 || $key%4 == 0)
					<li data-target="#client-carousel" data-slide-to="{{$counter}}" @if($key == 0) class="active" @endif></li>
					@php $counter++; @endphp
					@endif
				@endforeach
	  		</ol>
		</div>
	  </div>

</section>
<!-- end feedback -->
@endsection
