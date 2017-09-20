<?php get_header(); ?>
<main id="main">
  <div class="container">
    <div class="row">
      <div class="col-sm-7 col-md-8">
        <?php if(have_posts()): ?>
          <?php if(is_archive()): ?>

            <?php while(have_posts()): the_post(); ?>
              <div class="loop-item">
                <?php
                  if(has_post_thumbnail()){
                    the_post_thumbnail('full', array('class' => 'img-responsive intro-img', 'alt' => ''));
                  }
                ?>
                <h1><?php the_title(); ?></h1>
                <p class="blog-author"><?php echo get_the_date('m/d'); ?> - By <?php the_author(); ?></p>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn-main btn-alt">Read More</a>
              </div>
            <?php endwhile; wp_pagenavi(); ?>

          <?php else: ?>

            <?php while(have_posts()): the_post(); ?>
              <h1 class="page-title"></h1>
              <article>
                <?php the_content(); ?>
              </article>
            <?php endwhile; ?>

          <?php endif; ?>
        <?php endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>