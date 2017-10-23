<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
              integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <title>{{ config('app.name') }}</title>
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
                <div class="navbar-nav mr-auto">
                    <a class="nav-item nav-link" href="{{ url('skills') }}">Skills</a>
                </div>
                <div class="navbar-nav ml-auto">
                    @if (Auth::check())
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form"
                              action="{{ route('logout') }}"
                              method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                </div>
            </nav>
            <br>

            @yield('content')
        </div>

        <script src="/js/app.js"></script>
        @yield('scripts')
    </body>
</html>
