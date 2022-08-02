<?php get_header(); ?>
  <div class="content">
    <div class="inspection" id="inspection">
      <div class="container">
        <div class="inspection__inner">
          <div class="inspection__left">
            <h2 class="inspection__header"><?php the_field('inspection_header'); ?></h2>
            <p class="inspection__text"><?php the_field('inspection_text'); ?></p>
          </div>
          <div class="inspection__right"><?php echo do_shortcode('[sc name="inspection_form"]'); ?></div>
        </div>
      </div>
    </div>
    <div class="prices" id="prices">
      <div class="container">
        <h2 class="prices__header"><?php the_field('prices_header'); ?></h2>
        <p class="prices__subheader"><?php the_field('prices_subheader'); ?></p>
        <div class="prices-items">
          <?php echo do_shortcode('[pods name="uslugi" template="uslugi" limit="-1" orderby="post_date ASC"]'); ?>
        </div>
      </div>
    </div>
    <div class="parameters" id="parameters">
      <div class="container">
        <div class="parameters__inner">
          <h2 class="parameters__header"><?php the_field('parameters_header'); ?></h2>
          <div class="parameters__subheader"><?php the_field('parameters_subheader'); ?></div>
          <div class="parameters-items">
            <?php echo do_shortcode('[pods name="parameters" template="parameters" limit="-1" orderby="post_date ASC"]'); ?>
          </div>
          <div class="parameters-points">
            <div class="parameters__point active parameters__point_1"></div>
            <div class="parameters__point parameters__point_2"></div>
            <div class="parameters__point parameters__point_3"></div>
            <div class="parameters__point parameters__point_4"></div>
            <div class="parameters__point parameters__point_5"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="guarantees" id="guarantees">
      <div class="container">
        <h2 class="guarantees__header"><?php the_field('guarantees_header'); ?></h2>
        <p class="guarantees__subheader"><?php the_field('guarantees_subheader'); ?></p>
        <div class="guarantees-items">
          <?php echo do_shortcode('[pods name="guarantees" template="guarantees" limit="-1" orderby="post_date ASC"]'); ?>
        </div>
      </div>
    </div>
    <div class="check" id="check">
      <div class="container">
        <div class="check__inner">
          <h2 class="check__header"><?php the_field('check_header'); ?></h2>
          <p class="check__subheader"><?php the_field('check_subheader'); ?></p>
          <?php echo do_shortcode('[sc name="check_form"]'); ?>
        </div>
      </div>
    </div>
    <div class="about" id="about">
      <div class="container">
        <h2 class="about__header"><?php the_field('about_header'); ?></h2>
        <p class="about__subheader"><?php the_field('about_subheader'); ?></p>
        <div class="about__inner">
          <div class="about__image-part"><img class="about__image" src="<?php the_field('about_image'); ?>" alt=""></div>
          <div class="about__text-part">
            <?php the_field('about_text'); ?>
            <a class="about__button btn" href="<?php the_field('about_button_link'); ?>"><?php the_field('about_button_text'); ?></a>
          </div>
        </div>
      </div>
    </div>
    <div class="facts" id="facts">
      <div class="container">
        <div class="facts-items">
          <?php echo do_shortcode('[pods name="facts" template="facts" limit="-1" orderby="post_date ASC"]'); ?>
        </div>
      </div>
    </div>
    <div class="reviews" id="reviews">
      <div class="container">
        <h2 class="reviews__header"><?php the_field('reviews_header'); ?></h2>
        <p class="reviews__subheader"><?php the_field('reviews_subheader'); ?></p>
        <div class="reviews-items owl-carousel">
          <?php echo do_shortcode('[pods name="reviews" template="reviews" limit="-1" orderby="post_date ASC"]'); ?>
        </div>
        <div class="reviews-link-all"><a class="link_arrow" href="<?php the_field('reviews_link'); ?>"><?php the_field('reviews_link_text'); ?></a></div>
      </div>
    </div>
    <div class="articles" id="articles">
      <div class="container">
        <h2 class="articles__header"><?php the_field('articles_header'); ?></h2>
        <p class="articles__subheader"><?php the_field('articles_subheader'); ?></p>
        <div class="articles-items owl-carousel">
          <?php echo do_shortcode('[pods name="articles" template="articles" limit="-1" orderby="post_date ASC"]'); ?>
        </div>
        <div class="articles-link-all"><a class="link_arrow" href="<?php the_field('articles_link'); ?>"><?php the_field('articles_link_text'); ?></a></div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
