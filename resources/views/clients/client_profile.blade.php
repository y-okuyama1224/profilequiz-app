@extends('layouts.base')
@section('js')
<script src="../js/page.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
  <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">クライアント様プロフィール</h3></div>
    </div>
    <main>

    <div class="wrapper">
        <div class="contents">

            <div class=login-form>

                <div class="form-contents">
                    <h4>クライアント様プロフィール</h4>
    
                    <div class="form-content">
                        <div class="form-content-head">
                          <p><img src="{{asset('storage/lufy.png')}}"></p>
                        </div>
                    </div>
    
                    <div class="form-content">  
                        <div class="form-content-head">
                          <p>【氏名】</p>
                        </div>
                        <div class="form-content-body">
                          <p>苗字</p><p>名前</p>
                        </div>
                    </div>
    
                    <div class="form-content">
                        <div class="form-content-head">
                          <p>【グループ名】</p>
                        </div>
                        <div class="form-content-body">
                          <p>〇〇会社</p>
                        </div>
                    </div>
    
                    <div class="form-content">
                        <div class="form-content-head">
                          <p>【所属】</p>
                        </div>
                        <div class="form-content-body">
                          <p>〇〇部</p>
                        </div>
                    </div>
    
                    <div class="form-content">
                        <div class="form-content-head">
                          <p>【誕生日】</p>
                        </div>
                        <div class="form-content-body">
                          <p>1992-12-24</p>
                        </div>
                    </div>
    
                    <div class="form-content">
                        <div class="form-content-head">
                          <p>【趣味】</p>
                        </div>
                        <div class="form-content-body">
                          <p>バドミントン</p>
                        </div>
                    </div>
                    
                    <div class="form-content">
                        <div class="form-content-head">
                          <p>【出身】</p>
                        </div>
                        <div class="form-content-body">
                          <p>東京</p>
                        </div>
                    </div>
    
                    <div class=login-form>
                        <p>メモ</p>
                        <p>(Ajax通信でメモ丁の編集ができるようにしたい、、、)</p>
                    </div>

                </div>

            </div>
            
            <div class=url>
                  <p class=url-path><a href="{{url('/toppage')}}">トップページへ</a></p>
                  <p class=url-path><a href="{{url('/clients/client_profile_edit')}}">クライアント情報を編集する</a></p>   
                  <p class=url-path><a href="{{url('/profile_quiz')}}">プロフィールクイズをする</a></p>       
            </div>
        </div>
      </div>
    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->