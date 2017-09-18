<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php 
        if(have_posts()): while(have_posts()): the_post();
          if(has_post_thumbnail()){
            the_post_thumbnail('full', array('class' => 'img-responsive intro-img', 'alt' => ''));
          } ?>
          <div class="row">
            <div class="col-sm-7 col-md-8">
              <h3 class="blog-date"><?php echo get_the_date('d\/m'); ?></h3>
              <h1><?php the_title(); ?></h1>
              <article>
                <?php the_content(); ?>
              </article>
              <div class="author-meta">
                <?php $author_id = get_the_author_meta('ID'); ?>
                <div class="media">
                  <div class="media-left">
                    <?php echo get_avatar($author_id, 80); ?>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading"><?php the_author(); ?></h3>
                    <p><?php echo get_field('user_city', 'user_' . $author_id) ? get_field('user_city', 'user_' . $author_id) . '<br />' : ''; ?><br /><?php the_field('user_title', 'user_' . $author_id); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php get_sidebar(); ?>
          </div>
      <?php endwhile; endif; ?>
    </div>
  </main>
  <?php get_template_part('sections/testimonials', 'section'); ?>
<?php get_footer(); ?>