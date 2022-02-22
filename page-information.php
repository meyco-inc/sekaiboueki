<?php

/*
Template Name: 採用情報
*/

get_header(); ?>

<main class="information">

  <div class="page__top fade-load">
    <div class="container">
      <h1><span>INFORMATION</span>採用情報</h1>
      <p class="page__top__lead">世界貿易センター<br class="sp">ビルディング採用情報</p>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/information/img_information.jpg" alt="">
      <ul class="path">
        <li class="path__top"><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li class="path__current">INFORMATION</li>
      </ul>
    </div>
  </div>

  <section class="recruit">
    <div class="container">
      <div class="inner">
        <h2 class="scroll-up"><span>RECRUIT<br>INFORMATION</span>募集要項</h2>
        <table class="scroll-up">
          <?php if (get_field('occupation')) : ?>
            <tr>
              <th>募集職種</th>
              <td><?php the_field('occupation'); ?></td>
            </tr>
          <?php endif; ?>
          <tr>
            <th>募集人数</th>
            <td>若干名
            <td>
          </tr>
          <?php if (get_field('salary')) : ?>
            <tr>
              <th>基本給</th>
              <td><?php the_field('salary'); ?></td>
            </tr>
          <?php endif; ?>
          <?php if (get_field('allowance')) : ?>
            <tr>
              <th>諸手当</th>
              <td><?php the_field('allowance'); ?></td>
            </tr>
          <?php endif; ?>
          <?php if (get_field('salary_increase')) : ?>
            <tr>
              <th>昇給</th>
              <td><?php the_field('salary_increase'); ?></td>
            </tr>
          <?php endif; ?>
          <?php if (get_field('bonus')) : ?>
            <tr>
              <th>賞与</th>
              <td><?php the_field('bonus'); ?></td>
            </tr>
          <?php endif; ?>
          <?php if (get_field('vacation')) : ?>
            <tr>
              <th>休日休暇</th>
              <td><?php the_field('vacation'); ?></td>
            </tr>
          <?php endif; ?>
          <?php if (get_field('system')) : ?>
            <tr>
              <th>待遇・福利厚生・社内制度</th>
              <td><?php the_field('system'); ?></td>
            </tr>
          <?php endif; ?>
          <?php if (get_field('location')) : ?>
            <tr>
              <th>勤務地</th>
              <!-- <td><?php the_field('location'); ?></td> -->
              <td>東京（浜松町・大崎）</td>
            </tr>
          <?php endif; ?>
          <?php if (get_field('hours')) : ?>
            <tr>
              <th>勤務時間</th>
              <!-- <td><?php the_field('hours'); ?></td> -->
              <td>平日9:00~17:30(実働7時間30分)</td>
            </tr>
          <?php endif; ?>
          <?php if (get_field('education')) : ?>
            <tr>
              <th>教育制度</th>
              <!-- <td><?php the_field('education'); ?></td> -->
              <td>●OJT（現場教育）<br>
                ●OFF-JT（現場外教育）<br>
                ・基礎教育<br>
                ・職能別教育<br>
                ・部署別教育</td>
              </td>
            </tr>
          <?php endif; ?>
          <?php if (get_field('training')) : ?>
            <tr>
              <th>研修制度</th>
              <td><?php the_field('training'); ?></td>
            </tr>
          <?php endif; ?>
          <?php if (get_field('other_system')) : ?>
            <tr>
              <th>自己啓発支援制度</th>
              <td><?php the_field('other_system'); ?></td>
            </tr>
          <?php endif; ?>
        </table>
      </div>
    </div>
  </section>
  <!-- recruit -->

  <section class="employment">
    <div class="container">
      <div class="inner">
        <h2 class="scroll-up"><span>EMPLOYMENT<br>RECORD</span>採用実績</h2>
        <table class="scroll-up">
          <?php if (get_field('achievement_school')) : ?>
            <tr>
              <th>採用実績（学校）</th>
              <!-- <td><?php the_field('achievement_school'); ?></td> -->
              <td>＜大学＞<br>
                青山学院大学、大分大学、学習院大学、京都大学、群馬大学、慶應義塾大学、神戸大学、芝浦工業大学、東京都立大学、上智大学、成蹊大学、成城大学、中央大学、東京工業大学、東京都市大学、東京理科大学、東北大学、一橋大学、広島大学、法政大学、明治大学、明治学院大学、横浜市立大学、立教大学、早稲田大学</td>
              </td>
            </tr>
          <?php endif; ?>
          <?php if (get_field('achievement_people')) : ?>
            <tr>
              <th>採用実績（人数）</th>
              <td><?php the_field('achievement_people'); ?></td>
            </tr>
          <?php endif; ?>
        </table>
      </div>
    </div>
  </section>
  <!-- employment -->

  <section class="flow">
    <div class="container">
      <div class="inner">
        <h2 class="scroll-up"><span>FLOW</span>選考フロー</h2>
        <div class="flow__wrap">
          <div class="flow__item scroll-up">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/information/flow_icon01.svg" alt="">
            <p>エントリー</p>
          </div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/information/flow_arrow.svg" alt="" class="icon-arrow scroll-up">
          <div class="flow__item scroll-up">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/information/flow_icon02.svg" alt="">
            <p>説明会</p>
          </div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/information/flow_arrow.svg" alt="" class="icon-arrow scroll-up">
          <div class="flow__item scroll-up">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/information/flow_icon03.svg" alt="">
            <p>面接</p>
          </div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/information/flow_arrow.svg" alt="" class="icon-arrow scroll-up">
          <div class="flow__item scroll-up">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/information/flow_icon04.svg" alt="">
            <p>内々定</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- flow -->

</main>

<?php get_footer(); ?>