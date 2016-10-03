<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>surveyFor || {{ $title or 'Welcome' }}</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
        <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="blade_content">
            <div>
                <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">SurveyFor</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#">Home</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
                <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">SurveyFor</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>

            <div>
                @yield('slider')
            </div>

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

