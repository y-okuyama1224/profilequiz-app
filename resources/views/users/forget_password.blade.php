@extends('layouts.base')
@section('js')
<script src="../js/page.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
  <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">パスワード再設定</h3></div>
    </div>
    <main>

      <div class="wrapper">
        <div class="contents">
          <div class="login-content">
            <form class="login-form" action="{{url('/toppage')}}" method="post">
                <div class=form-contents>

                    <div clas=form-content>
                        <p>メールアドレス</p>
                        <input type="text" name="email">
                    </div>
                    <p class=form-content>
                        <button class="long-btn" type="button" onclick="history.back()" id="return-btn">戻る</button>
                    </p>
                    <div clas=form-content>
                        <input type="submit" value="送信" id="submit-btn" >
                    </div>

                </div>
            </form>
          </div>
        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
