<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>surveyFor || {{ $title or 'Welcome' }}</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
        <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="blade_content">
            @if (!Auth::guest())
                <nav>
                    <div class="nav-wrapper">
                        <a href="#!" class="brand-logo">SurveyFor</a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                            <ul id="dropdown1" class="dropdown-content">
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                            </ul>
                        </ul>
                    </div>
                </nav>
            @endif
            <div>
                @yield('content')
            </div>

        </div>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
        <script type="text/javascript" src="{!! asset('js/Chart.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    </body>

</html>

