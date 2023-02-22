@extends('layouts.base')
@section('js')
<script src="../js/page.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
    <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">マイページ</h3></div>
    </div>
    <main>

      <div class="wrapper">
        <div class="contents">

          <div class=login-form> 
            <div class="form-contents">

                <div class="form-content">
                    <div class="form-content-head">
                    @if (Auth::user()->profile_image == null)
                      <p>プロフィール画像を登録してください</p>
                    @else
                    <p><img src="{{ Auth::user()->profile_image }}"></p>
                    @endif
                    </div>
                </div>

                <div class="form-content">
                    <div class="form-content-head">
                      <p>【氏名】</p>
                    </div>
                    <div class="form-content-body">
                      <p>{{ Auth::user()->family_name }} {{ Auth::user()->name."さん" }}</p>
                    </div>
                </div>

                <div class="form-content">
                    <div class="form-content-head">
                      <p>【グループ名】</p>
                    </div>
                    <div class="form-content-body">
                    @if (Auth::user()->group_id == null)
                      <p>グループを登録してください</p>
                    @else
                      <p>{{ Auth::user()->group_id }}</p>
                    @endif
                    </div>
                </div>

                  <div class="form-content">
                      <div class="form-content-head">
                        <p>【所属】</p>
                      </div>
                      <div class="form-content-body">
                        <p>
                        @if (Auth::user()->department == null)
                          <p>所属を登録してください</p>
                        @else
                          <p>{{ Auth::user()->department }}</p>
                        @endif
                        </p>
                      </div>
                  </div>

                <div class="form-content">
                    <div class="form-content-head">
                      <p>【誕生日】</p>
                    </div>
                    <div class="form-content-body">
                      <p>
                      @if (Auth::user()->birthday == null)
                        <p>誕生日を登録してください</p>
                      @else
                        <p>{{ Auth::user()->birthday }}</p>
                      @endif
                      </p>
                    </div>
                </div>

                <div class="form-content">
                    <div class="form-content-head">
                      <p>【趣味】</p>
                    </div>
                    <div class="form-content-body">
                      <p>
                      @if (Auth::user()->hobby == null)
                        <p>趣味を登録してください</p>
                      @else
                        <p>{{ Auth::user()->hobby }}</p>
                      @endif
                      </p>
                    </div>
                </div>
                
                <div class="form-content">
                    <div class="form-content-head">
                      <p>【出身】</p>
                    </div>
                    <div class="form-content-body">
                      <p>
                      @if (Auth::user()->comefrom == null)
                        <p>出身地を登録してください</p>
                      @else
                        <p>{{ Auth::user()->comefrom }}</p>
                      @endif
                      </p>
                    </div>
                </div>

            </div>

          </div> 
          <div class=url>
              <p class=url-path><a href="{{url('/toppage')}}">トップページへ</a></p>
              @if (Auth::user()->role == 0 and Auth::user()->group_id == null)
                <p class=url-path><a href="{{route('get_group')}}">グループを登録する</a></p>
              @endif              
              <p class=url-path><a href="{{url('/users/profile_edit')}}">プロフィール編集する</a></p>   
              <p class=url-path><a href="{{url('/profile_quiz')}}">プロフィールクイズをする</a></p>       
          </div>
        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->