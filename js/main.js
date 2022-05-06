// HEADER
//ハンバーガーメニュー
$(".openbtn").click(function () {//ボタンがクリックされたら
  $(this).toggleClass('_active');//ボタン自身に activeクラスを付与し
    $(".gnav").toggleClass('_active');//ナビゲーションにpanelactiveクラスを付与
    
});

$(".gnav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('_active');//ボタンの activeクラスを除去し
    $(".gnav").removeClass('_active');//ナビゲーションのpanelactiveクラスも除去
});

// スクロールするとTOPボタンが現れる
$(window).scroll(function () {
  if($(window).scrollTop() > 400) {
    $('.scrolldown').addClass('_hidden');
    $('.topbtn').removeClass('_hidden');
  } else {
    $('.scrolldown').removeClass('_hidden');
    $('.topbtn').addClass('_hidden');
  }
});

// TOPのFV
// eachTextAnimeにappeartextというクラス名を付ける定義
// function EachTextAnimeControl() {
//   $('.fvtxt1').each(function () {
//     var elemPos = $(this).offset().top - 50;
//     var scroll = $(window).scrollTop();
//     var windowHeight = $(window).height();
//     if (scroll >= elemPos - windowHeight) {
//       $(this).addClass("appeartext");
//       $('.fvtxt2').delay(2200).queue(function(){
//     $(this).addClass('appeartext');
// })

//     } else {
//       $(this).removeClass("appeartext");
//     }
//   });
// }

// $(window).on('load', function () {
//   //spanタグを追加する
//   var element = $(".fv_heading");
//   element.each(function () {
//     var text = $(this).text();
//     var textbox = "";
//     text.split('').forEach(function (t, i) {
//       if (t !== " ") {
//         if (i < 10) {
//           textbox += '<span style="animation-delay:.' + i + 's;">' + t + '</span>';
//         } else {
//           var n = i / 15;
//           textbox += '<span style="animation-delay:' + n + 's;">' + t + '</span>';
//         }

//       } else {
//         textbox += t;
//       }
//     });
//     $(this).html(textbox);
//   });

//   EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
// });


// TOPのAboutの背景の線の動き
var $target = $('.about_line');//アニメーションさせたい要素
var offset = 100;//アニメーションタイミング

$(window).on('scroll', function() {//スクロールしたとき

  var scroll = $(window).scrollTop();//スクロール量を取得
  var h = $(window).height();//画面の高さを取得

  $target.each(function() {
    var pos = $(this).offset().top;//アニメーションさせたい要素の位置を取得
    if (scroll > pos - h + offset) {//スクロール量 > アニメーションさせたい要素の位置
      $(this).addClass('is-animated');
    }
  })

}).trigger('scroll');



//線が伸びるための設定を関数でまとめる
function ScrollTimelineAnime(){
  $('.process_container li').each(function(){// それぞれのli要素の
    var elemPos = $(this).offset().top;// 上からの高さ取得
    var scroll = $(window).scrollTop();// スクロール値取得
    var windowHeight = $(window).height();// windowの高さ取得
    var startPoint = 400; //線をスタートさせる位置を指定※レイアウトによって調整してください
    if (scroll >= elemPos - windowHeight-startPoint){       
      var H = $(this).outerHeight(true)//liの余白と高さを含めた数値を取得
      //スクロール値から要素までの高さを引いた値を、liの高さの半分のパーセントで出す
      var percent = (scroll+startPoint - elemPos) / (H/2) *100;//liの余白と高さの半分で線を100％に伸ばす

      // 100% を超えたらずっと100%を入れ続ける
      if(percent  > 100){
        percent  = 100;
      }
      // ボーダーの長さをセット
      $(this).children('.border-line').css({
        height: percent + "%", //CSSでパーセント指定
      });
    } 
  });
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).on('scroll', function(){
  ScrollTimelineAnime();// 線が伸びる関数を呼ぶ
});


// CSS変数
const setFillHeight = () => {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
}

// 画面のサイズ変動があった時に高さを再計算する
window.addEventListener('resize', setFillHeight);

// 初期化
setFillHeight();

// アーカイブページの挙動
$(function () {
  $ (".tabcontent:not('._active + .tabcontent')").hide();        
  $("._menu").hover(function(){
    $ (this).addClass("_hover")
  },
  function(){
    $(this).removeClass("_hover")
  });
  $ ("._menu").click(function(){
    $("._menu").removeClass("_active");
    $ (this).addClass("_active");
    $(".tabcontent:not('._active + .tabcontent')").fadeOut();
    $("._active + .tabcontent").fadeIn();
    var calcHeight = $("._active + .tabcontent").outerHeight() + 160;
    $('._content').height(calcHeight + 'px');
  });
});

// ページネーション
$(function() {
	$('.work_article').paginathing({//親要素のclassを記述
    perPage: 6,//1ページあたりの表示件数
		prevText:'PREV',//1つ前のページへ移動するボタンのテキスト
		nextText:'NEXT',//1つ次のページへ移動するボタンのテキスト
    activeClass: 'active',//現在のページ番号に任意のclassを付与できます
    firstLast: false,
	})
});

// ページネーション
$(function() {
	$('.topics_article').paginathing({//親要素のclassを記述
    perPage: 6,//1ページあたりの表示件数
		prevText:'PREV',//1つ前のページへ移動するボタンのテキスト
		nextText:'NEXT',//1つ次のページへ移動するボタンのテキスト
    activeClass: 'active',//現在のページ番号に任意のclassを付与できます
    firstLast: false,
	})
});
