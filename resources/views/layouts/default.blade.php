<!DOCTYPE html>
<html lang="en">

<head>
  <title>{{ config ('app.name', 'elkady-blog')}}</title>
  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="mohamed al kady">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
 
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
 
  
   <meta name="csrf-token" content="{{ csrf_token() }}">
  
  
</head>

<body>

@include('elements.navbar')
@include('elements.flash')
<div class="container">
@yield('content')

</div>













<script type="text/javascript" src="{{asset('js/pooper.js')}}"></script>
<Script src="{{ asset('js/app.js') }}" </Script>
<Script src="{{ asset('js/bootstrap.min.js') }}" </Script>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script type="text/javascript" src="{{asset('js/fontawesome-all.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

@yield('javascript')

</html>