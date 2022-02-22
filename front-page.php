<?php

/*
Template Name: トップページ
*/

get_header(); ?>

<main class="top-page" id="top">
	<!-- Top -->
	<section id="top" class="mv top scroll">
		<div id="top__slideshow" class="top__slideshow">
			<img src="<?php echo get_template_directory_uri(); ?>/img/top/mv_top.jpg" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/img/top/mv__information.jpg" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/img/top/mv_member.jpg" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/img/top/mv_top.jpg" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/img/top/mv__information.jpg" alt="">
		</div>
		<!-- <div class="top-inner"> -->
			<h2 class="mv__title">ひとつ、<br class="sp">ひとつ。</h2>
			<div>
				<a id="modalOpen" class="mv__link" href="">MESSAGE</a>
			</div>
			<div class="mv__scrollbar">
				<div class="mv__scrollbarOuter">
					<p>SCROLL DOWN</p>
				</div>
			</div>
			<div id="mv__gauge" class="mv__gauge">
				<p id="mv__gaugeBefore" class="mv__gaugeBefore">01</p>
				<p class="mv__gaugeAfter">05</p>
			</div>
		<!-- </div> -->

		<!-- Topのモーダル -->
		<div id="mv__modal" class="mv__modal">
			<div class="container">
				<div class="modal__outer">
					<h2 class="modal__title">ひとつ、<br>ひとつ。</h2>
					<div class="modal__text">
						<p>
							時代の流れと共に変わる、まちの景色。<br>
							だけど、目に見えるものだけがまちを<br class="sp">形作っているのではありません。<br>
							そこで暮らす、働く、楽しむ、くつろぐ人々の想いもまちの一部です。
						</p>
						<p>
							私たちが目指すのは、<br class="sp">広いまちづくりではなく、深いまちづくり。
						</p>
						<p>
							決して多くの建物を建ててきたわけでは<br class="sp">ありません。<br>
							でも、お客さま一人ひとりと真摯に向き合い、<br>
							地域社会の想いを大切にすることで、<br>
							ひとと、まちと深くつながってきました。
						</p>
						<p>
							ひとつの責任感ある仕事が、信頼を生む。<br>
							ひとつの果敢な挑戦が、よりよい未来をつくる。<br>
							ひとつの柔軟な発想が、ビジネスや価値を生む。
						</p>
						<p>
							私たちは、こうした「ひとつ、ひとつ。」の積み重ねが、<br class="pc">より深いまちづくりへ、豊かな社会へ、希望ある未来へ<br class="pc">つながっていくと信じています。
						</p>
						<p>
							だから、心待ちにしています。<br>
							同じ想いでつながっていける、<br class="sp">ひとつの個性との出会いを。
						</p>
					</div>
				</div>
				<a id="modalClose" class="modalClose" href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/x.svg" alt="">
				</a>
			</div>
		</div>
		<!-- Topのモーダル -->
	</section>
	<!-- Top -->

	<!-- Project Story -->
	<section id="projectStory" class="mv projectStory scroll">
		<img src="<?php echo get_template_directory_uri(); ?>/img/top/project.png" alt="project" class="mv__bgText">
		<div class="top-inner">
			<div class="text-inner">
				<p class="mv__subTitle-ja">プロジェクトストーリー</p>
				<h2 class="mv__subTitle"><span>PROJECT</span><br>STORY</h2>
				<p class="mv__text pc">
					<span>浜松町のシンボル「世界貿易センタービル」の</span><br>
					<span>建て替えを含む、浜松町駅前エリアの再開発事業。</span><br>
					<span>その初弾となる高さ約197mのオフィス棟</span><br>
					<span>「世界貿易センタービル南館」の建設プロジェクト。</span>
				</p>
				<p class="mv__text sp">
					<span>浜松町のシンボルである</span><br>
					<span>世界貿易センタービルはいかにして</span><br>
					<span>生まれたのか。</span><br>
					<span>南館ビル建設プロジェクトの</span><br>
					<span>中心メンバーに真相を迫った。</span>
				</p>
			</div>
			<div class="psImg">
				<div class="psImg__outer">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/projectstory1.jpg" alt="" class="psImg__items">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/projectstory2.jpg" alt="" class="psImg__items">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/projectstory3.jpg" alt="" class="psImg__items">
					<img src="<?php echo get_template_directory_uri(); ?>/img/top/projectstory4.jpg" alt="" class="psImg__items">
				</div>
			</div>
			<div class="mv__linkOuter">
				<a href="<?php echo home_url(); ?>/story" class="mv__link">PROJECT STORY</a>
			</div>
		</div>
	</section>
	<!-- Project Story -->

	<!-- member -->
	<section id="member" class="mv member scroll">
		<img src="<?php echo get_template_directory_uri(); ?>/img/top/member.png" alt="member" class="mv__bgText">
		<div class="memberPic__outer">
			<div class="top-inner">
				<h2 class="mv__subTitle"><span>MEMBER</span></h2>
				<p class="mv__subTitle-ja">社員紹介</p>
			</div>
			<div class="memberPic">
				<div class="memberPic__item">
					<a href="<?php echo home_url(); ?>/interview03" class="memberPic__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/top/member1_sp.jpg" alt="" class="sp">
						<div class="mv__link pc">VIEW MORE</div>
					</a>
					<div class="member__profile">
						<p class="member__detail">
							<span>TOMOYA SUZUKI / </span><br>
							DEVELOPMENT
						</p>
						<div class="member__nameDept">
							<h3 class="member__name">鈴木 智哉</h3>
							<p class="member__dept">開発企画部</p>
						</div>
					</div>
				</div>
				<div class="memberPic__item">
					<a href="<?php echo home_url(); ?>/interview02" class="memberPic__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/top/member2_sp.jpg" alt="" class="sp">
						<div class="mv__link pc">VIEW MORE</div>
					</a>
					<div class="member__profile">
						<p class="member__detail">
							<span>TOMONORI NOMURA / </span><br>
							LEASING
						</p>
						<div class="member__nameDept">
							<h3 class="member__name">野村 倫紀</h3>
							<p class="member__dept">ビル営業部</p>
						</div>
					</div>
				</div>
				<div class="memberPic__item">
					<a href="<?php echo home_url(); ?>/interview01" class="memberPic__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/top/member3_sp.jpg" alt="" class="sp">
						<div class="mv__link pc">VIEW MORE</div>
					</a>
					<div class="member__profile">
						<p class="member__detail">
							<span>KOSUKE YOSHIDA / </span><br>
							PROPERTY MANAGEMENT<br>
							PLANNING
						</p>
						<div class="member__nameDept">
							<h3 class="member__name">吉田 孝輔</h3>
							<p class="member__dept">新ビル業務推進部</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- member -->

	<!-- About Us -->
	<section id="aboutUs" class="mv aboutUs scroll">
		<img src="<?php echo get_template_directory_uri(); ?>/img/top/about.png" alt="about" class="mv__bgText">
		<div class="top-inner">
			<div class="text-inner">
				<h2 class="mv__subTitle"><span>ABOUT US</span></h2>
				<p class="mv__subTitle-ja">私たちについて</p>
				<p class="mv__text pc">
					<span>1964年に浜松町で創業し、</span><br>
					<span>常に地元と共に発展してきた当社の事業内容や特徴、</span><br>
					<span>今までのあゆみなどを紹介しています。</span>
				</p>
				<p class="mv__text sp">
					<span>私たち世界貿易センタービルディングは、</span><br>
					<span>多くの企業様に寄り添い、</span><br>
					<span>より快適な業務空間を提供できるように</span><br>
					<span>これからも貢献してまいります。</span>
				</p>
				<div class="mv__linkOuter">
					<a href="<?php echo home_url(); ?>/about" class="mv__link">ABOUT US</a>
				</div>
			</div>
		</div>
	</section>
	<!-- About Us -->

	<!-- Information -->
	<section id="information" class="mv top__information scroll">
		<img src="<?php echo get_template_directory_uri(); ?>/img/top/information.png" alt="information" class="mv__bgText pc">
		<div class="top-inner">
			<div class="text-inner">
				<h2 class="mv__subTitle"><span>INFORMATION</span></h2>
				<p class="mv__subTitle-ja">採用情報</p>
				<p class="mv__text pc">
					<span>募集要項や選考フローを紹介しています。</span><br>
					<span>世界貿易センタービルディングは同じ想いで</span><br>
					<span>つながっていける方との出会いを</span><br>
					<span>心待ちにしております。</span>
				</p>
				<p class="mv__text sp">
					<span>世界貿易センタービルディングの</span><br>
					<span>新卒採用を紹介しています。</span><br>
					<span>私たちとともに”ひとつ、ひとつ”</span><br>
					<span>積み重ね、より深いまちづくりを</span><br>
					<span>目指していただける方を</span><br>
					<span>お待ちしております。</span>
				</p>
				<div class="mv__linkOuter">
					<a href="<?php echo home_url(); ?>/information" class="mv__link">INFORMATION</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Information -->

	<!-- 固定ナビゲーション -->
	<div class="top-inner height-0">
		<div id="mv__nav" class="mv__navgation pc">
			<ul class="mv__navItem">
				<li><a href="#top">TOP</a></li>
				<li><a href="#projectStory">PROJECT STORY</a></li>
				<li><a href="#member">MEMBER</a></li>
				<li><a href="#aboutUs">ABOUT US</a></li>
				<li><a href="#information">INFORMATION</a></li>
			</ul>
		</div>
	</div>
	<!-- 固定ナビゲーション -->

</main>

<?php get_footer(); ?>