@extends('layouts.base')
@section('js')
<script src="../js/page.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
    <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">ログアウト</h3></div>
    </div>
    <main>
      @csrf

      <div class="wrapper">
        <div class="contents">

          <div class=logout-contents>
            <div class="form-content">
              <h4>ログアウトしました</h4>
            </div>
          </div>

          <div class=url>
              <p class=url-path><a href="{{url('/login')}}">ログインページに戻る</a></p>
            </div>        
        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
