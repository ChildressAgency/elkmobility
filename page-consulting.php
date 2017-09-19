<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h1 class="page-title text-center"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title(); ?></h1>
        <article>
          <?php the_content(); ?>
        </article>
      <?php endwhile; endif; ?>
    </div>
  </main>
  <section id="services" style="background-image:url(<?php the_field('services_section_bg_image'); ?>); <?php the_field('services_section_bg_image_css'); ?>">
    <div class="services-bg">
      <div class="container">
        <h1>Services</h1>
        <div class="row">
          <div class="col-sm-4">
            <div class="service-item">
              <h1>1.</h1>
              <p><?php the_field('service_1_content'); ?></p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="service-item">
              <h1>2.</h1>
              <p><?php the_field('service_2_content'); ?></p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="service-item">
              <h1>3.</h1>
              <p><?php the_field('service_3_content'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="calendar">
    <div class="container">
      <?php the_field('calendar_section_intro'); ?>
      <div class="embed-responsive embed-responsive-4by3">
        <?php the_field('calendar_section_embed_code'); ?>
      </div>
      <p class="text-center">Contact me directly at <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a> for an Executive Prospectus</p>
    </div>
  </section>

<?php get_footer(); ?>