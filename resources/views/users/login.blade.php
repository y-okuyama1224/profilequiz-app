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
            <!-- csrf = クロス・サイト・リクエスト・フォージェリ(CSRF)からアプリケーションを簡単に守ることができるもの -->
              <div class=form-contents>

                <div class=form-content>
                  <div class=form-content-head>
                    <p>メールアドレス</p>
                  </div>
                  <div class=form-content-body>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                </div>

                  <div class=form-content>
                    <div class=form-content-head>
                      <p>パスワード</p>
                    </div>
                    <div class=form-content-body>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>

                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                  </div>
                

              </div>
              <p class=form-content id=submit>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ログイン') }}
                                </button>

         
              </p>            
            </form>

              <div class=url>
              @if (Route::has('password.request'))
                <a class=url-path href="{{ route('password.request') }}">
                    {{ __('パスワードをお忘れですか?') }}
                </a>
              @endif     
                <p class=url-path>新規登録の方は<a href="{{url('/users/signup')}}">こちら</a></p>
              </div>

          </div>
        </div>

      </div>
    </main>

  </body>
@endsection
<!--ここまでがtoppageの範囲 -->
