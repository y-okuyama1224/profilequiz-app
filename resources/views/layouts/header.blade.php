<body>
  <header>
    <div class="header-wrapper">
      <a  href="{{url('/toppage')}}"><h1>プロフィールクイズ</h1></a>


      <div class="openbtn"><span></span><span></span><span></span></div>
        <nav id="g-nav">
          <div id="g-nav-list">
            <ul class=gnavi>
              <li class=scroll-location><a href="{{url('/toppage')}}">トップページ</a></li>
              <li class=scroll-location><a href="{{url('/users/profile')}}">マイページ</a></li>
              <li class=scroll-location><a href="{{url('/clients/client_profile_insert')}}">クライアント登録</a></li>
              <li><a href="{{url('/users/signup')}}">新規登録</a></li>
              <li><a href="{{url('/users/login')}}">ログイン</a></li>
              <li><a href="{{url('/users/logout')}}">ログアウト</a></li>
            </ul>
          </div>
        </nav>
      </div>  
      <div class="wave">
        <canvas id="waveCanvas"></canvas>
        </div>
      <script src="{{ asset('js/wave.js') }}"></script>
  </header>

  