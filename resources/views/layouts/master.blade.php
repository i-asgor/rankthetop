<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Rank The Top - Your Success Is Our Top Priority</title>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/custome.css')}}">
      <!-- MAIN CSS -->
      <link rel="stylesheet" href="{{asset('frontend/css/templatemo-style.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/custome.css')}}">
   </head>
   <body>
      


      @include('layouts.header')
      @yield('content')
      @include('layouts.footer')
      <!-- SCRIPTS -->
      <script src="{{asset('frontend/js/jquery.js')}}"></script>
      <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('frontend/js/smoothscroll.js')}}"></script>     
      <script src="{{asset('frontend/js/custom.js')}}"></script>

      
   </body>
</html>
