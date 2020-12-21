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
            <ul class="navbar-nav row justify-content-center align-items-center">
                <li class="nav-item active col">
                    <a class="nav-link" href="{{url('/'.app()->getLocale())}}">@lang('main.home')</a>
                </li>
                <li class="nav-item col">
                    <a class="nav-link" href="{{url(app()->getLocale().'/pricing')}}">@lang('main.pricing')</a>
                </li>
                <li class="nav-item col">
                    <a class="nav-link" href="{{url(app()->getLocale().'/contact_us')}}">@lang('main.contact_us')</a>
                </li>

                <!--------->
                <li class="nav-item dropdown col">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">  
                    <a class="dropdown-item" href="#">English</a>
                    <a class="dropdown-item" href="#">Arabic</a>
                </li>
                <!---->
                <li class="nav-item col">
                    @if(auth()->user())
                   <div class="lang-dropdown">
                       <div class="lang-select">
                           <span>{{auth()->user()->name}}</span>&nbsp;
                           <span><i class="fas fa-caret-down"></i></span>
                       </div>
                       <div class="lang-list">
                           <ul class="list-unstyled">
                               <li><a href="{{url(app()->getLocale().'/logout')}}" class="d-flex" style="justify-content: space-between;"><span>@lang('main.logout')</span></a></li>
                           </ul>
                       </div>
                   </div>
                   @else
                   <a href="{{route('login', app()->getLocale())}}"><i class="fas fa-user"></i><b class="@if(app()->getLocale() == 'ar') mr-2 @else ml-2 @endif"> @lang('home.login') </b></a>
                   @endif
                </li>
                
                <!-- <li class="lang-dropdown">
                    <div class="lang-select">
                        <span><i class="fas fa-globe-asia"></i></span>&nbsp; 
                        @if(app()->getLocale() == 'ar')
                        <span>عربي</span>&nbsp;
                        @else
                        <span>English</span>&nbsp;
                        @endif
                        <span><i class="fas fa-caret-down"></i></span>
                    </div>
                    <div class="lang-list">
                        <ul class="list-unstyled">
                            <li><a href="{{url('/ar')}}" class="d-flex" style="justify-content: space-between;"><span>عربي</span>@if(app()->getLocale() == 'ar') <span><i class="fas fa-check"></i></span> @endif</a></li>
                            <li><a href="{{url('/en')}}" class="d-flex" style="justify-content: space-between;"><span>English</span>@if(app()->getLocale() == 'en') <span><i class="fas fa-check"></i></span> @endif</a></li>
                        </ul>
                    </div>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
<!--end header-->
