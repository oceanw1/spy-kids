<?php
  get_header();
?>

<!-- header -->
  <section class="newsheader">
    <div class="row">
      <div class="BasicColumn">
       <h1 class="headline headline--medium headline--post-title"><?php the_title(); ?></h1>
        <div class="metabox">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>">
            <i class="fa fa-home" aria-hidden="true"></i> Blog Home
          </a> 
          <span class="metabox__main">
            Posted by <?php the_author_posts_link(); ?> on <?php the_time('M-j-Y'); ?> in <?php echo get_the_category_list(',  '); ?>
          </span>
        </p>
      </div>
        <hr class="red-lineleft">
      </div>
      
    </div>
  </section>

<!-- title + image -->
<section class="section1">
  <div class="row">
    <div class="EEcolumn">
      <h2><?php the_title(); ?></h1>
    </div>
    <div class="BasicColumn" >
      <!-- <img src="<?php echo get_theme_file_uri('/images/dababy.jpg') ?>." width="500px" alt="">  -->
    </div>
  </div>
  <div class="row">
    <div class="text">
      <p><?php the_content(); ?> </p>
    </div>
  </div>

</section>

<?php
echo paginate_links();
  get_footer();
?>