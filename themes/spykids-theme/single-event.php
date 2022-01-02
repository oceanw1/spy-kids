<?php
  get_header();
?>

<!-- header -->
  <section class="newsheader">
    <div class="row">
      <div class="BasicColumn">
       <h1 class="headline headline--medium headline--post-title"><?php the_title(); ?></h1>
       <p class="headline headline--small-plus">Posted By <?php the_author_posts_link(); ?> on <?php the_time('M-j-Y'); ?></p>
        <hr class="red-lineleft">
        <div class="metabox">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo site_url('/events'); ?>">
            <i class="fa fa-home" aria-hidden="true"></i> Events Home
          </a> 
        </p>
      </div>
      </div>
      
    </div>
  </section>

<!-- title + image -->
<section class="section1">
  <div class="row">
    <div class="EEcolumn">
      <h2>Ogga Booga news</h1>
    </div>
    <div class="BasicColumn">
      <img src="./images/dababy.jpg" width="500px" alt="">
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