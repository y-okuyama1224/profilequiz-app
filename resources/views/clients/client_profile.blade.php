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
            <p>トップページは<a href="{{url('/toppage')}}">こちら</a></p>
            <p>プロフィール編集は<a href="{{url('/clients/profile_edit')}}">こちら</a></p>   
            <p><a href="{{url('/profile_quiz')}}">プロフィールクイズをする</a></p>       
        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->