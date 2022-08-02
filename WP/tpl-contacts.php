<? /* Template Name: Контакты */ ?>

<?php get_header(); ?>
  <?php
    $symbols = [' ', '(', ')', '-'];
    $phone_fixed = str_replace($symbols, '', get_field('header_phone', 2));
    $phone_fixed2 = str_replace($symbols, '', get_field('header_phone_2', 2));
  ?>
  <div class="content inner-content">
    <div class="container">
      <h1><?php get_field('h1_header') ? the_field('h1_header') : the_title(); ?></h1>
      <?php if (get_field('subheader')): ?>
        <p class="subheader"><?php the_field('subheader'); ?></p>
      <?php endif; ?>
      <div class="contacts-page">
        <div class="contacts-page__left">
          <p>
            <b>Телефоны: </b> 
          </p>
          <p>
            <a href="tel:<?php echo $phone_fixed; ?>"><?php the_field('header_phone', 2); ?></a><br>
            <a href="tel:<?php echo $phone_fixed2; ?>"><?php the_field('header_phone_2', 2); ?></a>
          </p>
          <p>
            <b>Адрес: </b>
          </p>
          <p>Тюмень, ул. Дружбы, д. 128, к. 1, стр. 4, офис 205</p>
          <div class="header-social">
            <a class="header-social__item viber" href="<?php the_field('header_viber', 2); ?>">
              <img class="header-social__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/viber.svg" alt="">
            </a>
            <a class="header-social__item whatsapp" href="<?php the_field('header_whatsapp', 2); ?>">
              <img class="header-social__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.svg" alt="">
            </a>
          </div>
        </div>
        <div class="contacts-page__right"></div>
      </div>
      <h2><?php the_field('cta_header'); ?></h2>
      <?php if (get_field('cta_text')): ?>
        <div class="cta">
          <div class="cta__text"><?php the_field('cta_text'); ?></div>
          <a href="#callback" class="cta__button btn"><?php the_field('cta_button'); ?></a>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php get_footer(); ?>
