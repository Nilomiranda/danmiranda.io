<?php
  // Template Name: Default page
?>

<?php get_header() ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="page-content">
            <h1><?php the_title() ?></h1>
            <div class="page-content-text">
              <?php the_content() ?>
            </div>
          </div>
        <?php endwhile; endif ?>
<?php get_footer() ?>