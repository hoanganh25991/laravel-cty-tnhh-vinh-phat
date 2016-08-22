<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/fonts/flat-icon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.min.css') }}">
</head>
<body>
@include('partial.navbar')

@yield('slider')

<div class="container" id="main-content">
    <div class="row">
        <div class="row">
            @include('partial.breadcrumb')
        </div>

        <div class="col-md-9" id="main-column">
            @yield('content')
        </div>

        <div class="col-md-3" id="side-bar">
            @include('partial.tech-consult')
            @include('partial.sale-consult')
        </div>
    </div>
</div>

@yield('slider-footer')

@yield('message')

@include('partial.footer')

<script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/style.js') }}"></script>
</body>
</html>