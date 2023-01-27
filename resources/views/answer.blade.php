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
            <p>正解！</p>
            <p><a href="{{url('/users/profile')}}"></a>プロフィールに戻る</p>
            <p><a href="{{url('/clients/profile')}}"></a>クライアントプロフィールに戻る</p>       
        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->