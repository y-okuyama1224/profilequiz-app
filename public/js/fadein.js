window.addEventListener('DOMContentLoaded', (event) =>{  // クラスを追加するwindowの位置を設定
  var scrollTop = $(this).scrollTop();
  var scrollBottom = scrollTop + $(this).height();
  var effectPos = scrollBottom - 50;
  
  // eachでliを順番に処理
  $("li").each(function (i) {
      if(effectPos > $(this).offset().top){
          var that = this;

          // 0.2s毎にずれて表示
          setTimeout(function () {
             $(that).addClass("fadein");
          }, 200 * i);
      }
  });
});