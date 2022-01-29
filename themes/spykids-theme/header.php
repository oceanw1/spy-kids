<!DOCTYPE html>
<html>
<head>
  <!-- <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <script type="text/javascript">
    function slideout(elm,rev) {
    elm.style.opacity='1';
    elm.style.left='0';
    elm.style.left=rev?'-80vw':'80vw';
    setTimeout(function() {
        elm.style.transition='0s';
        elm.style.left=rev?'80vw':'-80vw';
        setTimeout(function() {elm.style.transition='.75s';elm.style.opacity='0';},50);
    },750);
}

function slidein(elm,rev) {
    elm.style.opacity='1';
    elm.style.transition='0s';
    elm.style.left=rev?'80vw':'-80vw';
    setTimeout(function() {
        elm.style.transition='.75s';
        elm.style.left='0';
    },10);
}

var banners = ["#banner-1","#banner-2","#banner-3","#banner-4"];
var curBann = 0;
var sBLock = false;

function func_c(mode) {
    if (!sBLock) {
        sBLock=true;
        setTimeout(function() {sBLock=false;},800);
        let goingOut = document.querySelector(banners[curBann]);
        let goingIn = 0;
        if (!mode) {
            curBann = (curBann==banners.length-1)?0:curBann+1;
            goingIn = document.querySelector(banners[curBann]);
            slidein(goingIn);
            setTimeout(slideout,10,goingOut);
        } else {
            curBann=(curBann==0)?banners.length-1:curBann-1;
            goingIn = document.querySelector(banners[curBann]);
            slidein(goingIn,true);
            setTimeout(slideout,10,goingOut,true);
        }
    }
}
  </script>
</head>
<body>
<header class="Header">
    <style>
        .Header{
            background-color: #f8c19a;
        }
    </style>
    <nav>
        <a href="index.html"><img src="<?php echo get_theme_file_uri("./images/our-year-logo.jpeg") ?>"alt="logo"></a>
        <div class="nav-links alterHome" id="NavLinks">
            <ul>
            <li><a href="/">Home</a></li>
            <li><a href="<?php echo site_url('/about-us') ?>">About</a></li>
            <li><a href="<?php echo site_url('/blog/') ?>">News</a></li>
            <li ><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>
            <li><a target="_blank" href="https://sites.google.com/view/ouryearinsidebss/home">Gallery</a></li>
            <!-- <li><a href="login.html">Contact</a></li> -->
            </ul>
        </div>
    </nav>
    <div class="HomeTextBox">
    <h1>Our Year Inside</h1>
      <h3>
        <br>our community, our year!
      </h3>
      <a href="login.html" class="HomeHeroButton">Contribute content to our site!</a>
    </div>
</header>


