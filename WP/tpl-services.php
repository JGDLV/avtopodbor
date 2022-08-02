<? /* Template Name: Усулги */ ?>

<?php get_header(); ?>
  <div class="content inner-content">
    <div class="container">
      <h1><?php get_field('h1_header') ? the_field('h1_header') : the_title(); ?></h1>
      <?php if (get_field('subheader')): ?>
        <p class="subheader"><?php the_field('subheader'); ?></p>
      <?php endif; ?>
      </div>
      <div class="prices" id="prices">
        <div class="container">
          <h2 class="prices__header"><?php the_field('prices_header'); ?></h2>
          <p class="prices__subheader"><?php the_field('prices_subheader'); ?></p>
          <div class="prices-items">
            <?php echo do_shortcode('[pods name="uslugi" template="uslugi_inner" limit="-1" orderby="post_date ASC"]'); ?>
          </div>
        </div>
      </div>
      <div class="container">
      <h2><?php the_field('second_header'); ?></h2>
      <p class="subheader"><?php the_field('second_subheader'); ?></p>
      <div class="three-items">
      <?php 
      $fields = CFS()->get( 'items' );
      if( ! empty($fields) ): foreach ( $fields as $field ) { ?>
        <div class="three-items__item d-f">
          <div class="three-items__item-image-part">
            <img src="<?php echo $field['image']; ?>" alt="" class="three-items__item-image">
          </div>
          <div class="three-items__item-text-part">
            <div class="three-items__item-header"><?php echo $field['text']; ?></div>
            <div class="three-items__item-price"><?php echo $field['price']; ?></div>
          </div>
        </div>
      <?php }; endif;?>
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
