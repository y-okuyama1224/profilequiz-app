@extends('layouts.base')
@section('js')
<script src="../js/page.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
    <main>

      <div class="wrapper">
        <div class="contents">
        @csrf
        <form action="{{url('/update')}}">
            <div class="profile-contents">

              <div class="profile-content">
                    <div class="profile-head">
                      <p>【氏名】</p>
                    </div>
                    <div class="profile-body">
                      <input type="text" name="family-name">苗字</input>
                      <input type="text" name="name">名前</input>
                    </div>
                </div>
                
                <div class="profile-content">
              
                    <div class="profile-head">
                      <p>【グループ名】</p>
                    </div>
                    <div class="profile-body">
                      <p>〇〇会社</p>
                    </div>
                 </div>
                
                <div class="profile-content">
                    <div class="profile-head">
                      <p>【所属】</p>
                    </div>
                    <div class="profile-body">
                      <input type="text" name="departure"></input>
                    </div>
                </div>
                
                <div class="profile-content">
                    <div class="profile-head">
                      <p>【誕生日】</p>
                    </div>
                    <div class="profile-body">
                      <input type="int" name="birthday"></input>
                    </div>
                </div>
                
                <div class="profile-content">
                    <div class="profile-head">
                      <p>【趣味】</p>
                    </div>
                    <div class="profile-body">
                      <input type="text" name="hobby"></input>
                    </div>
                </div>
              
                <div class="profile-content">
                    <div class="profile-head">
                      <p>【出身】</p>
                    </div>
                    <div class="profile-body">
                      <input type="text" name="comefrom"></input>
                    </div>
                </div>
                  <p><a href="{{url('/update')}}">編集を完了する</a></p>     
              </div>
              </div>
            </form>   
        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->