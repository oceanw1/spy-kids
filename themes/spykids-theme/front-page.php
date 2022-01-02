<?php
  get_header();
?>

      <!-- <div class="HomeTextBox">
      <h1>Binus Big Penis school</h1>
      <p>This school so good. Once I vandalised the bathrooms and shit in the sink.
        <br>eum eos aliquid dignissimos fugit magnam commodi iste.
      </p><a href="login.html" class="HomeHeroButton">Sign up to add news!</a>
    </div>
</header> -->

  
<!-- Section 1 -->
<section id="news-1" class="row">
    <a href="news.html" class="Events-bullet1 row">
        <div class="HomeColumn">
            <div style="width: 100%; height: 100%;">
                <img src="<?php echo get_theme_file_uri('/images/dababy.jpg') ?>" style="width: 300px; margin: auto;">
            </div>
        </div>
        <div class="HomeColumn" style="flex-basis: 62%;">
            <hr class="red-line">
            <h1 class="NewsHeader">Top News</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </a>
</section>

 <!-- Section 2 -->
<section id="news-2" class="row">
    <div class="HomeColumn">
        <hr class="red-lineleft">
        <h1 class="NewsHeader">Events</h1>
        <ul class="Events-bullet">
            <li><a href="" class="Events-bullet1">Event 1</a></li>
            <hr class="ul_break">
            <li><a href=""class="Events-bullet1">Event 2</a></li>
            <hr class="ul_break">
            <li><a href=""class="Events-bullet1">Event 3</a></li>
            <hr class="ul_break">
            <li><a href=""class="Events-bullet1">Event 4</a></li>
            <hr class="ul_break">
            <li><a href=""class="Events-bullet1">Event 5</a></li>
            <hr class="ul_break">

        </ul>
    </div>
    <div class="campus-col" style="flex-basis: 50%;">
        <a href="news.html"  style="width: 50%;">
        <img src="<?php echo get_theme_file_uri('/images/dababy.jpg') ?>"  alt="" style="width: 100%; margin: auto;">
        <div class="layer">
            <h3>DABABY NEWS 
                <br>
                <br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit officia quaerat ad sed facere recusandae
                    suscipit, accusantium blanditiis temporibus repellendus.
            </h3>
        </div>
        </a>
    </div>
</section>



<!-- Section 3 -->
<section id="news-3" class="row">
    <div class="HomeColumn"> <img src="<?php echo get_theme_file_uri('/images/download.jpg') ?>" style="width:100%; height: auto;"></div>
    <div class="HomeColumn">
        <hr class="red-line">
        <h1 class="NewsHeader">Extra Extra News for the Day </h1>
        <p class="author"><b>Rafi Permadi</b></p>
        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:</p>
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
    <h1>Wanna write your own news?</h1>
    <a href="login.html" class="hero-btn">Sign in / Log in</a>

  </section>


</body>
</html>

<?php
  get_footer();
?>