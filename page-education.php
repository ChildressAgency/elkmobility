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
  <?php if(get_field('image_section_image')): ?>
    <div class="image-block">
      <img src="<?php the_field('image_section_image'); ?>" alt="" />
    </div>
  <?php endif; ?>
  <section id="courses">
    <div class="container">
      <?php the_field('courses_section_intro'); ?>
      <?php if(have_rows('course_items')): $i=1; while(have_rows('course_items')): the_row(); ?>
        <div class="course-item">
          <h1><?php echo $i; ?>.</h1>
          <h4><?php the_sub_field('course_item_title'); ?></h4>
          <?php the_sub_field('course_item_content'); ?>
        </div>
      <?php $i++; endwhile; endif; ?>
    </div>
  </section>
<?php get_footer(); ?>