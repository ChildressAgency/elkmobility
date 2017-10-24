<?php get_header(); ?>
  <section id="missionStatement">
    <div class="container">
      <span class="ekg-icon"></span>
      <h1><?php the_field('mission_statement_section_title'); ?></h1>
      <?php the_field('mission_statement_section_content'); ?>
      <a href="<?php echo home_url('about'); ?>" class="btn-main">About Us</a>
    </div>
  </section>
  <?php if(get_field('first_image_section_image')): ?>
    <div class="image-block">
      <img src="<?php the_field('first_image_section_image'); ?>" alt="" />
    </div>
  <?php endif; ?>
  <section id="learnSection">
    <div class="container-fluid container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-6 col-md-7 col-sm-height video-side">
          <?php echo do_shortcode('[goal id="142"]'); ?>
        </div>
        <div class="col-sm-6 col-md-5 col-sm-height">
          <div class="narrow-section">
            <?php the_field('video_section_content'); ?>
            <a href="<?php the_field('video_section_link'); ?>" class="btn-main"><?php the_field('video_section_link_text') ;?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php if(get_field('second_image_section_image')): ?>
    <div class="image-block">
      <img src="<?php the_field('second_image_section_image'); ?>" alt="" />
    </div>
  <?php endif; ?>
  <?php get_template_part('sections/testimonials', 'section'); ?>
  <?php if(get_field('third_image_section_image')): ?>
    <div class="image-block">
      <img src="<?php the_field('third_image_section_image'); ?>" alt="" />
    </div>
  <?php endif; ?>
<?php get_footer(); ?>