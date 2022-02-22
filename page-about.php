<?php

/*
Template Name: About us
*/

get_header(); ?>

<main class="about">

	<div class="page__top fade-load">
		<div class="container">
			<h1><span>ABOUT US</span>私たちについて</h1>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_about.jpg" alt="">
			<ul class="path">
				<li class="path__top"><a href="<?php echo home_url(); ?>">TOP</a></li>
				<li class="path__current">ABOUT US</li>
			</ul>
		</div>
	</div>

	<!-- <section class="business about__conts">
    <div class="container">
      <div class="inner">

        <h2><span>BUSINESS</span>事業内容</h2>
        <p class="business__lead">立地条件のよさを活かし、地域のランドマークとなるような“オフィスを主体とした複合施設”を提供しています。</p>

        <div class="business__wrap">
          <div class="business__item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_business01.jpg" alt="">
            <div class="business__item__text">
              <h3>ビルの賃貸事業</h3>
              <p>JR浜松町駅前の世界貿易センタービル南館とJR大崎駅前の<br>ThinkPark Towerにて快適なオフィス空間を提供。<br>豊富な経験に基づき、サービスのさらなる充実、<br>顧客満足度の向上を目指しています。</p>
            </div>
          </div>
          <div class="business__item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_business02.jpg" alt="">
            <div class="business__item__text">
              <h3>ビルの管理受託事業</h3>
              <p>世界貿易センタービル南館及び<br>ThinkPark Towerの運営・管理を行っています。</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section> -->
	<!-- business -->

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
							<h3><span>02</span>顔と名前が一致する会社規模</h3>
							<p>社員数は82名。オフィスはワンフロアで全部署が入っているため情報交換が頻繁に行われています。<br>チーム業務において必要不可欠な風通しの良い人間関係が存在しています。</p>
						</div>
					</div>
					<div class="features__item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_features03.jpg" alt="" class="scroll-up">
						<div class="features__item__text scroll-up">
							<h3><span>03</span>勤務地は東京のみ</h3>
							<p>港区（浜松町）と品川区（大崎）を拠点とする会社なので転居を伴う転勤がありません。<br>将来家族できても単身赴任にならず家族との時間を大切にできます。</p>
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

				<h2 class="scroll-up"><span>DATA</span>数字で見る世界貿易センタービルディング</h2>

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
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data09.jpg" alt="社員旅行補助額　10万円/人　※2019年実施時（コロナ前）">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data10.jpg" alt="営業収支　約160億円　※2020年度">
				</div>
				<div class="data__wrap scroll-up">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data11.jpg" alt="最終利益黒字期間　50年連続　※2020年度まで">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/img_data12.jpg" alt="自己資本比率　約72%　※2021年3月末時点">
				</div>

			</div>
		</div>
	</section>
	<!-- data -->

	<section class="history about__conts">
		<div class="container">
			<div class="inner">

				<h2 class="scroll-up"><span>HISTORY</span>世界貿易センタービルディングのあゆみとこれから</h2>
				<p class="business__lead scroll-up">地域に根付いて、企業様の快適な仕事をを支える縁の下の力持ちへ。</p>
			</div>
			<div class="history__wrap">
				<div class="history__year__wrap scroll-up">
					<h3>1964</h3>
					<div class="history__text__wrap history__1964">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1964.jpg" alt="">
						<p>
							㈱東京ターミナル（当社の旧社名）設立。<br>
							ビル基本計画に着手
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>1967</h3>
					<div class="history__text__wrap history__1967">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1967.jpg" alt="">
						<p>
							ビル建設工事に着手
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>1970</h3>
					<div class="history__text__wrap history__1970">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1970.jpg" alt="">
						<p>
							「世界貿易センタービル」竣工
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>1971</h3>
					<div class="history__text__wrap history__1971">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1971.jpg" alt="">
						<p>
							結婚式場「スカイホール」営業開始
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>1974</h3>
					<div class="history__text__wrap history__1974">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1974.jpg" alt="">
						<p>
							㈱東京ターミナルを<br>
							㈱世界貿易センタービルディングに社名変更
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>1976</h3>
					<div class="history__text__wrap history__1976">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1976.jpg" alt="">
						<p>
							分譲マンション事業開始
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>1989</h3>
					<div class="history__text__wrap history__1989">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_1989.jpg" alt="">
						<p>
							アーバイン第1・第2ビル<br>
							（米国カリフォルニア州）取得
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>2001</h3>
					<div class="history__text__wrap history__2001">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2001.jpg" alt="">
						<p>
							コージェネレーション・太陽光発電設備の導入
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>2004</h3>
					<div class="history__text__wrap history__2004">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2004.jpg" alt="">
						<p>
							BELCA賞（ロングライフ部門）を受賞
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>2007</h3>
					<div class="history__text__wrap history__2007">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2007.jpg" alt="">
						<p>
							コージェネレーション・<br>
							太陽光発電設備の導入
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>2014</h3>
					<div class="history__text__wrap history__2014">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2014.jpg" alt="">
						<p>
							会社創立50周年、企業理念制定
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>2020</h3>
					<div class="history__text__wrap history__2020">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2020.jpg" alt="">
						<p>
							浜松町・竹芝・芝浦エリアが<br>
							「東京ビジネスイベンツ先進エリア」に指定
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>2021</h3>
					<div class="history__text__wrap history__2021">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2021.jpg" alt="">
						<p>
							「世界貿易センタービル南館」竣工
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>2026</h3>
					<div class="history__text__wrap history__2026">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/history_2026.jpg" alt="">
						<p>
							「浜松町二丁目地区第一種市街地再開発事業」<br>
							全体竣工
						</p>
					</div>
				</div>
				<div class="history__year__wrap scroll-up">
					<h3>2027</h3>
					<div class="history__text__wrap history__2027">
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
				<p class="office__lead scroll-up">2021年6月に本社オフィスが世界貿易センタービル南館に移転しました。<br>そのオフィスをご紹介します。</p>

				<div class="office__wrap scroll-up">
					<div class="office__item modalOpen">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom1.jpg" alt="">
						<h3>5F 会議室</h3>
						<div class="office__modal">
							<div class="modal__mask"></div>
							<div class="office__modal__wrap container">
								<div class="slider">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom1.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom2.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom3.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/meetingroom4.jpg" alt="" class="slider_item">
								</div>
								<div class="office__modal__text">
									<h4>5F 会議室</h4>
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
						<h3>9F 執務室</h3>
						<div class="office__modal">
							<div class="modal__mask"></div>
							<div class="office__modal__wrap container">
								<div class="slider">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office1.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office2.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office3.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/office4.jpg" alt="" class="slider_item">
								</div>
								<div class="office__modal__text">
									<h4>9F 執務室</h4>
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
						<h3>9F エントランス</h3>
						<div class="office__modal">
							<div class="modal__mask"></div>
							<div class="office__modal__wrap container">
								<div class="slider">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance1.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance2.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance3.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/entrance4.jpg" alt="" class="slider_item">
								</div>
								<div class="office__modal__text">
									<h4>9F オフィスエントランス</h4>
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
						<h3>9F マルチパーパスエリア</h3>
						<div class="office__modal">
							<div class="modal__mask"></div>
							<div class="office__modal__wrap container">
								<div class="slider">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi1.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi2.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi3.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/multi4.jpg" alt="" class="slider_item">
								</div>
								<div class="office__modal__text">
									<h4>9F マルチパーパス</h4>
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
						<h3>9F 集中ブース</h3>
						<div class="office__modal">
							<div class="modal__mask"></div>
							<div class="office__modal__wrap container">
								<div class="slider">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/booth1.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/booth2.jpg" alt="" class="slider_item">
								</div>
								<div class="office__modal__text">
									<h4>9F 集中ブース</h4>
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
						<h3>9F コネクトハブ</h3>
						<div class="office__modal">
							<div class="modal__mask"></div>
							<div class="office__modal__wrap container">
								<div class="slider">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect1.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect2.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect3.jpg" alt="" class="slider_item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about/connect4.jpg" alt="" class="slider_item">
								</div>
								<div class="office__modal__text">
									<h4>9F コネクトハブ</h4>
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