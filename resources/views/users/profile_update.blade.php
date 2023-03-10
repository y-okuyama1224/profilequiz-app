@extends('layouts.base')
@section('js')
<script src="../js/page.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
  <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">更新完了</h3></div>
    </div>
    <main>

      <div class="wrapper">
        <div class="contents">

          <div class="login-form">
            <div class="form-content">
              <h4>プロフィール更新しました</h4>
            </div>          
          </div>

        </div>
      </div>

      <div class=url>
        <p class=url-path><a href="{{url('/users/profile')}}">マイページへ戻る</a></p>   
      </div>


    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
