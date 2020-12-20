<div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
                <li class="nav-divider">@lang('main.main')</li>
                @auth('admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home', app()->getLocale())}}"><i class="fas fa-fw fa-columns"></i>@lang('main.dashboard')</a>
                </li>
                <li class="nav-divider">@lang('main.management')</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('users.index', app()->getLocale())}}"><i class="fas fa-fw fa-user"></i>@lang('main.users')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contents.index', app()->getLocale())}}"><i class="fas fa-file-word"></i> @lang('contents.contents')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('settings.index', app()->getLocale())}}"><i class="fas fa-cogs"></i> @lang('settings.settings')</a>
                </li>
                @endauth
            </ul>
        </div>
    </nav>
</div>
