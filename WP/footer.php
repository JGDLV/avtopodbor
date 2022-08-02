<div class="footer">
      <div class="container">
        <div class="footer__inner">
          <div class="footer-social">
            <p class="footer-social__header">Мы в соцсетях:</p>
            <div class="footer-social-items">
              <a class="footer-social__item vk" href="<?php the_field('footer_vk', 2); ?>" target="_blank">
                <img class="footer-social__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt="">
              </a>
              <a class="footer-social__item instagram" href="<?php the_field('footer_inst', 2); ?>" target="_blank">
                <img class="footer-social__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="">
              </a>
              <a class="footer-social__item facebook" href="<?php the_field('footer_facebook', 2); ?>" target="_blank">
                <img class="footer-social__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="">
              </a>
              <a class="footer-social__item youtube" href="<?php the_field('footer_youtube', 2); ?>" target="_blank">
                <img class="footer-social__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.svg" alt="">
              </a>
            </div>
          </div>
          <div class="copyright"><?php the_field('copyright', 2); ?></div>
          <div class="privacy">
            <a href="<?php the_field('footer_link', 2); ?>" target="_blank"><?php the_field('footer_link_text', 2); ?></a>
          </div>
          <div class="developer">Разработано: <a href="//1ps.ru/" target="_blank">1PS.RU</a></div>
        </div>
      </div>
    </div>
    <div class="callback-modal mfp-hide" id="callback">
      <h2 class="callback-modal__header">Обратный звонок</h2>
      <?php echo do_shortcode('[sc name="callback_form"]'); ?>
    </div>
    <div id="top"></div>
    <?php wp_footer(); ?>
  </body>
</html>
