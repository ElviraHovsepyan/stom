<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link rel="stylesheet" href={{ asset("bootstrap/css/bootstrap.css") }}>
    <link rel="stylesheet" href={{ asset("jquery/jquery-ui.min.css") }}>
    <link rel="stylesheet" href={{ asset("bootstrap/css/datatables.min.css") }}>
    <link rel="stylesheet" href={{ asset("css/main.css") }}>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg menu-bar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item menu-item">
                    <a class="nav-link" href="{{ route('patients') }}">Հիվանդներ</a>
                </li>
                <li class="nav-item menu-item">
                    <a class="nav-link" href="{{ route('add_patient') }}">Ավելացնել նոր քարտ</a>
                </li>
                <li class="nav-item menu-item">
                    <a class="nav-link" href="{{ route('notes') }}">Օրագիր</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
@yield('content')
<script type="text/javascript" src={{ asset("js/jquery.min.js") }}></script>
<script type="text/javascript" src={{ asset("jquery/jquery-ui.min.js") }}></script>
<script type="text/javascript" src={{ asset("bootstrap/js/bootstrap.min.js") }}></script>
<script type="text/javascript" src={{ asset("bootstrap/js/datatables.min.js") }}></script>
<script type="text/javascript" src={{ asset("js/script.js") }}></script>
<script type="text/javascript" src={{ asset("js/switcher.js") }}></script>
</body>
</html>