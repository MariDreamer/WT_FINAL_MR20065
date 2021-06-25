<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


<!--SAY ABOUT UTF-8-->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <style>
    html 
    {
        
        display: block;
        font-family: 'Nunito', sans-serif;
        background: rgba(4, 6, 34, 1);
        height: 100vh;
        color: rgba(200, 200, 200, 1);
        padding-bottom: 0;
        margin-bottom: 0;

    }
    body
    {
        margin: 0;
        padding-bottom: 0;
        margin-bottom: 0;
    }
    #app
    {
        display: block;
        height: 100vh;
        max-width: 60em;
        padding: 0 20px;
        margin: 6em auto 19em;
        margin-top: 0;
        background: rgba(4, 6, 23, 1);
        position: relative;
        box-shadow: 0 0.3em 1em #000;
        color: rgba(200, 200, 200, 1);
        text-align: center;
        padding-bottom: 0;
        margin-bottom: 0;
    }

    .inapp
    {
        padding-top: 10vh;
    }

    .menu
    {
        background-color: rgba(3, 2, 13, 1);
        opacity: 0.8;
        color: white;
        font-size: 120%;
        overflow: visible;
        text-align: center;
        position: fixed; 
        width: 100vw;
        vertical-align: middle;
        z-index: 10;
        margin-top: 0;
        height: 10vh;
    }

    .menu li
    {
        list-style-type: none;
    }
    .menu ul
    {
        list-style-type: none;
    }

    .menu .a
    {
        opacity: 1;
    }

    .parent-menu
    {
        text-align: center;
        color: white;
        display: inline;
        vertical-align: middle;
        padding-top: 0;
    }

    .upper-menu
    {
        padding: 12px;
        float: left;
        color: white;
        text-align: center;
        
        margin-left: 18px;
        vertical-align: middle;
    }

    .upper-menu a
    {
        text-align: center;
        text-decoration: none;
        color: white;
        vertical-align: middle;
    }

    .sub-menu 
    {
        display: none;
        position: absolute;
        text-align: left;
        color: white;
        text-decoration: none;
        background-color: rgba(3, 2, 13, 1);
        opacity: 0.8;
        min-width: fit-content;
        padding: 12px;
        font-size: 90%;
        z-index: 1;
        margin-right: 38px;
    }

    .sub-menu li
    {
        padding-top: 14px;
        vertical-align: middle;
        text-decoration: none;
        color: white;
    }

    .right
{
    float: right;
    background-color: rgba(242, 213, 26, 0.8);
    border-radius: 32px;
    color: white;
    border: 1px solid white;
    padding-left: 14px;
    padding-right: 14px;
    padding-top: 6px;
    padding-bottom: 6px;
    margin: 22px;
    margin-right: 30px;
}

.menu:hover .right a
{
    color: white;
}

.upper-menu:hover .btn:hover a
{
    color: white;
}

.right:hover
{
    background-color: rgba(242, 213, 26, 1);
    opacity: 1;
}



.sub-menu-caption 
{
    float: right;    
    margin-right: 38px;
    padding: 12px;
    color: white;
    text-align: center;
    vertical-align: middle;
        
}
.sub-menu-caption:hover .sub-menu
{
    display: block;
}

.menu a
{
    text-decoration: none;
}

a:visited 
{
    color: rgba(200, 200, 200, 1);
}

.btn
{
    border-radius: 10px;
    border: none;
    padding: 15px;
    margin: 5px;
}

    </style>
</head>
<body>
<nav id="top-menu" class="menu">
    <ul class="parent-menu">
    <li class="upper-menu">
        <form method="POST" action="{{ route('homepage') }}">
            @csrf

            <a href="route('homepage')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Home') }}
            </a>
        </form>
    </li>
    @auth
    <li class="sub-menu-caption ">Profile
        <ul class="sub-menu">
            <li>
            <form method="POST" action="{{ route('userpage') }}">
                @csrf
                <a href="{{ route('userpage') }}">{{ __('My page') }}</a>
            </form>
            </li>
            <li>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    </form>
                    <!-- <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}">{{ __('Logout') }}</a>
                    </form> -->
                </div>
            </li>  
        </ul>
    </li>
    @endauth
    
    @guest
    <li class="sub-menu-caption">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <a href="{{ route('login') }}">{{ __('Login') }}</a>
        </form>
    </li>
    <li class="sub-menu-caption">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
        </form>
    </li>
    @endguest
    </ul>
</nav>
    <div id="app">
        <div class="inapp">
        <main class="py-4">
            @yield('content')
        </main>
        </div>
    </div>
</body>
</html>