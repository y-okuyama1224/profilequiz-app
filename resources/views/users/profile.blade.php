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
            <div class="profile-contents">

                <div class="profile-content">
                    <div class="profile-head">
                      <p>【氏名】</p>
                    </div>
                    <div class="profile-body">
                      <p>苗字</p><p>名前</p>
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
                      <p>〇〇部</p>
                    </div>
                </div>

                <div class="profile-content">
                    <div class="profile-head">
                      <p>【誕生日】</p>
                    </div>
                    <div class="profile-body">
                      <p>1992-12-24</p>
                    </div>
                </div>

                <div class="profile-content">
                    <div class="profile-head">
                      <p>【趣味】</p>
                    </div>
                    <div class="profile-body">
                      <p>バドミントン</p>
                    </div>
                </div>
                
                <div class="profile-content">
                    <div class="profile-head">
                      <p>【出身】</p>
                    </div>
                    <div class="profile-body">
                      <p>東京</p>
                    </div>
                </div>

            </div>
            <p>トップページは<a href="{{url('/toppage')}}">こちら</a></p>
            <p><a href="{{url('/users/profile_edit')}}">プロフィール編集する</a></p>   
            <p><a href="{{url('/profile_quiz')}}">プロフィールクイズをする</a></p>       
        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->