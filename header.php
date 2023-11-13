<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dariush_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ds-logo.ico">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KPD52TD');</script>
<!-- End Google Tag Manager -->

    <!-- Add this script to load the reCAPTCHA library -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


  
    <?php wp_head(); ?>
</head>
<style>
  .black-bg #header a{
    color: #ffffff
  }
  .white-clr #header a{
    color: #000000;
  }
  @media only screen and (min-width: 991px) {
    #navbutton img{
      display: none !important;
    }
  }
  @media only screen and (max-width: 990px) {
    a#navbutton img {
    padding-top: 20px !important;
}
  }
  @media (min-width:992px) and (max-width:1199px){
  ul#menu-header-menu li {
    margin-left: 20px !important;
    margin-right: 20px !important;
}
ul#menu-header-menu {
    margin: 0px -30px !important;
}
  }

  
</style>

<body class="<?php echo is_front_page() ? 'black-bg' : 'white-clr'; ?>">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPD52TD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php wp_body_open(); ?>
<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-9 col-10"><a href="https://dariushsoudi.com" id="mainlogo" class="animate" data-animate="fade-in-top">Dariush Soudi</a></div>
          <div class="col-lg-8 col-md-3 col-2 right">
            <!-- <ul class="animate" data-animate="fade-in-top">
              <li class="animate" data-animate="fade-in-top-2"><a href="https://dariushsoudi.com/staging/about">About</a></li>
              <li class="animate" data-animate="fade-in-top-2"><a href="https://dariushsoudi.com/staging/podcast-listing">Podcasts</a></li>
              <li class="animate" data-animate="fade-in-top-2"><a href="https://dariushsoudi.com/staging/newsletter">Newsletter</a></li>
              <li class="animate" data-animate="fade-in-top-2"><a href="https://dariushsoudi.com/staging/article-listing">Articles</a></li>
              <li class="animate" data-animate="fade-in-top-2"><a href="https://dariushsoudi.com/staging/speaking">Speaking</a></li>
              <li class="animate" data-animate="fade-in-top-2"><a href="https://dariushsoudi.com/staging/contact/">Contact</a></li>
            </ul> -->

            <?php
              // Loading WordPress Custom Menu (theme_location).
              wp_nav_menu(
                array(
                  'container'      => '',
                  // 'menu_id' => 'header-menu',
                  // 'menu_class'     => 'navbar-nav'
                )
              );
            ?>
         
         
                <a href="#" id="navbutton">
              <span></span>
              <span></span>
              <span></span>
            </a>
             
            
          </div>
        </div>
      </div>
    </header>
