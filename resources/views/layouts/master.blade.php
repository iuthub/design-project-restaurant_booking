<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

    @yield('content')

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.js')}}"></script>
<script src={{asset('assets/js/owl.carousel.js')}}></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>