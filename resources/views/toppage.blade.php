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
            <div class=client>
                <p><a href="{{url('/clients/profile')}}">Aさん</a></p>
            </div>
            <div class=user>
                <p><a href="{{url('/users/profile')}}">Bさん</a></p>
            </div>
        </div>
        <p>マイページは<a href="{{url('/users/profile')}}">こちら</a></p>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->
