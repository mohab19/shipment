<nav class="navbar navbar-expand-lg bg-white fixed-top">
    <a class="navbar-brand" href="index.html">
        <img src="{{asset('img/logo.svg')}}" width="140" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto navbar-right-top">
            <li class="nav-item dropdown">
                @if(app()->getLocale() == 'ar')
                <a class="nav-link dropdown-toggle" href="{{url('/ar/admin')}}" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-sa"> </span> عربي</a>
                @else
                <a class="nav-link dropdown-toggle" href="{{url('/en/admin')}}" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-us"> </span> English</a>
                @endif
                @if(app()->getLocale() == 'en')
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    <a class="dropdown-item" href="{{url('/ar/admin')}}"><span class="flag-icon flag-icon-sa"> </span>  عربي</a>
                </div>
                @else
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    <a class="dropdown-item" href="{{url('/en/admin')}}"><span class="flag-icon flag-icon-us"> </span>  English</a>
                </div>
                @endif
            </li>
            <li class="nav-item">
                <div id="custom-search" class="top-search-bar">
                    <input class="form-control" type="text" placeholder="Search..">
                </div>
            </li>
            <li class="nav-item dropdown nav-user">
                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-2x"></i> </a>
                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                    <div class="nav-user-info">
                        <h5 class="mb-0 text-white nav-user-name">{{auth()->user()->name}}</h5>
                        <span class="status"></span><span class="ml-2">@lang('main.available')</span>
                    </div>
                    <a class="dropdown-item" href="{{url(app()->getLocale() .'/admin/admins/'.auth()->user()->id)}}"><i class="fas fa-cog mr-2"></i>@lang('main.settings')</a>
                    <a class="dropdown-item" href="{{route('logout', app()->getLocale())}}"><i class="fas fa-power-off mr-2"></i>@lang('main.logout')</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
