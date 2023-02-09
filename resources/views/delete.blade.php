@extends('layouts.base')
@section('js')
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
  <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">削除完了</h3></div>
    </div>
    <main>

      <div class="wrapper">
        <div class="contents">

          <div class="logout-content">
            <div form-content>
              <h4>削除が完了しました。</h4>
            </div>
          </div>

          <div class=url>
          <p class=url-path><a href="{{url('/toppage')}}">トップページへ戻る</a></p>
        </div>

        </div>  
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
