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
            <p>プロフィール</p>
            <p><a href="{{url('/answer')}}">回答する</a></p>       
        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->