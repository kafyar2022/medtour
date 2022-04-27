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
  {{-- App styles --}}
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
  @yield('content')
  <!-- JQuery 3.6  -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  {{-- App scripts --}}
  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
