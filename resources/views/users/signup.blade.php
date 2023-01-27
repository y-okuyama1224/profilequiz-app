@extends('layouts.base')
@section('js')
<script src="../js/page.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
    <main>

      <div class="wrapper">
        <div class="contents">
          <div class="login-content">
          <p><a href="{{url('/users/register')}}">登録する</a></p>
          </div>
        </div>
        <p>ログインページじは<a href="{{url('/users/login')}}">こちら</a></p>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
