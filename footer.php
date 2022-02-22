<?php if ( is_home() || is_front_page() ) :?>
  <footer class="scroll">
<?php else:?>
  <footer>
<?php endif;?>
  <div class="inner">

		<div class="footer__top">
      <p class="footer__top__logo"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer_logo.svg" alt="世界貿易センタービルディング"></a></p>
      <ul class="footer__nav">
        <li><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li><a href="<?php echo home_url(); ?>/story">PROJECT STORY</a></li>
        <li><a href="<?php echo home_url(); ?>/interview01">MEMBER</a></li>
        <li><a href="<?php echo home_url(); ?>/about">ABOUT US</a></li>
        <li><a href="<?php echo home_url(); ?>/information">RECRUIT</a></li>
      </ul>
    </div>

    <p class="footer__lead font-Montserrat">COPYRIGHT ©︎2022 World Trade Center Building ,<br class="sp  ">Inc ALL RIGHT RESERVED.</p>

  </div>
</footer>

<?php wp_footer(); ?>

</body>
<html>