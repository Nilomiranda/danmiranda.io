<?php get_header() ?>
      <div class="content-wrapper">
        <div class="post-container">
          <img class="blog-image" src="<?php the_field('post_thumbnail') ?>" alt="Featured image">
          <article>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
              <h1 class="post-title"><?php the_title() ?></h1>
              <div class="post-data">
                <h2 class="post-author"><?php the_author() ?></h2>
                <h3 class="post-time"><?php the_date() ?></h3>
              </div>
              <p class="post-text"><?php the_content() ?></p>
            <?php endwhile; else: endif?>
          </article>
        </div>
      </div>
<?php get_footer() ?>
