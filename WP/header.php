<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="Профессиональный подбор авто в Тюмени – гарантия юридической и криминальной чистоты, технической исправности. Закажите подбор автомобилей под ваш бюджет – работаем без выходных. Автоподбор в Тюмени Green Car, тел. +7 (3452) 958-958">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php if(is_front_page()) { echo 'class="main-page"'; } else { echo 'class="inner-page"'; } ?>>
    <?php
      $symbols = [' ', '(', ')', '-'];
      $phone_fixed = str_replace($symbols, '', get_field('header_phone', 2));
      $phone_fixed2 = str_replace($symbols, '', get_field('header_phone_2', 2));
    ?>
    <div class="header">
      <div class="header-top">
        <div class="container">
          <div class="header-top__inner">
            <div class="logo"><?php the_custom_logo($blog_id); ?></div>
            <div class="header__center">
              <div class="header__center-top">
                <div class="tagline">
                  <div class="tagline__first"><?php the_field('tagline_1', 2); ?></div>
                  <div class="tagline__second"><?php the_field('tagline_2', 2); ?></div>
                </div>
                <div class="header-social">
                  <a class="header-social__item viber" href="<?php the_field('header_viber', 2); ?>">
                    <img class="header-social__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/viber.svg" alt="">
                  </a>
                  <a class="header-social__item whatsapp" href="<?php the_field('header_whatsapp', 2); ?>">
                    <img class="header-social__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.svg" alt="">
                  </a>
                </div>
              </div>
              <div class="header__center-bottom">
                <div class="menu">
                  <?php wp_nav_menu( [
                    'theme_location'  => 'top',
                    'container'       => false,
                    'menu_class'      => 'menu',
                    'menu_id'         => 'menu',
                    'echo'            => true,
                    'items_wrap'      => '<ul class="menu-items">%3$s</ul>',
                    'depth'           => 0,
                  ] ); ?>
                </div>
              </div>
            </div>
            <div class="header__contacts">
              <a class="header__contacts-phone" href="tel:<?php echo $phone_fixed; ?>"><?php the_field('header_phone', 2); ?></a><br>
              <a class="header__contacts-phone" href="tel:<?php echo $phone_fixed2; ?>"><?php the_field('header_phone_2', 2); ?></a>
              <div class="header__contacts-whours"><?php the_field('header_whours', 2); ?></div>
              <a class="callback btn" href="<?php the_field('header_callback_link', 2); ?>"><?php the_field('header_callback_text', 2); ?></a>
            </div>
          </div>
        </div>
      </div>
      <?php if(is_front_page()): ?>
      <div class="intro" id="intro">
        <div class="container">
          <div class="intro__inner">
            <div class="intro__text-part">
              <div class="intro__preheader"><?php the_field('intro_preheader'); ?></div>
              <h1 class="intro__header"><?php the_field('intro_header'); ?></h1>
              <div class="intro__subheader"><?php the_field('intro_subheader'); ?></div>
              <div class="intro__text"><?php the_field('intro_text'); ?></div>
              <a class="intro__button btn" href="<?php the_field('intro_button_link'); ?>"><?php the_field('intro_button_text'); ?></a>
            </div>
            <div class="intro__image-part">
              <img class="intro__image" src="<?php the_field('intro_image'); ?>" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="benefits" id="benefits">
        <div class="container">
          <div class="benefits-items">
            <?php echo do_shortcode('[pods name="benefits" template="benefits" limit="-1" orderby="post_date ASC"]'); ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
    <?php if(!is_front_page()): ?>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <div class="container">
        <?php if (function_exists('bcn_display')) { bcn_display(); } ?>
      </div>
    </div>
    <?php endif; ?>
