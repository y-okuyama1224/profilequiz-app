@extends('layouts.base')
@section('js')
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
    <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">クライアント情報登録</h3></div>
    </div>
    <main>

      <div class="wrapper">
        <div class="contents">
        @csrf
        
        <form class=login-form action="{{url('/clients/client_profile_register')}}">
            <div class="form-contents">
              <h4>クライアント情報登録</h4>
    
                <div class="form-content">
                    <div class="form-content-head">
                      <p>プロフィール画像をアップロードする</p>
                    </div>
                    <div class="form-content-body">  
                      <input type="file" name="profile-image"  id="upfile">
                    </div>
                    <img id="upimage">
                </div>

                <div class="form-content-content">
                    <div class="profile-head">
                      <p>【氏名】</p>
                    </div>
                    <div class="form-content-body">
                      <input type="text" name="family-name" placeholder="鈴木" required></input>
                      <input type="text" name="name" placeholder="次郎" required></input>
                    </div>
                </div>
                
                <div class="form-content">
                    <div class="form-content-head">
                      <p>【所属】</p>
                    </div>
                    <div class="form-content-body">
                      <input type="text" name=company placeholder="△△会社営業部"></input>
                    </div>
                 </div>
                
                <div class="form-content">
                    <div class="form-content-head">
                      <p>【誕生日】</p>
                    </div>
                    <div class="form-content-body">
                      <input type="int" name="birthday" placeholder="YYYYMMDD"></input>
                    </div>
                </div>
                
                <div class="form-content">
                    <div class="form-content-head">
                      <p>【趣味】</p>
                    </div>
                    <div class="form-content-body">
                      <input type="text" name="hobby" placeholder="ラーメン屋さんめぐり"></input>
                    </div>
                </div>
              
                <div class="form-content">
                    <div class="form-content-head">
                      <p>【出身】</p>
                    </div>
                    <div class="form-content-body">
                      <input type="text" name="comefrom" placeholder="東京"></input>
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
    </main>
  </body>
</html>
<script src="{{ asset('js/preview.js') }}"></script>

@endsection
<!--ここまでがtoppageの範囲 -->