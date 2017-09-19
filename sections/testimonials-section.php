<?php if(have_rows('testimonials', 'option')): ?>
  <section id="testimonials"<?php if(is_front_page()){ echo 'class="hp-testimonials"'; } ?>>
    <div class="container">
      <h1>Testimonials</h1>
      <div class="testimonial-container">
        <ul id="testimonialSlider">
          <?php while(have_rows('testimonials', 'option')): the_row(); ?>
            <li>
              <?php the_sub_field('testimonial'); ?>
              <div class="testimonial-slider-footer">
                <div class="media">
                  <div class="media-left">
                    <img src="<?php echo get_sub_field('testimonial_author_image') ? get_sub_field('testimonial_author_image') : get_stylesheet_directory_uri() . '/images/doctor-with-patient-tube.jpg'; ?>" class="media-object img-circle" alt="" />
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading"><?php the_sub_field('testimonial_author'); ?></h3>
                    <p><?php echo get_sub_field('testimonial_author_city') ? get_sub_field('testimonial_author_city') . '<br />' : ''; echo get_sub_field('testimonial_author_position'); ?></p>
                  </div>
                </div>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>
        <a href="#" class="slide-control" id="goToPrevSlide"></a>
        <a href="#" class="slide-control" id="goToNextSlide"></a>
      </div>
    </div>
  </section>
<?php endif; ?>