<?php

/*
Template Name: プロジェクトストーリー
*/

get_header("story"); ?>

<main class="story">

	<div class="page__top fade-load">
		<div class="container">
			<h1><span>PROJECT <br class="sp">STORY</span>プロジェクトストーリー</h1>
			<p class="page__top__lead">世界貿易センタービル<br class="sp">南館建設プロジェクト</p>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/story/img_story.jpg" alt="">
			<ul class="path">
				<li class="path__top"><a href="<?php echo home_url(); ?>">TOP</a></li>
				<li class="path__current">PROJECT STORY</li>
			</ul>
		</div>
	</div>

	<section class="story__outeline">
		<div class="container scroll-up">
			<h2>OUT LINE</h2>
			<div class="story__outeline__wrap">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/story/img_outeline.png" alt="">
				<p>浜松町のランドマーク「世界貿易センタービル」は、1970年に完成した高さ152ｍの超高層ビルだ。半世紀に亘り日本経済を牽引する役割を担ってきたが、時代や周辺環境の変化に伴うビルの競争力強化のため、2009年に同ビルの建て替えを含む浜松町駅周辺の再開発計画が決定、2021年6月末をもって解体工事のため閉館した。なお、同ビルの解体は、国内では史上最も高い建造物の解体となる。建て替えによって誕生する新しいビルは世界貿易センタービル「本館」「ターミナル」「南館」の計3棟で、延べ面積約303,000㎡。46階建ての「本館」は、オフィスや国際水準のホテル、国際医療センター、観光プレ体験施設などが入る予定。7階建ての中層棟「ターミナル」には、バスターミナルやカンファレンスセンター、レセプション会場、屋上庭園などを整備予定だ。全体の完成は2027年の予定だが、先行して2021年3月に39階建てのオフィス棟「南館」が開業した。</p>
			</div>
		</div>
		<p class="story__outeline__bg">OUT LINE</p>
	</section>

	<section class="story__member">
		<div class="container">
			<h2 class="scroll-up">PROJECT MEMBER</h2>

			<div class="story__member__wrap">
				<div class="story__member__item scroll-up">
					<?php if (get_field('thumbnail01')) : ?>
						<img src="<?php the_field('thumbnail01'); ?>" />
					<?php endif; ?>
					<p class="story__member__about">【<?php the_field('about01'); ?>】</p>
					<p class="story__member__name"><?php the_field('name01'); ?></p>
					<p class="story__member__name-en"><?php the_field('name-en01'); ?></p>
					<p class="story__member__year"><span class="story__member__position"><?php the_field('position01'); ?></span><br><?php the_field('year01'); ?></p>
				</div>
				<div class="story__member__item scroll-up">
					<?php if (get_field('thumbnail02')) : ?>
						<img src="<?php the_field('thumbnail02'); ?>" />
					<?php endif; ?>
					<p class="story__member__about">【<?php the_field('about02'); ?>】</p>
					<p class="story__member__name"><?php the_field('name02'); ?></p>
					<p class="story__member__name-en"><?php the_field('name-en02'); ?></p>
					<p class="story__member__year"><span class="story__member__position"><?php the_field('position02'); ?></span><br><?php the_field('year02'); ?></p>
				</div>
				<div class="story__member__item scroll-up">
					<?php if (get_field('thumbnail03')) : ?>
						<img src="<?php the_field('thumbnail03'); ?>" />
					<?php endif; ?>
					<p class="story__member__about">【<?php the_field('about03'); ?>】</p>
					<p class="story__member__name"><?php the_field('name03'); ?></p>
					<p class="story__member__name-en"><?php the_field('name-en03'); ?></p>
					<p class="story__member__year"><span class="story__member__position"><?php the_field('position03'); ?></span><br><?php the_field('year03'); ?></p>
				</div>
				<div class="story__member__item scroll-up">
					<?php if (get_field('thumbnail04')) : ?>
						<img src="<?php the_field('thumbnail04'); ?>" />
					<?php endif; ?>
					<p class="story__member__about">【<?php the_field('about04'); ?>】</p>
					<p class="story__member__name"><?php the_field('name04'); ?></p>
					<p class="story__member__name-en"><?php the_field('name-en04'); ?></p>
					<p class="story__member__year"><span class="story__member__position"><?php the_field('position04'); ?></span><br><?php the_field('year04'); ?></p>
				</div>
			</div>

		</div>
	</section>

	<section class="story__episode">
		<div class="container">
			<h3 class="scroll-up">Episode 01.</h3>
		</div>
		<?php if (get_field('main-img01')) : ?>
			<img src="<?php the_field('main-img01'); ?>" class="story__episode__main scroll-up">
		<?php endif; ?>
		<div class="container">
			<div class="episode__lead__wrap inner">
				<p class="episode__lead scroll-up"><?php the_field('lead01'); ?></p>
				<div class="episode__lead__about__wrap scroll-up">
					<p class="episode__lead__name-en"><?php the_field('name-en01'); ?></p>
					<p class="episode__lead__about-en"><?php the_field('about-en01'); ?></p>
					<p class="episode__lead__name"><span class="episode__lead__about"><?php the_field('about01'); ?></span><?php the_field('name01'); ?></p>
				</div>
			</div>

			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('headding01-1')) : ?>
						<h4 class="scroll-up"><?php the_field('headding01-1'); ?></h4>
					<?php endif; ?>
					<?php if (get_field('text01-1')) : ?>
						<p class="episode__text scroll-up"><?php the_field('text01-1'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container story__img">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('img01-1')) : ?>
						<img src="<?php the_field('img01-1'); ?>" class="scroll-up"/>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('headding01-2')) : ?>
						<h4 class="scroll-up"><?php the_field('headding01-2'); ?></h4>
					<?php endif; ?>
					<?php if (get_field('text01-2')) : ?>
						<p class="episode__text scroll-up"><?php the_field('text01-2'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container story__img">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('img01-2')) : ?>
						<img src="<?php the_field('img01-2'); ?>" class="scroll-up"/>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('headding01-2')) : ?>
						<h4 class="scroll-up"><?php the_field('headding01-3'); ?></h4>
					<?php endif; ?>
					<?php if (get_field('text01-3')) : ?>
						<p class="episode__text scroll-up"><?php the_field('text01-3'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container story__img">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('img01-3')) : ?>
						<img src="<?php the_field('img01-3'); ?>" class="scroll-up"/>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="story__episode">
		<div class="container">
			<h3 class="scroll-up">Episode 02.</h3>
		</div>
		<?php if (get_field('main-img02')) : ?>
			<img src="<?php the_field('main-img02'); ?>" class="story__episode__main scroll-up">
		<?php endif; ?>

		<div class="container">
			<div class="episode__lead__wrap inner">
				<p class="episode__lead scroll-up"><?php the_field('lead02'); ?></p>
				<div class="episode__lead__about__wrap scroll-up">
					<p class="episode__lead__name-en"><?php the_field('name-en02'); ?></p>
					<p class="episode__lead__about-en"><?php the_field('about-en02'); ?></p>
					<p class="episode__lead__name"><span class="episode__lead__about"><?php the_field('about02'); ?></span><?php the_field('name02'); ?></p>
				</div>
			</div>

			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('headding02-1')) : ?>
						<h4 class="scroll-up"><?php the_field('headding02-1'); ?></h4>
					<?php endif; ?>
					<?php if (get_field('text02-1')) : ?>
						<p class="episode__text scroll-up"><?php the_field('text02-1'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container story__img">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('img02-1')) : ?>
						<img src="<?php the_field('img02-1'); ?>" class="scroll-up"/>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('headding02-2')) : ?>
						<h4 class="scroll-up"><?php the_field('headding02-2'); ?></h4>
					<?php endif; ?>
					<?php if (get_field('text02-2')) : ?>
						<p class="episode__text scroll-up"><?php the_field('text02-2'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container story__img">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('img02-2')) : ?>
						<img src="<?php the_field('img02-2'); ?>" class="scroll-up"/>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('headding02-2')) : ?>
						<h4 class="scroll-up"><?php the_field('headding02-3'); ?></h4>
					<?php endif; ?>
					<?php if (get_field('text02-3')) : ?>
						<p class="episode__text scroll-up"><?php the_field('text02-3'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container story__img">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('img02-3')) : ?>
						<img src="<?php the_field('img02-3'); ?>" class="scroll-up"/>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="story__episode">
		<div class="container">
			<h3 class="scroll-up">Episode 03.</h3>
		</div>

		<?php if (get_field('main-img03')) : ?>
			<img src="<?php the_field('main-img03'); ?>" class="story__episode__main scroll-up">
		<?php endif; ?>

		<div class="container">
			<div class="episode__lead__wrap inner">
				<p class="episode__lead scroll-up"><?php the_field('lead03'); ?></p>
				<div class="episode__lead__about__wrap scroll-up">
					<p class="episode__lead__name-en"><?php the_field('name-en03'); ?></p>
					<p class="episode__lead__about-en"><?php the_field('about-en03'); ?></p>
					<p class="episode__lead__name"><span class="episode__lead__about"><?php the_field('about03'); ?></span><?php the_field('name03'); ?></p>
				</div>
			</div>

			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('headding03-1')) : ?>
						<h4 class="scroll-up"><?php the_field('headding03-1'); ?></h4>
					<?php endif; ?>
					<?php if (get_field('text03-1')) : ?>
						<p class="episode__text scroll-up"><?php the_field('text03-1'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container story__img">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('img03-1')) : ?>
						<img src="<?php the_field('img03-1'); ?>" class="scroll-up"/>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('headding03-2')) : ?>
						<h4 class="scroll-up"><?php the_field('headding03-2'); ?></h4>
					<?php endif; ?>
					<?php if (get_field('text03-2')) : ?>
						<p class="episode__text scroll-up"><?php the_field('text03-2'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container story__img">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('img03-2')) : ?>
						<img src="<?php the_field('img03-2'); ?>" class="scroll-up"/>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('headding03-2')) : ?>
						<h4 class="scroll-up"><?php the_field('headding03-3'); ?></h4>
					<?php endif; ?>
					<?php if (get_field('text03-3')) : ?>
						<p class="episode__text scroll-up"><?php the_field('text03-3'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container story__img">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('img03-3')) : ?>
						<img src="<?php the_field('img03-3'); ?>" class="scroll-up"/>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="story__episode">
		<div class="container">
			<h3 class="scroll-up">Episode 04.</h3>
		</div>

		<?php if (get_field('main-img04')) : ?>
			<img src="<?php the_field('main-img04'); ?>" class="story__episode__main scroll-up">
		<?php endif; ?>

		<div class="container">
			<div class="episode__lead__wrap inner">
				<p class="episode__lead scroll-up"><?php the_field('lead04'); ?></p>
				<div class="episode__lead__about__wrap scroll-up">
					<p class="episode__lead__name-en"><?php the_field('name-en04'); ?></p>
					<p class="episode__lead__about-en"><?php the_field('about-en04'); ?></p>
					<p class="episode__lead__name"><span class="episode__lead__about"><?php the_field('about04'); ?></span><?php the_field('name04'); ?></p>
				</div>
			</div>

			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('headding04-1')) : ?>
						<h4 class="scroll-up"><?php the_field('headding04-1'); ?></h4>
					<?php endif; ?>
					<?php if (get_field('text04-1')) : ?>
						<p class="episode__text scroll-up"><?php the_field('text04-1'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container story__img">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('img04-1')) : ?>
						<img src="<?php the_field('img04-1'); ?>" class="scroll-up"/>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('headding04-2')) : ?>
						<h4 class="scroll-up"><?php the_field('headding04-2'); ?></h4>
					<?php endif; ?>
					<?php if (get_field('text04-2')) : ?>
						<p class="episode__text scroll-up"><?php the_field('text04-2'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container story__img">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('img04-2')) : ?>
						<img src="<?php the_field('img04-2'); ?>" class="scroll-up"/>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('headding04-2')) : ?>
						<h4 class="scroll-up"><?php the_field('headding04-3'); ?></h4>
					<?php endif; ?>
					<?php if (get_field('text04-3')) : ?>
						<p class="episode__text scroll-up"><?php the_field('text04-3'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="container story__img">
			<div class="episode__conts">
				<div class="inner__min">
					<?php if (get_field('img04-3')) : ?>
						<img src="<?php the_field('img04-3'); ?>" class="scroll-up"/>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="story__bottom">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/story/img_story_bottom.jpg" alt="" class="pc scroll-up">
		<div class="container">
			<div class="inner">
				<div class="story__bottom__wrap">
					<p class="story__bottom__lead scroll-up">唯一無二の「浜松町ブランド」を構築するために、<br>地域に根差したまちづくりを。</p>
					<p class="story__bottom__text scroll-up">
						浜松町のランドマークだった「世界貿易センタービル」。<br>
						1970年にビルが完成した当初は、「未来の象徴」でもあったこのビルに、<br>
						東京の、そして日本の未来への期待と待望を重ねた人も多かったであろう。<br>
						そんな世界貿易センタービルが、その歴史に幕を閉じ、<br>
						その跡地でまた大規模な都市開発プロジェクトが進行している――。<br>
						<br>
						2027年に本館がオープンする頃には、浜松町はどんな街になっているだろうか。<br>
						私たちは、どのように生きているだろうか。<br>
						その時には、ここ浜松町にまた「未来の象徴」が生まれているかもしれない。<br>
						東京で唯一無二の「浜松町ブランド」が生まれているかもしれない。<br>
						<br>
						株式会社世界貿易センタービルディングの、地域に根差したまちづくりは、<br>
						今日もなお、続いている。
					</p>
				</div>
			</div>
		</div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/story/img_story_bottom.jpg" alt="" class="sp scroll-up">
	</section>

</main>

<?php get_footer(); ?>