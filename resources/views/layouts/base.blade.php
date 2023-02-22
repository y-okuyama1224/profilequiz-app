<!DOCTYPE html>
<div id="particles-js"></div>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"   id=wrapper>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="stylesheet" type="text/css" href=".\public\css\base.css">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" defer></script>

  @yield('js')
  <script src="{{ asset('js/hamburger.js') }}"></script>
  <!--↑js都度記入-->
</head>
@include('layouts.header')
<!--↑ここにヘッダーの記述が入る-->

@yield('main')
<!--↑コンテンツページで@section('main')~@endsectionで範囲を指定する-->

@include('layouts.footer')
<!--↑ここにフッターの記述が入る-->