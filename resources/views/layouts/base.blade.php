<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>プロフィールクイズ</title>
  <link rel="stylesheet" type="text/css" href=".\css\base.css">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" defer></script>
  @yield('js')
  <!--↑js都度記入-->
</head>
@include('layouts.header')
<!--↑ここにヘッダーの記述が入る-->

@yield('main')
<!--↑コンテンツページで@section('main')~@endsectionで範囲を指定する-->

@include('layouts.footer')
<!--↑ここにフッターの記述が入る-->
