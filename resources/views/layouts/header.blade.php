<!doctype html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>{{$title}}</title>
<meta name="author" content="">
<meta name="description" content="{{$citymeta}}">
<meta name="keywords" content="magento, shopsystem Germany, E-Commerce, ecommerce, magento agency, magento Germany, magento2 Germany, magento landing, creative, works, showcase, portfolio, projects, modern, agency, freelancers, dedicated developer magento">

<!-- FAVICON FILES -->
<link href="{{asset('images/icons/apple-touch-icon-144-precomposed.png')}}" rel="apple-touch-icon" sizes="144x144">
<link href="{{asset('images/icons/apple-touch-icon-120-precomposed.png')}}" rel="apple-touch-icon" sizes="120x120">
<link href="{{asset('images/icons/apple-touch-icon-76-precomposed.png')}}" rel="apple-touch-icon" sizes="76x76">
<link href="{{asset('images/icons/favicon.png')}}" rel="shortcut icon">

<!-- GOOGLE WEB FONT -->
<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700&display=swap" rel="stylesheet">

<!-- CSS FILES -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('fonts/iconfont.css')}}">
<link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
<link rel="stylesheet" href="{{asset('css/venobox.css')}}">
<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('css/color-1.css')}}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">      
            function getsiteurl()
            {
              var BASE_URL = {!! json_encode(url('/')) !!}

              return BASE_URL;
            }
       </script>
</head>
<body>
	@include('sweet::alert')