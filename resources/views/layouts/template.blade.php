<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ngantor | Free Job Portal Website </title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{url('css/fontAwesome.css')}}">
        <link rel="stylesheet" href="{{url('css/hero-slider.css')}}">
        <link rel="stylesheet" href="{{url('css/owl-carousel.css')}}">
        <link rel="stylesheet" href="{{url('css/style.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="{{url('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

<body>
    @include('layouts.navbar')    
    @yield('content')

    
    @include('layouts.footer')

    <div class="sub-footer">
        <p>Copyright © 2020 Ngantor - Glints X Hackathon</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="{{url('js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>

    <script src="{{url('js/vendor/bootstrap.min.js')}}"></script>
    
    <script src="{{url('js/datepicker.js')}}"></script>
    <script src="{{url('js/plugins.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
</body>
</html>