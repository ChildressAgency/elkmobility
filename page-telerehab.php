<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h1 class="page-title text-center"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title(); ?></h1>
        <article>
          <?php the_content(); ?>
      <?php endwhile; endif; ?>
        <h3 style="color:#3e394f;">Equipment Required:</h3>
        <div class="row">
          <div class="col-sm-4">
            <div class="eq-icon eq-screens">
              <span>Laptop, Computer Screen, Or TV Screen</span>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="eq-between" style="font-size:40px;">
              <span>+</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="eq-icon eq-connection">
              <span>With Wifi or DSL Internet Connection</span>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="eq-between">
              <span>OR</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="eq-icon eq-phones">
              <span>A phone that can take video or have Wifi internet access during the time of the session</span>
            </div>
          </div>
        </div>
      </article>
    </div>
  </main>
  <?php if(get_field('image_section_image')): ?>
    <div class="image-block">
      <img src="<?php the_field('image_section_image'); ?>" alt="" />
    </div>
  <?php endif; ?>
  <section id="calendar">
    <div class="container">
      <?php the_field('calendar_section_intro'); ?>
      <div class="embed-responsive embed-responsive-4by3">
        <?php the_field('calendar_section_embed_code'); ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>