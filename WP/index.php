<?php get_header(); ?>
  <div class="content inner-content">
    <div class="container">
      <h1><?php get_field('h1_header') ? the_field('h1_header') : the_title(); ?></h1>
      <?php if (get_field('subheader')): ?>
        <p class="subheader"><?php the_field('subheader'); ?></p>
      <?php endif; ?>
      <?php the_post(); the_content(); ?>
    </div>
  </div>
<?php get_footer(); ?>
