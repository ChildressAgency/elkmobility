  <section id="contact">
    <div class="container">
      <h1>Contact</h1>
      <div class="row">
        <div class="col-sm-6">
          <div class="contact-info">
            <p>Phone<span><?php the_field('phone_number', 'option'); ?></span></p>
            <p>Email<span><?php the_field('email', 'option'); ?></span></p>
            <?php
              $facebook = get_field('facebook', 'option');
              $linkedin = get_field('linkedin', 'option');
            ?>
            <div class="social">
              <?php if($facebook): ?>
                <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
              <?php endif; if($linkedin): ?>
                <a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <?php echo do_shortcode('[contact_form]'); ?>
        </div>
      </div>
    </div>
  </section>
