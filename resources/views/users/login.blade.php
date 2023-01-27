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
                <p>グループ名</p>
                <input type="text" name="group_name">
              </div>
              <input type="submit" value="ログイン">
            </form>
            <p><a href="{{url('/users/forget_password)}}">パスワードをお忘れですか？</a></p>
            <p>新規登録の方は<a href="{{url('/users/signup')}}">こちら</a></p>
          </div>
        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
