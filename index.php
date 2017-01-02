<?php //Template Name: Blog ?>
<?php get_header(); ?>
      <div class="posts">

      <?php $temp = $wp_query; $wp_query= null;
            $wp_query = new WP_Query(); $wp_query->query('showposts=50' . '&paged='.$paged);
      ?>
      <?php if($wp_query->have_posts()):?>
        <?php while($wp_query->have_posts()): $wp_query->the_post();?>
          <div class="post">
                <h1><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h1>
                <div class="post-date"><i class="fa fa-custom fa-clock-o"></i> <span><?php the_date('M d, Y'); ?></span></div>
                <p><?php the_excerpt(); ?></p>
              <hr>
          </div>
        <?php endwhile; ?>
        <?php else : ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

      </div>
   <?php get_footer(); ?>