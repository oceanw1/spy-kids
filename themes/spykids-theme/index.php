<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php get_header(); ?>
</head>
<body>


<style type="text/css">
  .dates{
    flex-basis: 0%;
    font-size: 30px;
    font-family: 'Times New Roman', Times, serif;
  }
  .normal{
    height: 2px;
    margin: 10px 0;
    background-color: rgb(223, 166, 97);
    width: auto;
  }
  .pastnewstitle{
    text-decoration:none;
    color: black;
    font-weight: 650;
    font-size: 30px;
  }
  .pastnewstitle:hover {
    text-decoration:underline;
    transition: 0.5s;
  }
  .pastnewsdesc{
    font-size: 20px;
  }
  .news{
    padding: 0; 
    display:flex; 
    width: 80%;
  }
  .Headernews {
    min-height: 200px;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 40px 0;
    background-image: linear-gradient(#ffdbd5, #e95f62);
    color: black;
    font-size: 70px;
    width: 100%;
  }
  #separator {
    width: 90%;
  }
  .red-line {
    width: 120px;
    height: 5px;
    background-color: maroon;
    color: maroon;
    margin: 30px auto;
  }

  /* CODE FOR THE FILTER */
  .column {
  flex-basis: 50%;
  margin: 15pt;
  padding: 10pt;
  padding-left: 40px;
  }

</style>
<hr id="separator" class="red-line">
<div class="Headernews">
        Past News
</div>
<div style="margin: 50px 120px; justify-content:center;">
  <!-- <hr style="height: 5px; background-color: maroon;">
  <div class="Headernews">
    Past News
  </div> -->

    <div style="width: 1400px;">
      <div style="flex-basis: 70%; margin: 15px;">
    <script>
      function toggle(elm){
    function unActive(elm, state) {
        if (state) {
            elm.previousElementSibling.classList.remove('Afilter-item');
        } else  {
            elm.previousElementSibling.classList.add('Afilter-item');
        }
        elm.classList.remove(state?'active-filter':'unactive-filter');
        elm.classList.add(state?'unactive-filter':'active-filter');
    }
    switch(elm.classList[1]) {
        case 'unactive-filter':
            unActive(elm,false);
        break;
        case 'active-filter':
            unActive(elm,true);
            elm.querySelectorAll('.active-filter').forEach(function(item,index,array) {
                unActive(item,true);
            })
        break;
    }
}
    </script>

    <!-- THE PAGES -->
      <?php 
        $homepagePosts = new WP_Query(array(
          'posts_per_page' => 10
        ));
        while($homepagePosts->have_posts()){
          $homepagePosts->the_post();
          $image = get_field('add_image');
          $picture = $image['sizes']['small'];
            ?> 
            <div class="news">
              <img src="<?php echo $picture; ?>" alt="" style="margin: 30px 20px; width:300px; border-radius:5px; max-height:250px;">
              <div class="column pastnewstxt" style="width: 70%; text-align:left;">
                <a class="pastnewstitle" href="<?php the_permalink();?>"><?php the_title();?></a>
                <h3>Posted On <?php the_time('M-j-Y'); ?></h3>
                <h3>By: <?php the_author_posts_link(); ?></h3>
                <p class="pastnewsdesc"><?php if (has_excerpt()) {
                  echo get_the_excerpt();
                } else {
                  echo wp_trim_words(get_the_content(), 18);
                } ?></p>
                <hr class="normal">
              </div>
            </div>
          <?php
        }
        ?>
    </div>
  </div>
</div>

<?php
get_footer();
?>