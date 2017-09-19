<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>ELK Mobility</title>

  <?php wp_head(); ?>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
  <nav id="header-nav" class="navbar-fixed-top">
    <div class="container">
      <a href="<?php echo home_url(); ?>" class="header-logo pull-left"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="ELK mobility Logo" /></a>
      <?php 
        $facebook = get_field('facebook', 'option');
        $linkedin = get_field('linkedin', 'option');
      ?>
      <div class="social pull-right hidden-xs">
        <?php if($facebook): ?>
          <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
        <?php endif; if($linkedin): ?>
          <a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
        <?php endif; ?>
      </div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-controls="navbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <?php
        $social_menu = '<li class="visible-xs-block"><div class="social">';
        if($facebook){ $social_media .= '<a href="' . $facebook . '" target="_blank"><i class="fa fa-facebook-official"></i></a>'; }
        if($linkedin){ $social_media .= '<a href="' . $linkedin . '" target="_blank"><i class="fa fa-linkedin"></i></a>'; }
        $social_media .= '</div></li>';

        $header_nav_args = array(
          'theme_location' => 'header-nav',
          'menu' => '',
          'container' => 'div',
          'container_class' => 'navbar-collapse collapse',
          'container_id' => 'navbar',
          'menu_class' => 'nav navbar-nav',
          'menu_id' => '',
          'echo' => true,
          'fallback_cb' => 'elkmobility_header_fallback_menu',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s' . $social_menu . '</ul>',
          'depth' => 1,
          'walker' => new wp_bootstrap_navwalker()
        );
        wp_nav_menu($header_nav_args);
      ?>

    </div>
  </nav>
  <section class="hero<?php if(is_front_page()){ echo ' hp-hero'; } ?>" style="background-image:url(<?php the_field('hero_image'); ?>); <?php the_field('hero_image_css'); ?>">
    <?php if(is_front_page()): ?>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-large.png" class="img-responsive center-block hero-logo" alt="ELK Mobility Logo" />
      <div class="container container-sm-height">
        <div class="row row-sm-height">
          <div class="col-sm-4 col-sm-height thumb-card">
            <div class="circle-img">
              <img src="<?php echo get_field('consulting_card_image') ? get_field('consulting_card_image') : get_stylesheet_directory_uri() . '/images/doctor-with-patient-tube.jpg'; ?>" class="img-responsive center-block" alt="" />
              <div class="overlay"></div>
            </div>
            <h2>Consulting</h2>
            <?php the_field('consulting_card_text'); ?>
            <div class="clearfix"></div>
            <a href="<?php the_field('consulting_card_link'); ?>" class="btn-main"><?php the_field('consulting_card_link_text'); ?></a>
          </div>
          <div class="col-sm-4 col-sm-height thumb-card">
            <div class="circle-img">
              <img src="<?php echo get_field('education_card_image') ? get_field('education_card_image') : get_stylesheet_directory_uri() . '/images/doctor-with-patient-tube.jpg'; ?>" class="img-responsive center-block" alt="" />
              <div class="overlay"></div>
            </div>
            <h2>Education</h2>
            <?php the_field('education_card_text'); ?>
            <div class="clearfix"></div>
            <a href="<?php the_field('education_card_link'); ?>" class="btn-main"><?php the_field('education_card_link_text'); ?></a>
          </div>
          <div class="col-sm-4 col-sm-height thumb-card">
            <div class="circle-img">
              <img src="<?php echo get_field('telerehab_card_image') ? get_field('telerehab_card_image') : get_stylesheet_directory_uri() . '/images/doctor-with-patient-tube.jpg'; ?>" class="img-responsive center-block" alt="" />
              <div class="overlay"></div>
            </div>
            <h2>Telerehab / Coaching</h2>
            <?php the_field('telerehab_card_text'); ?>
            <div class="clearfix"></div>
            <a href="<?php the_field('telerehab_card_link'); ?>" class="btn-main"><?php the_field('telerehab_card_link_text'); ?></a>
          </div>
        </div>
      </div>
      <a href="#missionStatement" id="scrollDown"></a>
    <?php endif; ?>
  </section>
