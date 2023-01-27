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
            <form action="{{url('/users/register')}}">
            @csrf
                <div>
                    <p>苗字</p><input type="text" name="family_name" placehplder="山田"></input>
                    <p>名前</p><input type="text" name="name" placehplder="太郎"></input>
                </div>
                <div>
                    <p>メールアドレス</p>
                    <input type="email" name="email" placeholder="test@email.jp"></input>
                </div>
                <div>
                    <p>パスワード</p>
                    <input type="password" name="password"></input>
                </div>
                <div>
                    <p>パスワード確認</p>
                    <input type="password" name="confilm_password"></input>
                </div>
                <div>
                    <p>グループ名</p>
                    <input type="text" name="group_name" placeholder="〇〇会社〇〇部"></input>
                </div>
                <div>
                    <p>権限</p>
                    <option value="一般"></option>
                    <option value="管理者"></option>
                </div>
                <input type="submit" value="確認">
            </form>
            <p><a href="{{url('/users/register')}}">登録する</a></p>
          </div>
        </div>
        <p>ログインページは<a href="{{url('/users/login')}}">こちら</a></p>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
