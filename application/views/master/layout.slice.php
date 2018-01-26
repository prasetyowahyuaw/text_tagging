<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Style -->
    <link href="{{url('assets/css/core.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/app.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/style.min.css')}}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{url('assets/img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{url('assets/img/favicon.png')}}">

</head>
<body>
    @yield('body')

    <script src="{{url('/assets/js/core.min.js')}}" data-provide="sweetalert"></script>
    <script src="{{url('/assets/js/app.min.js')}}"></script>
    <script src="{{url('/assets/js/script.min.js')}}"></script>
</body>
</html>