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
              <div>
                <p>パスワード</p>
                <input type="password" name="password">
              </div>
              <input type="submit" value="ログイン">
            </form>
            <p>新規登録の方は<a href="{{url('/signin')}}">こちら</a></p>
          </div>
        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
