<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href={{ asset("bootstrap/css/bootstrap.css") }}>
    <link rel="stylesheet" href={{ asset("jquery/jquery-ui.min.css") }}>
    <link rel="stylesheet" href={{ asset("css/main.css") }}>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        {{--<a class="navbar-brand" href="#">Navbar</a>--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item menu-item">
                    <a class="nav-link" href="{{ route('patients') }}">Items List</a>
                </li>
                <li class="nav-item menu-item">
                    <a class="nav-link" href="{{ route('add_patient') }}">Add New Item</a>
                </li>
                <li class="nav-item menu-item">
                    <a class="nav-link" href="{{ route('notes') }}">Notes List</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>
@yield('content')
<script type="text/javascript" src={{ asset("js/jquery.min.js") }}></script>
<script type="text/javascript" src={{ asset("jquery/jquery-ui.min.js") }}></script>
<script type="text/javascript" src={{ asset("js/script.js") }}></script>
</body>
</html>