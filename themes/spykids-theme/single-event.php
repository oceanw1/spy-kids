<?php
  get_header();
  $image = get_field('add_image');
  $picture = $image['sizes']['single'];
?>

<style>
   {
    color: grey;
  }
  .subtletxt{
    font-size: 25px;
    font-weight: 100;
    font-family: Arial, Helvetica, sans-serif;
  }
  .single-header{
    font-size: 50px;
    font-weight: bold;
    margin: 20px 0;
  }
  
  .toparea{
    margin-top: 5%;
    display: flex;
    padding: 2%;
  }
  
  .subtletxt{
    display: inline-block;
  }
  </style>
  <!-- <a id="news" href="index.html"> -->
    <div style="margin: 50px 120px;">
    <div style="margin-top: 15px;
            display: flex;
            padding: 2%;
            padding-top: 0px;">
      <img src="<?php echo $picture; ?>"  height="400px" class="mainIMG">
      
      <div style="flex-basis: 50%;
                margin: 15pt;
                padding: 10pt;
                padding-left: 40px;">
        <h1 class="single-header"><?php the_title(); ?></h1>
        <h2>Posted On <?php the_time('M-j-Y'); ?>  </h2>
        <h2>Posted By  <?php the_author_posts_link(); ?>  </h2>
        <p class="subtletxt"> <?php the_excerpt(); ?></p>
        
      </div>
    </div>
    <hr>
    <div style="margin-top: 15px;
            display: flex;
            padding: 2%;
            padding-top: 0px;">
      <!-- Style the content immediatly from wordpress -->
      <p> <?php the_content(); ?></p>
    </div>
    
    
  </div>
<!-- </a> -->

<?php
echo paginate_links();
  get_footer();
?>