// scrollify設定
let windowWidth = $(window).width();

if(windowWidth >= 769){ // scrollifyはPCにのみ適用
	$.scrollify({
		section:".scroll",
		scrollSpeed: 1000, // 1秒で移動
		before:function(i,sec){ //スクロール前に実行する処理。iはセクションのインデックス番号
			current = i
			$('.scroll.active').removeClass('active'); //移動前のページに.activeを削除
			$('.scroll').eq(i).addClass('active'); // 移動後のページに.activeを付与
			$('#mv__nav li.current').removeClass('current'); //左下のナビゲーションの.currentの調整
			$('#mv__nav li').eq(i).addClass('current');
		},    
		afterRender: function () { //Scrollifyが初めて実行された後に実行する処理
			$('.scroll:first-of-type').addClass('active'); 
			$('#mv__nav li:first-of-type').addClass('current'); //topのナビゲーションに.currentを付与
		},  
	});
}

// トップページのSPビューでの表示調整
const Top = document.getElementById('top');

if (Top != null) {
	if(windowWidth < 769){
		let topHeight = window.innerHeight ? window.innerHeight : $(window).innerHeight();
		$('#top').css('height', topHeight + 'px'); // SPの場合トップはinnerheightを取得して入力
		Top.classList.add('active');
		$(function(){
			$(window).scroll(function (){
				scroll_effect();
			});
		});
		
		function scroll_effect(){
			let tt = $(window).scrollTop();
			let hh = $(window).height();
			$('.scroll').each(function(){
				var yy = $(this).offset().top+200;
				if (tt > yy - hh){
					$(this).addClass('active');
				}
			});
		}

	}
}

// topページのモーダル
const modalOpen = document.getElementById('modalOpen');
const modalClose = document.getElementById('modalClose');

// TOPのmessageをクリックするとモーダル表示
if (modalOpen != null) {
	modalOpen.addEventListener('click', function(e) {
		e.preventDefault();
		document.getElementById('mv__modal').classList.add('active');
	})
}
// Xを押すとモーダル非表示
if (modalClose != null) {
	modalClose.addEventListener('click', function(e) {
		e.preventDefault();
		document.getElementById('mv__modal').classList.remove('active');
	})
}

// ハンバーガーメニュー表示/非表示の切り替え
const navButton = document.getElementById('nav__button');
const nav = document.getElementById('nav');

navButton.addEventListener('click', function() {
		this.classList.toggle('active');
		nav.classList.toggle('active');
})

// IDリンクへのスクロールイベント
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

if (windowWidth >= 769) { //PCビューのみ適用
	$('.memberPic__img').hover( //各メンバーのクリックエリアをホバーしたらmemberに応じたクラスを付与

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

// プロジェクトストーリーとエントリーのヘッダーの影
function FixedAnime() {
	// if (is_front_page()) return;
	let headerH = $('.header__fix').outerHeight(true);
	let scroll = $(window).scrollTop();
	if (scroll >= headerH){
			$('.header__fix').addClass('shadow');
		}else{
			$('.header__fix').removeClass('shadow');
		}
}

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

$(function () {
  // メイン画像のオプション
  $(".slider-pc1").slick({
    autoplay: true, // 自動再生ON
    arrows: true, // 矢印非表示
    asNavFor: ".thumbnail1", // サムネイルと同期
		pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
  });
  // サムネイルのオプション
  $(".thumbnail1").slick({
    slidesToShow: 3, // サムネイルの表示数
		arrows: false,
    asNavFor: ".slider-pc1", // メイン画像と同期
    focusOnSelect: true, // サムネイルクリックを有効化
  });

	// メイン画像のオプション
  $(".slider-pc2").slick({
    autoplay: true, // 自動再生ON
    arrows: true, // 矢印非表示
    asNavFor: ".thumbnail2", // サムネイルと同期
		pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
  });
  // サムネイルのオプション
  $(".thumbnail2").slick({
    slidesToShow: 3, // サムネイルの表示数
		arrows: false,
    asNavFor: ".slider-pc2", // メイン画像と同期
    focusOnSelect: true, // サムネイルクリックを有効化
  });

	// メイン画像のオプション
  $(".slider-pc3").slick({
    autoplay: true, // 自動再生ON
    arrows: true, // 矢印非表示
    asNavFor: ".thumbnail3", // サムネイルと同期
		pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
  });
  // サムネイルのオプション
  $(".thumbnail3").slick({
    slidesToShow: 3, // サムネイルの表示数
		arrows: false,
    asNavFor: ".slider-pc3", // メイン画像と同期
    focusOnSelect: true, // サムネイルクリックを有効化
  });

	// メイン画像のオプション
  $(".slider-pc4").slick({
    autoplay: true, // 自動再生ON
    arrows: true, // 矢印非表示
    asNavFor: ".thumbnail4", // サムネイルと同期
		pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
  });
  // サムネイルのオプション
  $(".thumbnail4").slick({
    slidesToShow: 3, // サムネイルの表示数
		arrows: false,
    asNavFor: ".slider-pc4", // メイン画像と同期
    focusOnSelect: true, // サムネイルクリックを有効化
  });

	// メイン画像のオプション
  $(".slider-pc5").slick({
    autoplay: true, // 自動再生ON
    arrows: true, // 矢印非表示
    asNavFor: ".thumbnail5", // サムネイルと同期
		pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
  });
  // サムネイルのオプション
  $(".thumbnail5").slick({
    slidesToShow: 3, // サムネイルの表示数
		arrows: false,
    asNavFor: ".slider-pc5", // メイン画像と同期
    focusOnSelect: true, // サムネイルクリックを有効化
  });

	// メイン画像のオプション
  $(".slider-pc6").slick({
    autoplay: true, // 自動再生ON
    arrows: true, // 矢印非表示
    asNavFor: ".thumbnail6", // サムネイルと同期
		pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
  });
  // サムネイルのオプション
  $(".thumbnail6").slick({
    slidesToShow: 3, // サムネイルの表示数
		arrows: false,
    asNavFor: ".slider-pc6", // メイン画像と同期
    focusOnSelect: true, // サムネイルクリックを有効化
  });
});


// トップページ1枚目のスライドショー
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

