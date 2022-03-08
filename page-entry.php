<?php

/*
Template Name: エントリー
*/

get_header(); ?>

<main class="entry">

  <div class="page__top fade-load">
    <div class="container">
      <h1><span>ENTRY</span>エントリー</h1>
      <ul class="path">
        <li class="path__top"><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li class="path__current">ENTRY</li>
      </ul>
    </div>
  </div>

  <section class="conts">
    <div class="container">
      <div class="inner">
        <p class="">当社の採用選考への参加をご希望の方は、マイナビ2023からエントリーをお願いします。</p>
        <div class="conts__btn__wrap">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entry/img_mainavi.svg" alt="マイナビ2023" class="">
          <p class="conts__btn"><a href="https://job.mynavi.jp/23/pc/search/corp74150/outline.html" target="_blank">マイナビからエントリー</a></p>
        </div>
        <p class="conts__caution">※ご不明点等ございましたら、<a href="mailto:recruit@wtcbldg.co.jp">recruit@wtcbldg.co.jp</a><br class="sp">までお問い合わせください。</p>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>