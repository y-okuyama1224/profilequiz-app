@extends('layouts.base')
@section('js')
<script src="../js/page.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
    <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">入力確認</h3></div>
    </div>
    <main>

      <div class="wrapper">
        <div class="contents">

           <div class=login-content>
              <form class=login-form action="{{url('/users/comfirm')}}">
                @csrf   
                <div class="form-contents">
  
                    <div class="form-content">
                        <div class="form-content-head">
                          <p>【苗字】</p>
                        </div>
                        <div class="form-content-body">
                          <p>苗字</p>
                        </div>
                    </div>
  
                    <div class="form-content">
                        <div class="form-content-head">
                          <p>【名前】</p>
                        </div>
                        <div class="form-content-body">
                          <p>名前</p>
                        </div>
                    </div>
    
                    <div class="form-content">
                        <div class="form-content-head">
                          <p>【メールアドレス】</p>
                        </div>
                        <div class="form-content-body">
                          <p>test@email.jp</p>
                        </div>
                    </div>
    
                    <div class="form-content">
                        <div class="form-content-head">
                          <p>【グループ名】</p>
                        </div>
                        <div class="form-content-body">
                          <p>〇〇会社〇〇部</p>
                        </div>
                    </div>

                    <div class=btns>
                        <p class=form-content id=submit>
                            <button type="submit" name="button" id="submit-btn" onclick="validation()">登録</button>
                        </p>
                        <p class=form-content id=submit>
                            <button class="long-btn" type="button" onclick="history.back()" id="return-btn">戻る</button>
                        </p>
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