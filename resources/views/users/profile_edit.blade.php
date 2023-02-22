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
          <form class="login-form" action="{{route('get_update')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-contents">
            <div class="form-content">
              <div class="form-content-head">
                @if (Auth::user()->profile_image == null)
                  <p>プロフィール画像を登録してください</p>
                @else
                  <p><img src="{{Auth::user()->profile_image}}"></p>
                @endif
              </div>
              <div class="form-content-head">
                <p>プロフィール画像を変える</p>
              </div>
              <div class="form-content-body">  
                <input type="file" name="profile_image" id="upfile">
              </div>
              <img id="upimage"> 
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
              <p>
                【所属】
              @if (Auth::user()->department == null)
                所属を登録してください
              @else
                {{ Auth::user()->department }}</p>
              @endif
              </p>
            </div>
            <div class="form-content-body">
              <input type="text" name="department" value="{{ Auth::user()->department ?? '' }}">
            </div>
          </div>

          <div class="form-content">
            <div class="form-content-head">
              <p>
                【誕生日】
              @if (Auth::user()->birthday == null)
                誕生日を登録してください
              @else
                {{ Auth::user()->birthday }}</p>
              @endif
              </p>
            </div>
            <div class="form-content-body">
              <input type="date" name="birthday" value="{{ Auth::user()->birthday ?? '' }}">
            </div>
          </div>

          <div class="form-content">
            <div class="form-content-head">
              <p>
                【趣味】
              @if (Auth::user()->hobby == null)
                誕生日を登録してください
              @else
                {{ Auth::user()->hobby }}</p>
              @endif
              </p>
            </div>
            <div class="form-content-body">
              <input type="text" name="hobby" value="{{ Auth::user()->hobby ?? '' }}">
            </div>
          </div>

          <div class="form-content">
            <div class="form-content-head">
              <p>
                【出身】
              @if (Auth::user()->comefrom == null)
                出身地を登録してください
              @else
                {{ Auth::user()->comefrom }}</p>
              @endif
              </p>
            </div>
            <div class="form-content-body">
              <input type="text" name="comefrom" value="{{ Auth::user()->comefrom ?? '' }}">
            </div>
          </div>



            <p class=form-content id=submit>
                <button type="submit" name="button" id="submit-btn">編集する</button>
            </p>
          </form>
        </div>  
      </div>
    </main>
  </body>
</html>
<script src="{{ asset('js/preview.js') }}"></script>
@endsection
<!--ここまでがtoppageの範囲 -->