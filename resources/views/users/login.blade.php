@extends('layouts.base')
@section('js')
<link rel="stylesheet" type="text/css" href="..\css\base.css">

@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>

    <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">ログイン</h3></div>
    </div>
    <main>


      <div class="wrapper">
        <div class="contents">
          
          <div class="login-content">
            <form class="login-form" action="{{url('/users/profile')}}" method="post">
            @csrf
              <div class=form-contents>

                <div class=form-content>
                  <div class=form-content-head>
                    <p>メールアドレス</p>
                  </div>
                  <div class=form-content-body>
                    <input type="text" name="email" placeholder=test@email.jp required>
                  </div>
                </div>

                  <div class=form-content>
                    <div class=form-content-head>
                      <p>パスワード</p>
                    </div>
                    <div class=form-content-body>
                      <input type="password" name="password" required>
                    </div>
                  </div>
                
                  <div class=form-content>
                    <div class=form-content-head>
                      <p>グループ名</p>
                    </div>
                    <div class=form-content-body>
                      <input type="text" name="group_name" required>
                    </div>
                  </div>
              </div>
              <p class=form-content id=submit>
                <button type="submit" name="button" id="submit-btn" onclick="validation()">ログイン</button>
              </p>            
            </form>

              <div class=url>
                <p class=url-path><a href="{{url('/users/forget_password')}}">パスワードをお忘れですか？</a></p>
                <p class=url-path>新規登録の方は<a href="{{url('/users/signup')}}">こちら</a></p>
              </div>

          </div>
        </div>

      </div>
    </main>

  </body>
@endsection
<!--ここまでがtoppageの範囲 -->
