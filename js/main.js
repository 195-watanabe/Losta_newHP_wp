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

// Google Map
function initMap() {
  var latlng = new google.maps.LatLng( 35.55330126959252, 139.61958645714833 );//中心の緯度, 経度
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 18,//ズームの調整
    center: latlng,//上で設定した中心
    streetViewControl: false,
    mapTypeControl: false,
    zoomControl: false,
    fullscreenControl: false,
  });
  
  //マーカーの設定
  var marker = new google.maps.Marker({
    position: latlng,
    map: map,
    icon: new google.maps.MarkerImage(
      '../img/icon_map.png',//マーカー画像URL
      new google.maps.Size(80, 80),//マーカー画像のサイズ
      new google.maps.Point(0, 0),//マーカー画像表示の起点（変更しない）
    ),  
  });
  //彩度の設定
var mapStyle = [{
    "stylers": [{
    "saturation": -100 //彩度を無しにしている
}]
}];
var mapType = new google.maps.StyledMapType(mapStyle);
    map.mapTypes.set( 'GrayScaleMap', mapType);
    map.setMapTypeId( 'GrayScaleMap' );
}

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