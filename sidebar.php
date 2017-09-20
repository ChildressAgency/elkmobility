<?php
  /* Blog and Archive Pages sidebar */
?>
<div class="col-sm-4 col-md-3 col-sm-offset-1 sidebar">
  <?php 
    $recent_posts = new WP_Query(array(
      'posts_per_page' => 3,
      'post_status' => 'publish'
    ));
    if($recent_posts->have_posts()): ?>
      <div class="blog-widget">
        <?php while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
          <div class="blog-summary">
            <div class="media">
              <div class="media-left">
                <h3 class="blog-date"><?php echo get_the_date('m/d'); ?></h3>
              </div>
              <div class="media-body">
                <h3 class="media-heading"><?php the_title(); ?></h3>
                <p class="blog-author">By <?php the_author(); ?></p>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn-main btn-alt">Read More</a>
              </div>
            </div>            
          </div>
        <?php endwhile; ?>
      </div>
  <?php endif; wp_reset_postdata(); ?>

  <?php
    global $wpdb;
    $year_prev = null;
    $months = $wpdb->get_results("
      SELECT DISTINCT MONTH(post_date) as month, YEAR(post_date) as year
      FROM $wpdb->posts
      WHERE post_status = 'publish'
        AND post_type = 'post'
        AND post_date <= now()
        AND post_date >= DATE_SUB(now(), INTERVAL 3 YEAR)
      GROUP BY month, year
      ORDER BY post_date DESC");
  
    if($months): ?>
      <div class="archives-widget">
        <h4>ARCHIVES</h4>
        <div class="row">
          <?php foreach($months as $month){
            $year_current = $month->year;
            if($year_current != $year_prev){
              echo '<div class="col-xs-4"><h4 class="list-head">' . $month->year . '</h4><ul class="list-unstyled">';
            }
            
            echo '<li><a href="' . home_url() . '/' . $month->year . '/' . date("m", mktime(0,0,0,$month->month,1,$month->year)) . '">' . date_i18n("M", mktime(0,0,0,$month->month, 1, $month->year)) . '</a></li>';

            if($year_current != $year_prev){
              echo '</ul></div>';
            }

            $year_prev = $year_current;
          } ?>
        </div>
      </div>
  <?php endif; ?>

  <?php dynamic_sidebar('sidebar-1'); ?>
</div>