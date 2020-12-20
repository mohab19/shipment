@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/index_style.css') }}">
@endpush
@section('content')
<!-- start paner -->
<section class="main-panel">
	<div class="layer">

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
		<h2 class="header">WHY CHOOSE Deliver <span>Me</span></h2>
		<div class="row justify-content-between">
			@foreach($features as $key => $feature)
			<div class="feature col-lg-3 col-sm-8">
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
								<i class="{{$feature->value}} my-3 fa-2x"></i>
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
					<img src="images/img_1.jpg"  class="img-fluid"  alt="shipping">
				</div>
			</div>
		</div>
	</div>
</section>
<!--end about-->

<!-- start parteners -->
<section class="partners">
	<div class="container">
		<h2 class="pb-5 text-center">Our Partners</h2>
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
	<div class="panel-background">

	</div>
	<div class="container text-center">
		<h2>HOW MUCH OUR COMPANY COVERS</h2>
		<div class="row">
			<div class="col-md-7">

			</div>
			<div class="col-md-5">
				<h4>{{$contents->where('type', 'coverage')->first()["title_".app()->getLocale()]}}</h4>
				<p>{{$contents->where('type', 'coverage')->first()["content_".app()->getLocale()]}}</p>
			</div>
		</div>
	</div>
</section>
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
					<button class="btn track">Track Now</button>
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
			<h2 class="text-center">How it work</h2>
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
	  	<h2 class="text-center py-3">Happy Clients</h2>
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
