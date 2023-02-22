@extends('layouts.base')
@section('js')
<link rel="stylesheet" type="text/css" href="..\css\base.css">
<script src="{{ asset('js/fadein.js') }}"></script>

@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
    <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">トップページ</h3></div>
    </div>
    <main>

      <div class="wrapper">
        <div class="contents">

            <div class=persons>

                <h4>クライアント</h4>
                <ul class=person-contents>
                    <li class=person-content>
                      <p><a href="{{url('/clients/profile')}}"><img src="{{asset('storage/lufy.png')}}">Aさんのプロフィール</a></p>
                    </li>
                    <li class=person-content>
                      <p><a href="{{url('/clients/profile')}}"><img src="{{asset('storage/zoro.png')}}">Bさんのプロフィール</a></p>
                    </li>
                </ul>

                <h4>メンバー</h4>
                <ul class=person-contents>
                    <li class=person-content>
                      @foreach($users as $user)
                        <p>
                          <a href="{{$user}}/profile"><img src="{{$user->profile_image}}">
                             {{$user->family_name}}{{$user->name}}さんのプロフィール
                          </a>
                        </p>
                      @endforeach
                    </li>
                </ul>
                
            </div>
        </div>

        <div class=url>
            <p class=url-path><a href="{{route('user_show)}}">マイページへ</a></p>
            <p class=url-path><a href="{{url('/clients/client_profile_insert')}}">クライアントを登録する</a></p>
        </div>

        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
