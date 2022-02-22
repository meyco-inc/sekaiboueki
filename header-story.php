<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>世界貿易</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,500;1,600&family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
	<link rel="stylesheet" href="https://use.typekit.net/jpg4ynp.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" />
	<link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
	<script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-scrollify@1/jquery.scrollify.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" defer></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class();
		$body_id = "";
		if (is_single() || is_page()) {
			$body_id = ' id="' . $post->post_name . '" ';
		} else if (is_category()) {
			$category = get_the_category();
			$body_id = ' id="category_' . $category[0]->category_nicename . '" ';
		};
		?>>

	<header class="top__header">
		<div class="header__fix">
			<div class="container header__inner">
				<h1>
					<?php if (is_home() || is_front_page()) : ?>
						<a href="#top">
							<img src="<?php echo get_template_directory_uri(); ?>/img/top/logo-white.png" alt="株式会社世界貿易センタービルディングRecruiting Site" class="header__logo">
						</a>
					<?php else : ?>
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/top/logo.png" alt="株式会社世界貿易センタービルディングRecruiting Site" class="header__logo">
						</a>
					<?php endif; ?>
				</h1>
				<div class="header_right">
					<a href="<?php echo home_url(); ?>/entry" class="pc"><img src="<?php echo get_template_directory_uri(); ?>/img/top/entry.jpg" alt="" class="header__entry"></a>
					<?php if (is_home() || is_front_page()) : ?>
						<button aria-label="メニュー" class="nav__button top" id="nav__button">
						<?php else : ?>
							<button aria-label="メニュー" class="nav__button" id="nav__button">
							<?php endif; ?>
							<div></div>
							<div></div>
							<div></div>
							</button>
							<nav class="nav" id="nav">
								<div class="top-inner">
									<ul>
										<li class="nav__items">
											<?php if (is_home() || is_front_page()) : ?>
												<a href="#top">
												<?php else : ?>
													<a href="<?php echo home_url(); ?>">
													<?php endif; ?>
													TOP<span>トップページ</span></a>
										</li>
										<li class="nav__items">
											<?php if (is_home() || is_front_page()) : ?>
												<a href="#projectStory">
												<?php else : ?>
													<a href="<?php echo home_url(); ?>/story">
													<?php endif; ?>
													PROJECT STORY<span>プロジェクトストーリー</span></a>
										</li>
										<li class="nav__items">
											<?php if (is_home() || is_front_page()) : ?>
												<a href="#member">
												<?php else : ?>
													<a href="<?php echo home_url(); ?>/interview01">
													<?php endif; ?>
													MEMBER<span>社員紹介</span></a>
										</li>
										<li class="nav__items">
											<?php if (is_home() || is_front_page()) : ?>
												<a href="#aboutUs">
												<?php else : ?>
													<a href="<?php echo home_url(); ?>/about">
													<?php endif; ?>
													ABOUT US<span>私たちについて</span></a>
										</li>
										<li class="nav__items">
											<?php if (is_home() || is_front_page()) : ?>
												<a href="#information">
												<?php else : ?>
													<a href="<?php echo home_url(); ?>/information">
													<?php endif; ?>
													INFORMATION<span>採用情報</span></a>
										</li>
										<li class="nav__items">
											<a href="<?php echo home_url(); ?>/entry">ENTRY<span>採用エントリー</span></a>
										</li>
									</ul>
									<small class="nav__copy pc">COPYRIGHT ©︎2022 World Trade Center Building ,Inc ALL RIGHT RESERVED.</small>
									<a href="<?php echo home_url(); ?>/entry" class="sp"><img src="<?php echo get_template_directory_uri(); ?>/img/top/entry.jpg" alt="" class="header__entry nav__entry"></a>

								</div>
							</nav>
				</div>
			</div>
		</div>


	</header>