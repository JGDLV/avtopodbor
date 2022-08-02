<? /* Template Name: О компании */ ?>

<?php get_header(); ?>
  <div class="content inner-content">
    <div class="container">
      <h1><?php get_field('h1_header') ? the_field('h1_header') : the_title(); ?></h1>
      <?php if (get_field('subheader')): ?>
        <p class="subheader"><?php the_field('subheader'); ?></p>
      <?php endif; ?>
      <div class="about__inner">
        <div class="about__text-part"><?php the_field('about_text_left'); ?></div>
        <div class="about__image-part">
          <img class="about__image" src="<?php the_field('about_image', 2); ?>" alt="">
        </div>
      </div>
      <h2><?php the_field('team_header'); ?></h2>
      <p class="subheader"><?php the_field('team_subheader'); ?></p>
      <?php the_field('team_text'); ?>
      <div class="team">
        <div class="team-items">
          <?php echo do_shortcode('[pods name="team" template="team" limit="-1" orderby="post_date ASC"]'); ?>
        </div>
      </div>
      <h2><?php the_field('cta_header'); ?></h2>
      <p class="subheader"><?php the_field('cta_subheader'); ?></p>
      <?php if (get_field('cta_text')): ?>
        <div class="cta">
          <div class="cta__text"><?php the_field('cta_text'); ?></div>
          <a href="#callback" class="cta__button btn"><?php the_field('cta_button'); ?></a>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php get_footer(); ?>
