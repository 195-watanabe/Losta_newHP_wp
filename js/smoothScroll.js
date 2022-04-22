
$(function(){	
	var urlHash = location.hash;
	if (urlHash) {
		window.onload = function () { // ページが読み込まれたら処理を実行する
			$("body,html").stop().scrollTop(0);
			setTimeout(function () {
				var target = $(urlHash);
				var position = target.offset().top ;
				$("body,html").stop().animate({ scrollTop: position }, 1000); // スクロール速度ミリ秒で指定
			}, 200);
		};
	}
	$('a[href^="#"]').click(function(){
    let speed = 600;
    let href= $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
	});
});