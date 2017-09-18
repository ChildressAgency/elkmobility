  <?php get_template_part('sections/contact-form', 'section'); ?>
  <footer>
    <div class="container">
      <a href="<?php echo home_url(); ?>" class="footer-logo pull-left"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="ELK mobility Logo" /></a>
      <?php
        $facebook = get_field('facebook', 'option');
        $linkedin = get_field('linkedin', 'option'); 
      ?>
      <div class="social pull-right">
        <?php if($facebook): ?>
          <a href="<?php echo $facebook; ?>"><i class="fa fa-facebook-official"></i></a>
        <?php endif; if($linkedin): ?>
          <a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a>
        <?php endif; ?>
      </div>
      <ul class="nav navbar-nav">
        <li<?php if(is_front_page()){ echo ' class="active"'; } ?>><a href="<?php echo home_url(); ?>">Home</a></li>
        <li<?php if(is_page('about')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('about'); ?>">About</a></li>
        <li<?php if(is_page('consulting')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('consulting'); ?>">Consulting</a></li>
        <li<?php if(is_page('education')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('education'); ?>">Education</a></li>
        <li<?php if(is_page('telerehab')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('telerehab'); ?>">Telerehab</a></li>
        <li<?php if(is_home()){ echo ' class="active"'; } ?>><a href="<?php echo home_url('blog'); ?>">Blog</a></li>
      </ul>
    </div>
    <div class="copyright">
      <p>&copy;<?php echo date('Y'); ?> ELK Mobility</p>
      <p>website create by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>