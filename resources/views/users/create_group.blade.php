@extends('layouts.base')
@section('js')
<script src="../js/page.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
    <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">グループ登録</h3></div>
    </div>
    <main>

      <div class="wrapper">
        <div class="contents">
          <form class="login-form" action="{{route('create_group')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-contents">

          <div class="form-content">
            <label for="group" class="col-md-4 col-form-label text-md-end">{{ __('グループを選択してください') }}</label>
            <div class="col-md-6">
                <p><select name="group"  class="form-control">
                @foreach($groups as $group)
                   <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
                </select></p>
            </div>
          </div>

            <p class=form-content id=submit>
                <button type="submit" name="button" id="submit-btn">登録する</button>
            </p>
          </form>
        </div>  
      </div>
    </main>
  </body>
</html>
<script src="{{ asset('js/preview.js') }}"></script>
@endsection