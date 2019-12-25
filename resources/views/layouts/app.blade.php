<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/image-picker.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                    {{--<span class="sr-only">Toggle Navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}
                <a class="navbar-brand" href="{{ url('/') }}">
                    Wurzelpark Arriach
                </a>
            </div>
        </div>
        <div class="container">
            <div class="navbar" id="app-navbar">
                <ul class="nav navbar-nav navbar-btn">
                    @if (Auth::guest())
                        <li><a href="{{ url('login') }}">{{ __("messages.message_login") }}</a></li>
                        <li><a href="{{ url('register') }}">{{ __("messages.message_register") }}</a></li>
                    @else
                        <li><a href="{{ url('finish-quiz') }}">{{ __("messages.message_finish_quiz") }}</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __("messages.message_logout") }}
                                    </a>

                                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
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

<footer class="page-footer font-small blue pt-4 mt-4">
    <hr>
    <div class="footer-copyright text-center py-3">© Wurzelpark Arriach 2020.
        <a href="{{ url('info') }}" target="_blank">{{ __("messages.message_imprint") }}</a>.
        <a href="{{ url('privacy') }}" target="_blank">{{ __("messages.message_privacy") }}.</a>
    </div>
    <br/>
    <div class="footer-copyright text-center py- small">{{ __("messages.message_cookie_info") }}
    </div>
    <hr>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/image-picker.js') }}"></script>
<script src="{{ asset('js/image-picker.min.js') }}"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true
        });
    } );
</script>
</body>
</html>
