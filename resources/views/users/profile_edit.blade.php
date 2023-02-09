@extends('layouts.base')
@section('js')
<script src="../js/page.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
    <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">プロフィール編集</h3></div>
    </div>
    <main>

      <div class="wrapper">
        <div class="contents">
        @csrf
        <form class="login-form" action="{{url('/update')}}">
            <div class="form-contents">
            <h4>プロフィール編集</h4>

                <div class="form-content">
                    <div class="form-content-head">
                      <p><img src="{{asset('storage/nami.png')}}"></p>
                    </div>
                    <div class="form-content-head">
                      <p>プロフィール画像を変える</p>
                    </div>
                    <div class="form-content-body">  
                      <input type="file" name="profile-image"  id="upfile">
                    </div>
                    <img id="upimage">
                </div>

                <div class="form-content">
                    <div class="form-content-head">
                      <p>【氏名】</p>
                    </div>
                    <div class="form-content-body">
                      <p>苗字 名前</p>
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
                      <input type="text" name="departure"></input>
                    </div>
                </div>
                
                <div class="form-content">
                    <div class="form-content-head">
                      <p>【誕生日】</p>
                    </div>
                    <div class="form-content-body">
                      <input type="int" name="birthday"></input>
                    </div>
                </div>
                
                <div class="form-content">
                    <div class="form-content-head">
                      <p>【趣味】</p>
                    </div>
                    <div class="form-content-body">
                      <input type="text" name="hobby"></input>
                    </div>
                </div>
              
                <div class="form-content">
                    <div class="form-content-head">
                      <p>【出身】</p>
                    </div>
                    <div class="form-content-body">
                      <input type="text" name="comefrom"></input>
                    </div>
                </div>

                <p class=form-content id=submit>
                    <button type="submit" name="button" id="submit-btn" onclick="validation()">編集する</button>
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