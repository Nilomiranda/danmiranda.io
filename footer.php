<footer>
      <div class="social-media">
        <a href="#"><i class="fab fa-github"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <div class="featured-content">
        <h2>Top content</h2>
        <div class="content-list">
          <ul>
            <?php $footer = get_page_by_title('footer'); ?>
            <?php if ( have_rows( 'featured_posts_list', $footer ) ) : while ( have_rows( 'featured_posts_list', $footer ) ) : the_row(); ?>
              <li><a href="<?php the_sub_field('featured_post_link', $footer) ?>"><?php the_sub_field('featured_post_title', $footer) ?></a></li>
            <?php endwhile; else: ; endif; ?>
          </ul>
        </div>
      </div>
      <div class="sub-form">
        <form>
          <h2>Newsletter</h2>
          <input type="email" placeholder="Your email..." required>
          <input type="submit" value="Subscribe">
        </form>
      </div>
    </footer>
  </div>
  <script src="<?php echo get_template_directory_uri() ?>/scripts/index.js"></script>
  <?php wp_footer() ?>
</body>
</html>