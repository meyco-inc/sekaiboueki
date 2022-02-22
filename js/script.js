// scrollify設定
let windowWidth = $(window).width();

// ループを開始
let loopTime = 6000;
// loop = setInterval(function() {
// 	$.scrollify.next();
// }, loopTime)

//ページをスクロールするたびにループ処理を最初から開始する。最後のページならループを停止
function resetInterval() {
	window.clearInterval(loop);
	$('#mv__gaugeBefore').removeClass('active');
	$('#mv__gaugeBefore')[0].offsetWidth = $('#mv__gaugeBefore')[0].offsetWidth;
	$('#mv__gaugeBefore').addClass('active');
	loop = setInterval(function() {
		i = $.scrollify.current().index();
		if (i == 4) {
			window.clearInterval(loop);
			$('#mv__gaugeBefore').removeClass('active');
		} else {
			$.scrollify.next();
		}
	}, loopTime)
}

// ループの停止処理
function stopInterval() {
	window.clearInterval(loop);
	i = $.scrollify.current().index();
	$('.scroll').eq(i).removeClass('active');
	$('#mv__gaugeBefore').removeClass('active');
}

// ループの再開処理
function startInterval() {
	i = $.scrollify.current().index();
	$('.scroll').eq(i).addClass('active');
	$('#mv__gaugeBefore').addClass('active');
	// loop = setInterval(function() {
	// 	$.scrollify.next();
	// }, loopTime)
}

$.scrollify({
	section:".scroll",
	scrollSpeed: 1000,
	before:function(i,sec){ //スクロール前に実行する処理。iはセクションのインデックス番号
		current = i
		$('.scroll.active').removeClass('active'); //ページのactiveクラス調整
		$('.scroll').eq(i).addClass('active');
		$('#mv__nav li.current').removeClass('current'); //navのcurrentクラス調整
		$('#mv__nav li').eq(i).addClass('current');
		// $('#mv__gaugeBefore').text(gaugeBefore[i]); //ゲージの番号変更
		// resetInterval();
	},    
	afterRender: function () { //Scrollifyが初めて実行された後に実行する処理
		$('.scroll:first-of-type').addClass('active'); 
		$('#mv__nav li:first-of-type').addClass('current'); //topのナビゲーションに.currentを付与
		$('#mv__nav li').each(function(i){
			$(this).on('click',function(){
				$.scrollify.move(i); //クリックしたインデックス番号まで移動
			});
		});
	},  
});

// トップページのSPビューでの表示調整
// const Top = document.getElementById('top');

// if (Top != null) {
// 	if(windowWidth <= 768){
// 		$.scrollify.disable();
// 		Top.classList.add('active');
// 		$(function(){
// 			$(window).scroll(function (){
// 				scroll_effect();
// 			});
// 		});
		
// 		function scroll_effect(){
// 			let tt = $(window).scrollTop();
// 			let hh = $(window).height();
// 			$('.scroll').each(function(){
// 				var yy = $(this).offset().top+200;
// 				if (tt > yy - hh){
// 					$(this).addClass('active');
// 				}
// 			});
// 		}

// 	}
// }

// topページのモーダル
const modalOpen = document.getElementById('modalOpen');
const modalClose = document.getElementById('modalClose');

if (modalOpen != null) {
	modalOpen.addEventListener('click', function(e) {
		e.preventDefault();
		document.getElementById('mv__modal').classList.add('active');
		if (windowWidth >= 769) {
			// stopInterval();
		}
	})
}

if (modalClose != null) {
	modalClose.addEventListener('click', function(e) {
		e.preventDefault();
		document.getElementById('mv__modal').classList.remove('active');
		if (windowWidth >= 769) {
			// startInterval();
		}
	})
}

// グローバルナビゲーション表示
const navButton = document.getElementById('nav__button');
const nav = document.getElementById('nav');
const mvGaugeBefore = document.getElementById('mv__gaugeBefore');
let switch_flg = true;

navButton.addEventListener('click', function() {
	if (switch_flg) {
		this.classList.toggle('active');
		nav.classList.toggle('active');
		if (windowWidth >= 769) {
			// mvGaugeBefore.classList.toggle('active');
			// stopInterval();
		}
		switch_flg = false;
	} else {
		this.classList.toggle('active');
		nav.classList.toggle('active');
		if (windowWidth >= 769) {
			// mvGaugeBefore.classList.toggle('active');
			// startInterval();
		}
		switch_flg = true;
	}
	
})

// IDへのクリックイベント
$(function(){
	$('a[href^="#"]').click(function(){
		let speed = 1000;
		let href= $(this).attr("href");
		let target = $(href == "#" || href == "" ? 'html' : href);
		let position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		navButton.classList.remove('active');
		nav.classList.remove('active');
		return false;
	});
});

// topページのmemberアニメーション

if (windowWidth >= 769) {
	$('.memberPic__img').hover(

		function(e) {
			let i = $(this).parent().index() + 1;
			$(this).parent().parent().parent().addClass('member' + i);
		},
		function(e) {
			let i = $(this).parent().index() + 1;
			$(this).parent().parent().parent().removeClass('member' + i);
		}
	)
}

// インタビューページの横スクロール
$(function(){
	// スクロール後の位置
	let moving;
	// スクロール後の位置+余韻の距離
	let aftermov;
	// 余韻の距離
	let after = 200;
	// 1スクロールの移動距離
	let speed = 30;
	// アニメーション
	let animation = 'easeOutCirc';
	// アニメーションスピード
	let anm_speed = 500;
	// 前回のスクロール位置
	let lastmov = 0;
	$('.interview__slider').mousewheel(function(event, mov) {
			//  スクロール後の位置の算出
			let moving = $(this).scrollLeft() - mov * speed;
			// スクロールする
			$(this).scrollLeft(moving);
			// 余韻の計算
			if (mov < 0) {
					// 下にスクロールしたとき
					aftermov =  moving + after;
			} else {
					// 上にスクロールしたとき
					aftermov =  moving - after;
			}
			// 横スクロールの終端まで来たら、縦スクロールに切り替える処理
			// スクロール位置が前回の位置と同じかどうかチェックし
			// 同じだったら、縦スクロールする
			// 違うなら、横スクロールする
			if(lastmov == aftermov) {
					// 縦スクロール
					return true;
			} else {
					// 余韻アニメーション
					$(this).stop().animate({scrollLeft: aftermov}, anm_speed, animation);
					lastmov = aftermov;
					// 縦スクロールさせない
					return false;
			}
	});
});

// 下層ページのフェードアニメーション
const fadeLoad = document.querySelectorAll('.fade-load');
if (fadeLoad != null) {
	document.querySelectorAll('.fade-load').forEach(element => {
		window.addEventListener('load', function() {
			setTimeout(function() {
				element.classList.add('done')
			}, 100) 
		})
	})
}

// 下層ページのスクロールアニメーション
const scrollUp = document.querySelectorAll('.scroll-up');
if (scrollUp != null) {
	document.querySelectorAll('.scroll-up').forEach(element => {
		window.addEventListener('scroll', function() {
		
			const innerH = window.innerHeight;
			const adjust = 100
			const targetTop = element.getBoundingClientRect().top + adjust;
			if (innerH > targetTop) {
				element.classList.add('done');
			}

		})
	})
}

// プロジェクトストーリーのヘッダーの影
$('.page-template-page-story .header__fix')

function FixedAnime() {
	let headerH = $('.page-template-page-story .header__fix').outerHeight(true);
	let scroll = $(window).scrollTop();
	if (scroll >= headerH){
			$('.page-template-page-story .header__fix').addClass('shadow');
		}else{
			$('.page-template-page-story .header__fix').removeClass('shadow');
		}
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
	FixedAnime();
});

// about usページのモーダル
$('.modalOpen').on('click', function() {
	$(this).addClass('active');
})
$('.modalClose').on('click', function() {
	$(this).parent().parent().removeClass('active');
	return false;
})
$('.modal__mask').on('click', function() {
	$(this).parent().parent().removeClass('active');
	return false;
})

// about usページのofficeのslick
$(function(){
	$('.slider').slick({
	})
})

// トップページのスライドショー
$slideImg = $('#top__slideshow img')
let i = 1;
let j = 0;
const gaugeBefore = ['01', '02', '03', '04', '05'];
$slideImg.eq(0).addClass('active');
$('#mv__gaugeBefore').addClass('active');


function slideSwitch() {
	$slideImg.eq(j).removeClass('active previous');
	j = i - 1;
	if (i == 0) {
		j = 4;
	}
	$slideImg.eq(j).addClass('previous');
	$slideImg.eq(i).addClass('active');
	$('#mv__gaugeBefore').text(gaugeBefore[i]); //ゲージの番号変更
	i++;
	if (i == 5) {
		i = 0;
	}

}

setInterval('slideSwitch()', 5000);

// const intervalId = setInterval(() =>{
// 	slideSwitch();
// 	if(i > 5){　
// 		clearInterval(intervalId);
// 		$('#mv__gaugeBefore').removeClass('active');
// 	}
// }, 5000);
	
