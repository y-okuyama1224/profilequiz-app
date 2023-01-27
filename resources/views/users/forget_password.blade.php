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
            <form class="login-form" action="{{url('/toppage')}}" method="post">
              <div>
                <p>メールアドレス</p>
                <input type="text" name="email">
              </div>
              <p><a href="{{url('/users/login')}}">戻る</a></p>
              <input type="submit" value="送信">
            </form>
          </div>
        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
