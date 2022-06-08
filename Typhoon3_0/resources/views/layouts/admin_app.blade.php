<!DOCTYPE html>

<head>

    <title>Tajfun sushi</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <script src="js/script.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body onload="loadPage()">
    <div class="header">
        <div class="logo">
            <img class="logo_img" src="../../images/logo.png">
            <h1>Tajfun sushi</h1>
            <h3>sushi na wynos</h3>
        </div>
    </div>
    <div class="menu_container">
        <div class="menu_inner_container">
            <nav class="menu_nav">
                <a id="str_gl" class="link_nav" href="{{route('adminHome')}}">STRONA GLÓWNA</a>
                <a class="link_nav" href="{{route('adminMenu')}}">MENU</a>
                <a class="link_nav" href="{{route('adminOrder')}}">ZAMÓWIENIA</a>
                <a class="link_nav" href="{{route('create')}}">CREATE</a>
            </nav>
            @guest
                    <nav class="menu_nav_icons">
                        @if (Route::has('login'))
                            <a class="nav-link" href="{{ route('login') }}"><img style="height: 25px;" src="../../images/profile.png"></a>
                        @endif
                        <a href="{{route('cartIndex')}}"><img style="height: 25px;" src="../../images/cart.png"></a>
                        <!-- @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('R') }}</a>
                        @endif -->

                        @else
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
</a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                    </nav>

            @endguest
        </div>
    </div>
    <div class="content_container">
        <div class="content_inner_container" style="display: flex; flex-wrap: wrap; justify-content: center;">
            @yield('content')
        </div>
    </div>

    <footer class="footer">
        <div class="footer_links">
            <a class="footer_link" href="javascript://"> <img src="../../images/instagram_img.png"> </a>
            <a class="footer_link" href="javascript://"> <img src="../../images/facebook_img.png"> </a>
            <a class="footer_link" href="javascript://"> <img src="../../images/twitter_ico.png"> </a>
        </div>
        <div class="footer_nav_menu">
            <a class="footer_nav" href="javascript://" >WRÓC DO GÓRY</a>
            <a class="footer_nav" href="javascript://">ZOBACZ MENU</a>
            <a class="footer_nav" href="javascript://">ZAMÓW ONLINE</a>
        </div>
    </footer>
</body>

</html>