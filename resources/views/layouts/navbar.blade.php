<!--top button
<button id="btnUp" class="btn btn-lg btn-dark rounded-circle p-3   ">
    <i class="fas fa-arrow-up"></i>
</button>
top button-->

<!--start header-->
<nav class="navbar navbar-expand-lg fixed-top ">
    <div class="container">
        <a class="navbar-brand" href="#" class="d-flex align-items-center"><img src="{{asset('images/settings/'.$settings->where('name', 'logo')->first()->image)}}" alt="logo-shiping" class="img-fluid"><span>{{$settings->where('name', 'website_name')->first()->value}}</span></a>
        <p class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </p>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav row justify-content-center">
                <li class="nav-item active col">
                    <a class="nav-link" href="{{url('/'.app()->getLocale())}}">Home</a>
                </li>
                <li class="nav-item col">
                    <a class="nav-link" href="{{url(app()->getLocale().'/pricing')}}">Pricing</a>
                </li>
                <li class="nav-item col">
                    <a class="nav-link" href="{{url(app()->getLocale().'/contact_us')}}">Contact us</a>
                </li>
                <li class="nav-item col">
                    <a class="nav-link" href="{{url(app()->getLocale().'/login')}}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--end header-->
