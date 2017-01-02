<?php get_header(); ?>
     <div class="blog-post">
     <?php while ( have_posts() ) : the_post();?>
        <div class="post-header">
            <h1><?php the_title();?></h1>
            <div class="post-date">
              <i class="fa fa-custom fa-clock-o"></i>
              <span><?php the_date('M d, Y'); ?></span></div>
        </div>
        <div class="post-body">
            <p><?php the_content(); ?></p>
        <hr>

        </div>
      <?php endwhile; ?>
        <p class="social-share">
            Please share, if you find this article helpful.
            <br><br>

            <a class="twitter-share-button"
              href="https://twitter.com/intent/tweet?text=<?php the_title();?>"
              data-size="large"><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            Tweet</a>
        </p>


  <?php get_footer();?>