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
            </ul>
          </div>
        </nav>
      </div>
      @guest
          @if (Route::has('login'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
              </li>
          @endif
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name ."さん"}}
              </a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('ログアウト') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest  
      <div class="wave">
        <canvas id="waveCanvas"></canvas>
        </div>
      <script src="{{ asset('js/wave.js') }}"></script>
  </header>

  