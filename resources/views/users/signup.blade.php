@extends('layouts.base')
@section('js')
<script src="../js/page.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
    <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">新規登録</h3></div>
    </div>
    <main>

      <div class="wrapper">
        <div class="contents">

          <div class="login-content">
            <form class="login-form" action="{{url('/users/comfirm')}}" >
            @csrf
              <div class=form-contents>

                  <div class=form-content>
                    <div class=form-content-head>
                      <p>苗字</p>
                    </div>
                    <div class=form-content-body>
                      <input type="text" name="family_name" placeholder="山田" required></input>
                    </div>
                  </div>

                  <div class=form-content>
                    <div class=form-content-head>
                      <p>名前</p>
                    </div>
                    <div class=form-content-body>
                      <input type="text" name="name" placeholder="太郎" required></input>
                    </div>
                  </div>

                  <div class=form-content>
                    <div class=form-content-head>
                      <p>メールアドレス</p>
                    </div>
                    <div class=form-content-body>
                      <input type="email" name="email" placeholder="test@email.jp" required></input>
                    </div>
                  </div>

                  <div class=form-content>
                    <div class=form-content-head>
                      <p>パスワード</p>
                    </div>
                    <div class=form-content-body>
                      <input type="password" name="password" required></input>
                    </div>
                  </div>

                  <div class=form-content>
                    <div class=form-content-head>
                      <p>パスワード確認</p>
                    </div>
                    <div class=form-content-body>
                      <input type="password" name="confilm_password" required></input>
                    </div>
                  </div>

                  <div class=form-content>
                    <div class=form-content-head>
                      <p>グループ名</p>
                    </div>
                    <div class=form-content-body>
                      <input type="text" name="group_name" placeholder="〇〇会社〇〇部" required></input>
                    </div>
                  </div>

                  <div class=form-content>
                    <div class=form-content-head>
                      <p>権限</p>
                    </div>
                    <div class=form-content-body>
                      <select name="role">
                        <option>一般</option>
                        <option>管理者</option>
                      </select>
                    </div>
                  </div>

                  <p class=form-content id=submit>
                    <button type="submit" name="button" id="submit-btn" onclick="validation()">確認</button>
                  </p>
              </div>

            </form>
            <div class=form-content>
                <p class=url-path>ログインページは<a href="{{url('/users/login')}}">こちら</a></p>
            </div>

          </div>

        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
