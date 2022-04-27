<!DOCTYPE html>
<html lang="{{ App::currentLocale() }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="robots" content="none">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="yandex" content="none">
  <title>Henes Medtours</title>
  {{-- Font awesome --}}
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Owl carousel -->
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  {{-- Gallery plugin --}}
  <link href="{{ asset('css/simple-lightbox.min.css') }}" rel="stylesheet">
  {{-- App styles --}}
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  {{-- Jivochat --}}
  <script src="//code-eu1.jivosite.com/widget/G1qG7UkbiE" async></script>
</head>

<body>
  @include('layouts.header')
  @yield('content')
  @include('layouts.footer')
  <!-- JQuery 3.6  -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Owl carousel -->
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  {{-- Gallery plugin --}}
  <script src="{{ asset('js/simple-lightbox.min.js') }}"></script>
  {{-- App scripts --}}
  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
