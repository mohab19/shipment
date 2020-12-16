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
		<h2>Welcome to Shipping Company</h2>
		<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		<span class="btn begin"><i class="fas fa-angle-double-down fa-lg"></i></span>
	</div>
</section>
<!-- end paner -->

<!-- start features -->
<section class="features">
	<div class="container text-center">
		<h2 class="header">WHY CHOOSE SHIPPING <span>INFO</span></h2>
		<div class="row justify-content-between">
			<div class="feature col-lg-3   col-sm-8">
				<span><i class="fas fa-dollar-sign fa-3x"></i></span>
				<h5>Feature</h5>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
			</div>
			<div class="feature col-lg-3  col-sm-8">
				<span><i class="fas fa-star fa-3x"></i></span>
				<h5>Feature</h5>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
			</div>
			<div class="feature col-lg-3   col-sm-8 feat-last">
				<span><i class="fas fa-truck-moving fa-3x"></i></span>
				<h5>Feature</h5>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
			</div>
		</div>
	</div>
</section>
<!-- end features -->

<!--start about-->
<section class="about">
    <div class="container">
	    <h2 class="text-center py-5">About us</h2>
	    <div class="row">
		    <div class="col-lg-6">
			    <div class="about-text">
				    <h2 class="sub-title py-3"><span>OUR </span>HISTORY</h2>
				    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A architecto delectus enim quo magni, eaque, possimus sit fuga impedit animi quod recusandae ducimus iste quas, corporis libero quos deserunt amet.</p>
				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti unde laborum at molestiae error rem animi iure vero quidem veniam esse nisi reprehenderit fugiat architecto magnam earum delectus, doloremque quam.</p>
			    </div>
			    <div class="about-icon mt-5">
					<div class="row">
						<div class="col-md-6">
							<div class="item">
								<i class="fas fa-truck my-3 fa-2x"></i>
								<h3>Ground Shipping</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="item">
							    <i class="fas fa-plane my-3 fa-2x"></i>
							    <h3>Ground Shipping</h3>
							    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
						    </div>
					    </div>
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
	  			<div class="carousel-item active">
					<div class="row">
						<div class="col-lg-3">
							<div class="logo">
					 			<img src="images/delivermy.png"  class="w-50" alt="">
							</div>
						</div>
						<div class="col-lg-3">
			  				<div class="logo">
								<img src="images/delivermy.png"  class="w-50" alt="">
			  				</div>
		  				</div>
		  				<div class="col-lg-3">
			  				<div class="logo">
								<img src="images/delivermy.png"  class="w-50" alt="">
			  				</div>
		  				</div>
		  				<div class="col-lg-3">
			  				<div class="logo">
								<img src="images/delivermy.png"  class="w-50" alt="">
			  				</div>
		  				</div>
					</div>
	  			</div>
	  			<div class="carousel-item">
					<div class="row">
						<div class="col-lg-3">
							<div class="logo">
								<img src="images/delivermy.png"  class="w-50" alt="">
							</div>
						</div>
						<div class="col-lg-3">
			  				<div class="logo">
								<img src="images/delivermy.png"  class="w-50" alt="">
			  				</div>
		  				</div>
					    <div class="col-lg-3">
						    <div class="logo">
								<img src="images/delivermy.png"  class="w-50" alt="">
					 	    </div>
					    </div>
		  				<div class="col-lg-3">
			  				<div class="logo">
								<img src="images/delivermy.png"  class="w-50" alt="">
			  				</div>
		  				</div>
					</div>
	  			</div>
			</div>
			<ol class="carousel-indicators position-static mt-3">
				<li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
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
				<h4>Our Company covers every Major cities</h4>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
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
					<h2>TRANSPORTATIONS & LOGISTICS</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dolorem eius eligendi esse quod?</p>
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
				<div class="col-lg-4">
					<div class="step">
						<span class="number my-3">1</span>
					 	<h4 class="my-3">Choose Your Service</h4>
					 	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Incidunt praesentium dicta consectetur fuga neque fugit a at. Cum quod vero assumenda iusto.
						</p>
					 	<ul class="list-unstyled my-3">
						 	<li><i class="fas fa-check mx-2"></i>Error minus sint nobis dolor</li>
						 	<li><i class="fas fa-check mx-2"></i>Voluptatum porro expedita labore esse</li>
						 	<li><i class="fas fa-check mx-2"></i>Voluptas unde sit pariatur earum</li>
					 	</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="step">
						<span class="number my-3">2</span>
					 	<h4 class="my-3">Select Your Payment</h4>
					 	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Incidunt praesentium dicta consectetur fuga neque fugit a at. Cum quod vero assumenda iusto.
						</p>
						<ul class="list-unstyled my-3">
							<li><i class="fas fa-check mx-2"></i>Error minus sint nobis dolor</li>
							<li><i class="fas fa-check mx-2"></i>Voluptatum porro expedita labore esse</li>
							<li><i class="fas fa-check mx-2"></i>Voluptas unde sit pariatur earum</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="step">
						<span class="number my-3">3</span>
					 	<h4 class="my-3">Tracking Your Order</h4>
					 	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Incidunt praesentium dicta consectetur fuga neque fugit a at. Cum quod vero assumenda iusto.
						</p>
						<ul class="list-unstyled my-3">
							<li><i class="fas fa-check mx-2"></i>Error minus sint nobis dolor</li>
							<li><i class="fas fa-check mx-2"></i>Voluptatum porro expedita labore esse</li>
							<li><i class="fas fa-check mx-2"></i>Voluptas unde sit pariatur earum</li>
						</ul>
			 		</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end work -->

<!-- start feedback -->
<section class="feedback">
  	<div class="container">
	  	<h2 class="text-center py-3">Happy Clients</h2>
	  	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
		  		<div class="carousel-item active">
					<div class="row">
						<div class="col-md-4 ">
							<div class="feed shadow p-4 text-center">
								<img src="images/person.jpg" class="w-25 rounded-circle py-3" alt="">
						 		<p>Incidunt praesentium dicta consectetur fuga neque fugit a at.</p>
						 		<h4>fathy hasan</h4>
						 		<p class="text-muted">ui designer</p>
							</div>
						</div>
						<div class="col-md-4">
					  		<div class="feed shadow p-4 text-center">
						  		<img src="images/person.jpg" class="w-25 rounded-circle py-3" alt="">
						   		<p>Incidunt praesentium dicta consectetur fuga neque fugit a at.</p>
						   		<h4>fathy hasan</h4>
						   		<p class="text-muted">ui designer</p>
					  		</div>
			  			</div>
			  			<div class="col-md-4">
				  			<div class="feed shadow p-4 text-center">
					  			<img src="images/person.jpg" class="w-25 rounded-circle py-3" alt="">
				   				<p>Incidunt praesentium dicta consectetur fuga neque fugit a at.</p>
				   				<h4>fathy hasan</h4>
					   			<p class="text-muted">ui designer</p>
				  			</div>
			  			</div>
					</div>
	  			</div>
		  		<div class="carousel-item">
					<div class="row">
						<div class="col-md-4">
							<div class="feed shadow p-4 text-center">
								<img src="images/person.jpg" class="w-25 rounded-circle py-3" alt="">
						 		<p>Incidunt praesentium dicta consectetur fuga neque fugit a at.</p>
					 			<h4>fathy hasan</h4>
						 		<p class="text-muted">ui designer</p>
							</div>
						</div>
						<div class="col-md-4">
				  			<div class="feed shadow p-4 text-center">
						  		<img src="images/person.jpg" class="w-25 rounded-circle py-3" alt="">
						   		<p>Incidunt praesentium dicta consectetur fuga neque fugit a at.</p>
						   		<h4>fathy hasan</h4>
						   		<p class="text-muted">ui designer</p>
				  			</div>
			  			</div>
			  			<div class="col-md-4">
				  			<div class="feed shadow p-4 text-center ">
					  			<img src="images/person.jpg" class="w-25 rounded-circle py-3" alt="">
					   			<p>Incidunt praesentium dicta consectetur fuga neque fugit a at.</p>
					   			<h4>fathy hasan</h4>
					   			<p class="text-muted">ui designer</p>
				  			</div>
			  			</div>
					</div>
		  		</div>
			</div>
	  	</div>
	  	<ol class="carousel-indicators position-static">
			<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
			<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
	  	</ol>
  	</div>
</section>
<!-- end feedback -->
@endsection
