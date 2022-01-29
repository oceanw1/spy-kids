<?php
  get_header();
?>





 <!-- Section 2 -->
<section id="news-2" class="row">
    <div class="HomeColumn">
        <hr class="red-lineleft">
        <h1 class="NewsHeader">Upcoming Events</h1>
        <ul class="Events-bullet">
            <?php 
                $homepageEvents = new WP_Query(array(
                    'posts_per_page' => 4,
                    'post_type' => 'event',
                ));
                while($homepageEvents->have_posts()){
                    $homepageEvents->the_post();
                    ?>
                    <div class="event-summary">
                        <div class="event-summary__content"> 
                             <a class="event-summary__date t-center" href="./single.html">
                                <span class="event-summary__month"><?php the_time('M');?></span>
                                <span class="event-summary__day"><?php the_time('d');?></span>
                            </a>
                            <!-- <p><?php for_location ?></p> -->
                            <li><a href="<?php the_permalink();?>" class="Events-bullet1"><?php the_title();?></a></li>
                            <hr class="ul_break">
                        </div>
                    </div>
                    <?php
                }
            ?>
            <!-- <li><a href=""class="Events-bullet1">Event 2</a></li>
            <hr class="ul_break">
            <li><a href=""class="Events-bullet1">Event 3</a></li>
            <hr class="ul_break">
            <li><a href=""class="Events-bullet1">Event 4</a></li>
            <hr class="ul_break">
            <li><a href=""class="Events-bullet1">Event 5</a></li>
            <hr class="ul_break"> -->
        </ul>
    </div>
    <div class="HomeColumn">
        <hr class="red-line">
        <h1 class="NewsHeader">Extra News for the Day </h1>
        <p class="author"><b>Rafi Permadi</b></p>
        <p class="caption">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century.</p>
    </div>
    <div class="HomeColumn"> <img src="<?php echo get_theme_file_uri('/images/download.jpg') ?>" style="width:100%; height: auto;"></div>
</section>



<!-- Section 3 -->
<section id="news-3" class="row">
    <div class="HomeColumn"> <img src="<?php echo get_theme_file_uri('/images/download.jpg') ?>" style="width:100%; height: auto;"></div>
    <div class="HomeColumn">
        <hr class="red-line">
        <h1 class="NewsHeader">Extra Extra News for the Day </h1>
        <p class="author"><b>Rafi Permadi</b></p>
        <p class="caption">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century.</p>
    </div>
    <div class="HomeColumn">
    <hr class="red-lineright">
    <h2 style="text-align: right;">More News</h2>
    <div class="row">
        <div class="EEcolumn" style="flex-basis: 62%;">
            <p>Ships sale</p>
            <p class="author">Rafi Permadi</p>
        </div>
        <div class="EEcolumn">
            <img src="<?php echo get_theme_file_uri('/images/ships2.jpg') ?>" style="width: 100px; margin-left: auto; margin-right: 0;">
        </div>
    </div>
    <div class="row">
        <div class="EEcolumn" style="flex-basis: 62%;">
            <p>Ships sale</p>
            <p class="author">Rafi Permadi</p>
        </div>
        <div class="EEcolumn">
            <img src="<?php echo get_theme_file_uri('/images/ships2.jpg') ?>" style="width: 100px; margin-left: auto; margin-right: 0;">
        </div>
    </div>
 </section>


<!-- CALL TO ACTION -->
  <section class="cta">
    <div id="banner-4" class="sliding-banner">
        <h1>There are only 2 sexes</h1>
        <a href="login.html" class="hero-btn">The one I had with your dad, and the one I had with your mom</a>
    </div>
    <div id="banner-3" class="sliding-banner">
        <h1>This 3rd banner is wibu</h1>
        <a href="login.html" class="hero-btn">Jitsu wa watashi itu 3rd banner desu.</a>
    </div>
    <div id="banner-2" class="sliding-banner">
        <h1>This is 2 banner</h1>
        <a href="login.html" class="hero-btn">Sign in / Log in</a>
    </div>
    <div id="banner-1" class="sliding-banner">
        <h1>Wanna write your own news?</h1>
        <a href="login.html" class="hero-btn">Sign in / Log in</a>
    </div>
    <a class="slideban" style="left: 20pt;" onclick="func_c(1)"><</a>
    <a class="slideban" style="right: 20pt;" onclick="func_c(0)">></a>
</section>


</body>
</html>

<?php
  get_footer();
?>