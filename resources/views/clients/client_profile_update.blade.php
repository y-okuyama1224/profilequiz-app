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
          <div class="login-content">
          <p>更新が完了しました。</p>
          </div>
        </div>
        <p><a href="{{url('/toppage')}}">トップページへ戻る</a></p>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
