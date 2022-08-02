<? /* Template Name: Примеры работ */ ?>

<?php get_header(); ?>
  <div class="content inner-content">
    <div class="container">
      <h1><?php get_field('h1_header') ? the_field('h1_header') : the_title(); ?></h1>
      <?php if (get_field('subheader')): ?>
        <p class="subheader"><?php the_field('subheader'); ?></p>
      <?php endif; ?>
      <?php the_field('portfolio_text'); ?>
      <!-- КАКОЙ-ТО БЛОК -->
      <?php if (get_field('cta_text')): ?>
        <div class="cta">
          <div class="cta__text"><?php the_field('cta_text'); ?></div>
          <a href="#callback" class="cta__button btn"><?php the_field('cta_button'); ?></a>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php get_footer(); ?>
