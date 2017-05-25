<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wurzelpark Arriach</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
{{--    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- fade out and remove flash messages -->
    <script>
        $(document).ready(function () {
            jQuery(".flash-message").fadeOut(4000);
        });
    </script>--}}
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{ url('/') }}">
                    Wurzelpark Arriach
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="/login">{{ __("messages.message_login") }}</a></li>
                        <li><a href="/register">{{ __("messages.message_register") }}</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __("messages.message_logout") }}
                                    </a>

                                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</div>

<div class="container">
    <p>
        <a href="#">{{ __("messages.message_top") }}</a>
    </p>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
