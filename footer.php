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
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
              <li><a href="#"><?php the_title() ?></a></li>
            <?php endwhile; else: endif;?>
            <!--<li><a href="#">Post title</a></li>
            <li><a href="#">Post title</a></li>
            <li><a href="#">Post title</a></li>
            <li><a href="#">Post title</a></li>-->
          </ul>
        </div>
      </div>
      <div class="sub-form">
        <form>
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