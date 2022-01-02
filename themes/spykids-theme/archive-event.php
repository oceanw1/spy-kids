<?php
 get_header();
 ?>

<!-- header -->
<section class="newsheader">
    <div class="row">
        <div class="BasicColumn" style="margin-bottom: 0;">
            <h1 class="headline headline--medium headline--post-title">Our Upcoming Events!</h1>
            <hr class="red-line">
            <!-- <h1 class="headline headline--small headline--post-title">Our Previous Events!</h1> -->
        </div>
    </div>
</section>


<!-- All the content -->
<section class="main-content row" style="margin-top: 0;">

    <!-- 6 News articles -->
    <div id="page-of"  class="column">
    <?php
      $today = date('Ymd');
      $archiveEvents = new WP_Query(array(
        'orderby' => 'title',
        'order' => 'meta_value',
        'meta_key'=>'event_post_date',
        'post_type' => 'event',
        'meta_query'=>array(
          array(
            'key' => 'event_post_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric'
          )
        )
      ));

      while($archiveEvents->have_posts()) {
        $archiveEvents->the_post();?>
        <div class="post-item">
          <h1 class="headline headline--small headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="metabox">
              <p>Posted By <?php the_author_posts_link(); ?> on <?php 
                $eventDate = new DateTime(get_field('event_post_date'));
                echo $eventDate->format('M-j-Y');
              ?></p>
            </div>
            <div class="generic-content">
              <?php the_excerpt(); ?>
              <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue Reading</a></p>
            </div>
        </div>

        
  
    <?php  }
    echo paginate_links();
    ?>
  <hr class="section-break">
      <p>Looking for the Past Events? <a href="<?php echo site_url('/past-events') ?>">Check out our past events</a></p>
</section>

<?php
get_footer();
?>
