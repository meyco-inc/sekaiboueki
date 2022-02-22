<?php 

/*
Template Name: エントリー
*/

get_header(); ?>

<main class="entry">

  <div class="page__top fade-load">
    <div class="container">
      <h1><span>ENTRY</span>登録フォーム</h1>
      <ul class="path">
        <li class="path__top"><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li class="path__current">ENTRY</li>
      </ul>
    </div>
  </div>

  <section class="conts">
    <div class="container">
      <div class="inner">
        <h2 class="fade-load">この度は当社にご関心を<br class="sp">お寄せ頂き、<br>誠にありがとうございます。</h2>
        <p class="fade-load">マイナビ会員IDをお持ちの方は、マイナビ2023に登録されたご自身の会員情報を利用してエントリーすることができます。よろしければ以下「マイナビ」ボタンより画面の案内にしたがって手続きをおこなってください。</p>
        <div class="conts__btn__wrap scroll-up">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/entry/img_mainavi.svg" alt="マイナビ2023" class="">
          <p class="conts__btn"><a href="" target="_blank">マイナビからエントリー</a></p>
        </div>
        <p class="conts__caution scroll-up">※ご不明点ある場合は、<a href="">info@xxx.com</a><br class="sp">よりお問い合わせください。</p>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>