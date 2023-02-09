@extends('layouts.base')
@section('js')
<script src="../js/page.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\base.css">
@endsection

<!--ここからtoppageの範囲 -->
@section('main')
  <body>
  <div class=page>
      <div class="bgextend bgLRextend"><h3 class="bgappear">プロフィールクイズ</h3></div>
    </div>
    <main>

      <div class="wrapper">
        <div class="contents">

          <form class=login-form action="{{url('/answer')}}">
            <div class=form-contents>

              <div class=form-content>
                <div class=form-content-head>
                  <p>Q1</p>
                  <p>Cさんはどれ？</p>
                </div>
                <div form-content-body>
                  <p>a:<img src="{{asset('storage/lufy.png')}}"></p>
                  <p>b:<img src="{{asset('storage/zoro.png')}}"></p>
                  <p>c:<img src="{{asset('storage/nami.png')}}"></p>
                </div>
              </div>

              <div class=form-content>
                <div class=form-content-head>
                  <p>Q2</p>
                  <p>Cさんの趣味はどれ？</p>
                </div>
                <div form-content-body>
                  <p>a: 読書</p>
                  <p>b: 映画鑑賞</p>
                  <p>c: バドミントン</p>
                </div>
              </div>

              <div class=form-content>
                <div class=form-content-head>
                  <p>Q3</p>
                  <p>Cさんの出身は？</p>
                </div>
                <div form-content-body>
                  <p>a: 東京</p>
                  <p>b: 北海道</p>
                  <p>c: 沖縄</p>
                </div>
              </div>
              
              <p class=form-content id=submit>
                <button type="submit" name="button" id="submit-btn" onclick="validation()">回答する</button>
              </p>

            </div>
          </form>

 
        </div>
      </div>

    </main>
  </body>
</html>
@endsection
<!--ここまでがtoppageの範囲 -->