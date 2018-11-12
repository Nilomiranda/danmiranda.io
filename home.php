<?php get_header() ?>
    <div class="content-wrapper">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
        <div class="post-card">
          <img class="featured-image" src="<?php the_field('post_thumbnail') ?>" alt="Featured image">
          <div class="post-card-content">
            <h2><?php the_title() ?></h2>
            <h3 class="post-preview">
              <?php the_excerpt() ?>
            </h3>
            <a class="follow-content-button" href="<?php echo get_permalink() ?>">Read more</a>
          </div>
        </div>
      <?php endwhile; else: endif ?>
    </div>
<?php get_footer() ?>
