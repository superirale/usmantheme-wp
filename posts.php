<?php get_header(); ?>
      <div class="posts">
        <div class="post">
          <?php if(have_posts()):?>
            <?php while(have_posts()): the_post();?>
              <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
              <div class="post-date"><i class="fa fa-custom fa-clock-o"></i> <span>Dec 22, 2016</span></div>

              <?php the_content(); ?>

            <hr>
          </div>
          <?php endwhile; ?>
          <?php else : ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          <?php endif; ?>

      </div>
   <?php get_footer(); ?>