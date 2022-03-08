<?php

/*
Template Name: About us
*/

get_header(); ?>

<main class="about">

	<div class="page__top fade-load">
		<div class="container">
			<h1><span>ABOUT US</span>私たちについて</h1>
		</div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_about.jpg" alt="">
		<div class="container">
			<ul class="path">
				<li class="path__top"><a href="<?php echo home_url(); ?>">TOP</a></li>
				<li class="path__current">ABOUT US</li>
			</ul>
		</div>
	</div>

	<section class="business about__conts">
		<div class="container">
			<div class="inner">
				<h2 class="scroll-up"><span>BUSINESS</span>事業内容</h2>
				<p class="scroll-up business__lead">世界貿易センタービルディングは、<br class="sp">建物を「建てる」「貸す」「管理する」<br class="sp">という<br class="pc">
					不動産ビジネスの一連の流れを<br class="sp">ワンストップで行っている会社です。</p>

				<div class="scroll-up business__wrap">
					<div class="business__item">
						<h3>建てる”都市の再開発事業”</h3>
						<p class="business__item__text">デベロッパーとして、現在は浜松町の再開発事業を実施しています。</p>
						<img class="pc" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_business01.svg" alt="">
						<img class="sp" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_business01-sp.svg" alt="">
					</div>
					<div class="business__item">
						<h3>貸す”ビル賃貸事業”</h3>
						<p class="business__item__text">ビルオーナーの当社は、テナント誘致やテナント管理などのリーシングマネジメントも自社で実施しています。</p>
						<img class="pc" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_business02.svg" alt="">
						<img class="sp" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_business02-sp.svg" alt="">
					</div>
					<div class="business__item">
						<h3>管理する”ビル管理受託事業”</h3>
						<p class="business__item__text">浜松町の世界貿易センタービルディング南館および大崎のThinkParkの管理・運営を行なっております。</p>
						<img class="pc" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_business03.svg" alt="">
						<img class="sp" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_business03-sp.svg" alt="">
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="features about__conts">
		<div class="container">
			<div class="inner">

				<h2 class="scroll-up"><span>FEATURES</span>会社の特徴</h2>

				<div class="features__wrap">
					<div class="features__item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_features01.jpg" alt="" class="scroll-up">
						<div class="features__item__text scroll-up">
							<h3><span>01</span>まちづくりができる会社</h3>
							<p>世界貿易センタービルの建替え事業は単なる老朽化したビルの建替えにとどまりません。<br>浜松町やその周辺地域の発展も見据えたまちづくりの役割も持っています。</p>
						</div>
					</div>
					<div class="features__item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_features02.jpg" alt="" class="scroll-up">
						<div class="features__item__text scroll-up">
							<h3><span>02</span>顔と名前が一致する<br class="sp">会社規模</h3>
							<p>社員数は100名弱。オフィスはワンフロアで全部署が入っているため情報交換が頻繁に行われています。<br>チーム業務において必要不可欠な風通しの良い人間関係が存在しています。</p>
						</div>
					</div>
					<div class="features__item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_features03.jpg" alt="" class="scroll-up">
						<div class="features__item__text scroll-up">
							<h3><span>03</span>勤務地は東京</h3>
							<p>港区（浜松町）と品川区（大崎）を拠点とする会社なので転居を伴う転勤がありません。<br>将来家族ができても単身赴任にならず家族との時間を大切にできます。</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- features -->

	<section class="data about__conts">
		<div class="container">
			<div class="inner">

				<h2 class="scroll-up"><span>DATA</span>数字で見る<br class="sp">世界貿易センタービルディング</h2>

				<div class="data__wrap scroll-up">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data01.jpg" alt="従業員数　82人　※2022年3月時点">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data02.jpg" alt="平均年齢　46歳　※2022年3月時点">
				</div>
				<div class="data__wrap scroll-up">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data03.jpg" alt="男女比　3:1　※2022年3月時点">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data04.jpg" alt="有休消化率　65%　※2020年度">
				</div>
				<div class="data__wrap scroll-up">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data05.jpg" alt="月平均残業時間　28時間　※2020年度">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data06.jpg" alt="3年以内離職率　0%　※2022年3月時点">
				</div>
				<div class="data__wrap scroll-up">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data07.jpg" alt="東京勤務　100%　※2022年3月時点">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data08.jpg" alt="社員旅行参加率　81%　※2019年実施時（コロナ前）">
				</div>
				<div class="data__wrap scroll-up">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data10.jpg" alt="営業収支　約160億円　※2020年度">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data11.jpg" alt="最終利益黒字期間　50年連続">
				</div>
				<div class="data__wrap scroll-up">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data12.jpg" alt="自己資本比率　約72%　※2021年3月末時点">
				</div>

			</div>
		</div>
	</section>
	<!-- data -->

	<section class="history about__conts">
		<div class="container">
			<div class="inner">
				<h2 class="scroll-up"><span>HISTORY</span>世界貿易センタービルディング<br class="sp">のあゆみとこれから</h2>
			</div>
			<div class="history__wrap">
				<div class="history__year__wrap history__1964 scroll-up">
					<h3>1964</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1964.png" alt="">
						<p>
							㈱東京ターミナル<br class="sp">（当社の旧社名）設立。<br>
							ビル基本計画に着手
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__1967 scroll-up">
					<h3>1967</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1967.png" alt="">
						<p>
							ビル建設工事に着手
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__1970 scroll-up">
					<h3>1970</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1970.png" alt="">
						<p>
							「世界貿易センタービル」竣工
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__1971 scroll-up">
					<h3>1971</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1971.png" alt="">
						<p>
							結婚式場「スカイホール」<br class="sp">営業開始
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__1974 scroll-up">
					<h3>1974</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1974.png" alt="">
						<p>
							㈱東京ターミナルを<br>
							㈱世界貿易センタービル<br class="sp">ディングに社名変更
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__1976 scroll-up">
					<h3>1976</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1976.png" alt="">
						<p>
							分譲マンション事業開始
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__1989 scroll-up">
					<h3>1989</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1989.png" alt="">
						<p>
							アーバイン第1・第2ビル<br>
							（米国カリフォルニア州）取得<br>
							※海外事業は現在中断しています
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__2001 scroll-up">
					<h3>2001</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2001.png" alt="">
						<p>
							コージェネレーション・<br>太陽光発電設備の導入<br>「ThinkPark Tower」竣工
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__2004 scroll-up">
					<h3>2004</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2004.png" alt="">
						<p>
							BELCA賞（ロングライフ部門）<br class="sp">を受賞
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__2007 scroll-up">
					<h3>2007</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2007.png" alt="">
						<p>
							コージェネレーション・<br>
							太陽光発電設備の導入
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__2014 scroll-up">
					<h3>2014</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2014.png" alt="">
						<p>
							会社創立50周年、<br class="sp">企業理念制定
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__2020 scroll-up">
					<h3>2020</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2020.jpg" alt="">
						<p>
							浜松町・竹芝・芝浦エリアが<br>
							「東京ビジネスイベンツ先進<br class="sp">エリア」に指定
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__year__wrap__future history__2021 scroll-up">
					<h3>2021</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2021.jpg" alt="">
						<p>
							「世界貿易センタービル南館」<br class="sp">竣工
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__year__wrap__future history__2026 scroll-up">
					<h3>2026</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2026.jpg" alt="">
						<p>
							「浜松町二丁目地区第一種<br class="sp">市街地再開発事業」<br>
							全体竣工
						</p>
					</div>
				</div>
				<div class="history__year__wrap history__year__wrap__future history__2027 scroll-up">
					<h3>2027</h3>
					<div class="history__text__wrap">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2027.jpg" alt="">
						<p>
							新「世界貿易センタービル本館・<br>
							ターミナル」竣工
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- history -->


	<section class="office about__conts">
		<div class="container">
			<div class="inner">

				<h2 class="scroll-up"><span>OFFICE</span>オフィス紹介</h2>
				<p class="office__lead scroll-up">2021年6月に本社オフィスが世界貿易<br class="sp">センタービル南館に移転しました。<br>そのオフィスをご紹介します。</p>

				<div class="office__wrap scroll-up">
					<div class="office__item modalOpen">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom1.jpg" alt="">
						<h3>会議室</h3>
						<div class="office__modal">
							<div class="modal__mask"></div>
							<div class="office__modal__wrap container">

								<div class="offece__slider pc">
									<div class="slider-pc1">
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom1.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom2.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom3.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom4.jpg" alt="">
										</div>
									</div>
									<div class="thumbnail1">
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom1.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom2.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom3.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom4.jpg" alt="">
										</div>
									</div>
								</div>

								<div class="slider sp">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom1.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom2.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom3.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom4.jpg" alt="" class="slider_item">
								</div>
								<div class="office__modal__text">
									<h4>会議室</h4>
									<p>
										２つの会議室をつなげて大規模会議を開催可能です。会議室の壁はスライディングウォールのため参加人数に応じ柔軟に対応可能。ホワイエは会議前後のちょっとした休憩や社交の場として利用できます。
									</p>
								</div>
							</div>
							<div class="modalClose office__modalClose">
								<img src="<?php echo get_template_directory_uri(); ?>/img/top/x.svg" alt="">
							</div>
						</div>
					</div>
					<div class="office__item modalOpen">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office1.jpg" alt="">
						<h3>執務室</h3>
						<div class="office__modal">
							<div class="modal__mask"></div>
							<div class="office__modal__wrap container">

								<div class="offece__slider pc">
									<div class="slider-pc2">
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office1.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office2.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office3.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office4.jpg" alt="">
										</div>
									</div>
									<div class="thumbnail2">
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office1.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office2.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office3.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office4.jpg" alt="">
										</div>
									</div>
								</div>

								<div class="slider sp">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office1.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office2.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office3.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office4.jpg" alt="" class="slider_item">
								</div>
								<div class="office__modal__text">
									<h4>執務室</h4>
									<p>
										ユニバーサルレイアウト※を導入しスペース効率向上させます。創出した余剰スペースを共用スペースにし、フリーアドレスにも対応可能です。<br><br>
										※デスク構成・配置を均一に設定し、デスクなど物を動かさずに人が動いて対応するデスク利用方式。
									</p>
								</div>
							</div>
							<div class="modalClose office__modalClose">
								<img src="<?php echo get_template_directory_uri(); ?>/img/top/x.svg" alt="">
							</div>
						</div>
					</div>
					<div class="office__item modalOpen">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance1.jpg" alt="">
						<h3>エントランス</h3>
						<div class="office__modal">
							<div class="modal__mask"></div>
							<div class="office__modal__wrap container">

								<div class="offece__slider pc">
									<div class="slider-pc3">
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance1.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance2.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance3.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance4.jpg" alt="">
										</div>
									</div>
									<div class="thumbnail3">
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance1.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance2.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance3.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance4.jpg" alt="">
										</div>
									</div>
								</div>

								<div class="slider sp">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance1.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance2.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance3.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance4.jpg" alt="" class="slider_item">
								</div>
								<div class="office__modal__text">
									<h4>オフィスエントランス</h4>
									<p>
										印象的なグリーンと質感ある素材で演出されたモダンな受付でイメージアップを図っています。<br>
										中心に配置したシンボルツリーは季節毎に変更し、通路壁面の棚はグループスローガンを想起するデザインにいたしました。
									</p>
								</div>
							</div>
							<div class="modalClose office__modalClose">
								<img src="<?php echo get_template_directory_uri(); ?>/img/top/x.svg" alt="">
							</div>
						</div>
					</div>
					<div class="office__item modalOpen">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi1.jpg" alt="">
						<h3>マルチパーパスエリア</h3>
						<div class="office__modal">
							<div class="modal__mask"></div>
							<div class="office__modal__wrap container">

								<div class="offece__slider pc">
									<div class="slider-pc4">
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi1.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi2.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi3.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi4.jpg" alt="">
										</div>
									</div>
									<div class="thumbnail4">
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi1.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi2.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi3.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi4.jpg" alt="">
										</div>
									</div>
								</div>

								<div class="slider sp">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi1.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi2.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi3.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi4.jpg" alt="" class="slider_item">
								</div>
								<div class="office__modal__text">
									<h4>マルチパーパス</h4>
									<p>
										社員が自然と集まることで、組織力強化を狙った場所になります。仕事だけでなく社内イベントや勉強会等多目的に利用することが可能です。
									</p>
								</div>
							</div>
							<div class="modalClose office__modalClose">
								<img src="<?php echo get_template_directory_uri(); ?>/img/top/x.svg" alt="">
							</div>
						</div>
					</div>
					<div class="office__item modalOpen">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/booth1.jpg" alt="">
						<h3>集中ブース</h3>
						<div class="office__modal">
							<div class="modal__mask"></div>
							<div class="office__modal__wrap container">

								<div class="offece__slider pc">
									<div class="slider-pc5">
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/booth1.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/booth2.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/booth3.jpg" alt="">
										</div>
									</div>
									<div class="thumbnail5 transform-none">
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/booth1.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/booth2.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/booth3.jpg" alt="">
										</div>
									</div>
								</div>

								<div class="slider sp">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/booth1.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/booth2.jpg" alt="" class="slider_item">
								</div>
								<div class="office__modal__text">
									<h4>集中ブース</h4>
									<p>
										集中を要するソロワークや、人に見られたくない仕事ができる場所になります。集中力を高める青系を採用しています。最大３時間まで連続利用可能です。
									</p>
								</div>
							</div>
							<div class="modalClose office__modalClose">
								<img src="<?php echo get_template_directory_uri(); ?>/img/top/x.svg" alt="">
							</div>
						</div>
					</div>
					<div class="office__item modalOpen">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect1.jpg" alt="">
						<h3>コネクトハブ</h3>
						<div class="office__modal">
							<div class="modal__mask"></div>
							<div class="office__modal__wrap container">

								<div class="offece__slider pc">
									<div class="slider-pc6">
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect1.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect2.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect3.jpg" alt="">
										</div>
										<div class="slick-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect4.jpg" alt="">
										</div>
									</div>
									<div class="thumbnail6">
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect1.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect2.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect3.jpg" alt="">
										</div>
										<div class="thumbnail-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect4.jpg" alt="">
										</div>
									</div>
								</div>

								<div class="slider sp">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect1.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect2.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect3.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect4.jpg" alt="" class="slider_item">
								</div>
								<div class="office__modal__text">
									<h4>コネクトハブ</h4>
									<p>
										ソロワーク、グループミーティング、 1on1ミーティング、小ミーティングのための多様なスペースを用意いたしました。
									</p>
								</div>
							</div>
							<div class="modalClose office__modalClose">
								<img src="<?php echo get_template_directory_uri(); ?>/img/top/x.svg" alt="">
							</div>
						</div>
					</div>
				</div>

	</section>
	<!-- office -->

	<section class="company about__conts">
		<div class="container">
			<div class="inner">

				<h2 class="scroll-up"><span>COMPANY</span>会社概要</h2>
				<p class="company__text">2022年2月末時点</p>
				<table class="scroll-up">
					<?php if (get_field('trade_name')) : ?>
						<tr>
							<th>商号</th>
							<td><?php the_field('trade_name'); ?></td>
						</tr>
					<?php endif; ?>
					<?php if (get_field('company_location')) : ?>
						<tr>
							<th>所在地</th>
							<td><?php the_field('company_location'); ?></td>
						</tr>
					<?php endif; ?>
					<?php if (get_field('established')) : ?>
						<tr>
							<th>設立</th>
							<td><?php the_field('established'); ?></td>
						</tr>
					<?php endif; ?>
					<?php if (get_field('rp')) : ?>
						<tr>
							<th>登録・許可</th>
							<td><?php the_field('rp'); ?></td>
						</tr>
					<?php endif; ?>
					<?php if (get_field('capital')) : ?>
						<tr>
							<th>資本金</th>
							<td><?php the_field('capital'); ?></td>
						</tr>
					<?php endif; ?>
					<?php if (get_field('representative')) : ?>
						<tr>
							<th>代表者</th>
							<td><?php the_field('representative'); ?></td>
						</tr>
					<?php endif; ?>
					<?php if (get_field('employees')) : ?>
						<tr>
							<th>従業員数</th>
							<td><?php the_field('employees'); ?></td>
						</tr>
					<?php endif; ?>
					<?php if (get_field('business_content')) : ?>
						<tr>
							<th>事業内容</th>
							<td><?php the_field('business_content'); ?></td>
						</tr>
					<?php endif; ?>
					<?php if (get_field('banks')) : ?>
						<tr>
							<th>主要取引銀行</th>
							<td><?php the_field('banks'); ?></td>
						</tr>
					<?php endif; ?>
					<?php if (get_field('subsidiary')) : ?>
						<tr>
							<th>子会社</th>
							<td><?php the_field('subsidiary'); ?></td>
						</tr>
					<?php endif; ?>
				</table>

			</div>
		</div>
	</section>
	<!-- company -->

</main>

<?php get_footer(); ?>