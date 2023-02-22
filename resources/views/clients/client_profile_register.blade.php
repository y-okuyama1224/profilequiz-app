@extends('layouts.base')
@section('js')
<script src="../js/page.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
    <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">登録完了</h3></div>
    </div>
    <main>

      <div class="wrapper">
        <div class="contents">
            <div class=logout-contents>
              <div class="form-content">
                <h4>クライアントプロフィールの登録が完了しました</h4>
              </div>
              <div class=url>
                <p class=url-path><a href="{{url('/clients/client_profile')}}">クライアント様ページへ</a></p>
              </div>            
            </div>
        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
