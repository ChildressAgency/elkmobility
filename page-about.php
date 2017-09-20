<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h1 class="page-title"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title(); ?></h1>
        <article>
          <?php the_content(); ?>
        </article>
      <?php endwhile; endif; ?>
    </div>
  </main>

  <?php get_template_part('sections/testimonials', 'section'); ?>

  <section id="servicesTabs">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><?php the_field('tab_1_title'); ?></a></li>
        <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><?php the_field('tab_2_title'); ?></a></li>
        <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"><?php the_field('tab_3_title'); ?></a></li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
          <div class="media">
            <div class="media-left">
              <img src="<?php the_field('tab_1_image'); ?>" class="media-object img-circle" alt="" />
            </div>
            <div class="media-body">
              <h2 class="media-heading"><?php the_field('tab_1_content_title'); ?></h2>
              <?php the_field('tab_1_content'); ?>
              <div class="inlline-btns">
                <a href="<?php the_field('tab_1_learn_more_link'); ?>" class="btn-main">Learn More</a>
                <a href="<?php echo home_url('contact'); ?>" class="btn-main">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab2">
          <div class="media">
            <div class="media-left">
              <img src="<?php the_field('tab_2_image'); ?>" class="media-object img-circle" alt="" />
            </div>
            <div class="media-body">
              <h2 class="media-heading"><?php the_field('tab_2_content_title'); ?></h2>
              <?php the_field('tab_2_content'); ?>
              <div class="inline-btns">
                <a href="<?php the_field('tab_2_learn_more_link'); ?>" class="btn-main">Learn More</a>
                <a href="<?php echo home_url('contact'); ?>" class="btn-main">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab3">
          <div class="media">
            <div class="media-left">
              <img src="<?php the_field('tab_3_image'); ?>" class="media-object img-circle" alt="" />
            </div>
            <div class="media-body">
              <h2 class="media-heading"><?php the_field('tab_3_content_title'); ?></h2>
              <?php the_field('tab_3_content'); ?>
              <div class="inline-btns">
                <a href="<?php the_field('tab_3_learn_more_link'); ?>" class="btn-main">Learn More</a>
                <a href="<?php echo home_url('contact'); ?>" class="btn-main">Contact Us</a>
              </div>
            </div>
          </div>          
        </div>
      </div>
  </section>  
<?php get_footer(); ?>