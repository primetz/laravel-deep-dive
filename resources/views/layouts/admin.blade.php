<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Inzercia')</title>
    <script src="https://kit.fontawesome.com/76cd828085.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header class="nw-header nw-header_fixed">
    <div class="container">
        <div class="nw-header__wrp">
            <a href="{{ route('home') }}" class="nw-header__logo-link">
                <img src="{{ asset('img/logo.png') }}" alt="inzercia" class="nw-header__logo-img">
            </a>
            @include('blocks.admin.menu')
            <div class="nw-header-right">
                <div class="nw-header-right__profile-wrp">
                    <button class="nw-header-right__btn"><i class="far fa-user-circle"></i></button>
                    <ul class="navbar-nav ms-auto nw-header-right-navbar">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('admin.profile.show') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                <button class="nw-header-right__btn"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>
</header>
<main class="nw-main">
    <div class="container">
        @yield('content')
    </div>
</main>
<footer class="nw-footer">
    <div class="container">
        <div class="nw-footer__wrp">
            <span class="nw-footer__copyright">&copy; Copyright {{ date('Y') }}</span>
        </div>
    </div>
</footer>
</body>
</html>
