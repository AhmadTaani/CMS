<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ABC</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body class="antialiased">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">ABC Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @if (Route::has('login'))
                    @auth
                        {{--                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>--}}
                    @else
                        {{--                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>--}}
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">User Register</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.register') }}">Admin Register</a>
                            </li>
                            {{--                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
                        @endif
                    @endauth
                @endif
                @if(Auth::check())
                    @if(Auth::user()->role == 'admin')
                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- Header-->
<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <h1 class="display-4 text-white mt-5 mb-2">Complaint Management Portal</h1>
                <p class="lead mb-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non
                    possimus ab labore provident mollitia. Id assumenda voluptate earum corporis facere quibusdam
                    quisquam iste ipsa cumque unde nisi, totam quas ipsam.</p>
            </div>
        </div>
    </div>
</header>
<!-- Page Content-->
<div class="container">
    <div class="row">
        <div class="col-md-8 mb-5">
            <h2>What We Do</h2>
            <hr/>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi
                soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat
                explicabo, maiores!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni
                in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate.
                Voluptatum.</p>
            <a class="btn btn-primary btn-lg" href="#!">Call to Action »</a>
        </div>
    </div>
</div>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; ABC 2021</p></div>
</footer>
</body>
</html>
