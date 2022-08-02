<? /* Template Name: Что проверяем */ ?>

<?php get_header(); ?>
  <div class="content inner-content">
    <div class="container">
      <h1><?php get_field('h1_header') ? the_field('h1_header') : the_title(); ?></h1>
      <?php if (get_field('subheader')): ?>
        <p class="subheader"><?php the_field('subheader'); ?></p>
      <?php endif; ?>
      <?php the_field('check_text'); ?>

      </div>
      <div class="we-check">
        <div class="container">
          <h2 class="we-check__header"><?php the_field('check_second_header2'); ?></h2>
          <div class="we-check__inner">
            <div class="we-check__left"><img class="we-check__image" src="<?php the_field('check_second_image'); ?>" alt="">
              <div class="we-check-items">
              <?php echo do_shortcode('[pods name="we_check" template="we_check" limit="-1" orderby="post_date ASC"]'); ?>
              </div>
            </div>
            <div class="we-check__right">
            <?php echo do_shortcode('[pods name="we_check" template="we_check_full" limit="-1" orderby="post_date ASC"]'); ?>
              <a class="we-check__button btn" href="<?php the_field('check_button2_href'); ?>"><?php the_field('check_button2_text'); ?></a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">

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
