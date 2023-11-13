<?php
/*
Template Name: About Page Template
*/
get_header();
?>
<style>
    .about-section-3 .col-md-10.offset-md-1 {
        text-align: center !important;
    }
    .about-section-3 img{
        max-width: 1000px;
        width: 100%;
        max-height: 540px;
        height: 100%;
    }
    .about-section-2 p{
        margin-bottom: 30px;
    }
    section.about-section-4 {
    height: 700px !important;
    display: flex !important;
    justify-content: flex-start !important;
    align-items: center !important;
}
</style>
<!-- Section 1 -->
<section class="section-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1">
        <h1 class="display-4">I am an entrepreneur with a deep passion for building not just brands, but dedicated teams to support them.</h1>
      </div>
    </div>
  </div>
</section>
<!-- Section 1 -->

<main id="primary" class="site-main">
    <section id="landing" class="gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="wrap">
              <h1>
                <div class="animates"><span class="rotate animate" data-animate="rotate-back">We all deserve abundance in</span></div> 
                <div class="animates"><span class="rotate animate" data-animate="rotate-back">life, and my mission is to help</span></div>
                <div class="animates"><span class="rotate animate" data-animate="rotate-back">you achieve it.</span></div></h1>
            </div>
          </div>
        </div>

        <div class="bottom animate" data-animate="fade-in-bottom">
          <div class="row">
            <div class="col-6 left">
              SCROLL DOWN
            </div>
            <div class="col-6 right">
              <ul class="socials">
                <li><a href="https://www.instagram.com/dariushsoudiofficial/" target="_blank" class="instagram"></a></li>
                <li><a href="https://www.youtube.com/@DariushSoudi" target="_blank" class="youtube"></a></li>
                <li><a href="https://www.linkedin.com/in/dariushsoudi" target="_blank" class="linkedin"></a></li>
                <li><a href="https://www.tiktok.com/@dariushsoudiofficial" target="_blank" class="tiktok"></a></li>
                <li><a href="https://www.facebook.com/DariushSoudiOfficial" target="_blank" class="facebook"></a></li>
                <li><a href="https://twitter.com/dariushspeaks" target="_blank" class="twitter"></a></li>
                <li><a href="https://www.threads.net/@dariushsoudiofficial" target="_blank" class="threads"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    
<section class="thankyou-section-2 about-section-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1">
        <h1>My Story</h1>
        <p>I believe that people are the foundation of every successful business endeavor. When your company is able to build a strong team overflowing with passion, creativity, and love for what they do, you can do anything.</p>
        <p>For more than 3 decades I have been on a journey of running my own business specializing in sales and marketing in industries including telecommunications, consumer goods and services, and health and beauty. My goal is to educate and inspire individuals and businesses to achieve abundance.</p>
        <p>My desire is for them to innovate, discover new avenues for success, invest in their people, increase their client base, improve clientele relationships, and ultimately become the partner of choice in their respective industries.</p>
        <p>Individuals tend to complicate their businesses, but I believe that it can and should be made simple. While business is about making profits, we should adhere to our values.</p>    
      </div>
    </div>
  </div>
</section>

<section id="my-story" class="pt">
      <div class="container">
        <div class="revealscroll" id="scrollWrap">
          <div class="row">
            <div class="col-lg-4 offset-lg-1 animate" data-animate="fade-in-left">
              <div class="revealtexts">
                <div class="word"></div>
                <?php $string = '"We practice, plan, implement and take action on our skills, while our enemies are resting. As gladiators we battle every day so one day we have a life of abundance."'; ?>
                  <?php
                      $words = explode(' ', strip_tags($string));
                      for($x=0;$x<count($words);$x++){
                          $letters = str_split($words[$x]);
                          echo '<div class="word">'.$words[$x].'</div>&nbsp;';
                              // for($y=0;$y<count($letters);$y++){
                              //     echo '<span>'.$letters[$y].'</span>';
                              // }
                          //echo '</div>&nbsp;';
                      }
                  ?>
                <br/><br/>     
              </div>
            </div>
            <div class="col-lg-7 right animate" data-animate="fade-in">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dariush-soudi.png">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about-section-3">
        <div class= "container">
            <div class= "row">
                <div class="col-md-10 offset-md-1">
                    <!-- Thumbnail Image -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-video-thumbnail.png" alt="Video Thumbnail" id="thumbnail" onclick="playVideo()">
                </div>
            </div>    
        </div>
    </section>

    <section class="about-section-4">
        <div class="container">
            <div class="row">
            <div class="col-lg-6 offset-lg-1">
                <h1 class="sm-pb">My Approach</h1>
                <p class="graytext">I believe that people are the foundation of every successful business endeavor. When your company is able to build a strong team overflowing with passion, creativity, and love for what they do, you can do anything.</p>
                <p class="graytext">For more than 3 decades I have been on a journey of running my own business specializing in sales and marketing in industries including telecommunications, consumer goods and services, and health and beauty. My goal is to educate and inspire individuals and businesses to achieve abundance.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="news" class="pt white-bg pb">
      <div class="container animate" data-animate="fade-in-top">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="section-heading black-text">Follow on Instagram</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mb-60">
            <div id="instagram-carousel" class="mt-60 carousel line-carousel">
              <div class="slide">
                <a href="https://www.instagram.com/dariushsoudiofficial/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/instagram-1.jpg" width="100%"></a>
              </div>
              <div class="slide">
                <a href="https://www.instagram.com/dariushsoudiofficial/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/instagram-2.jpg" width="100%"></a>
              </div>
              <div class="slide">
                <a href="https://www.instagram.com/dariushsoudiofficial/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/instagram-3.jpg" width="100%"></a>
              </div>
              <div class="slide">
                <a href="https://www.instagram.com/dariushsoudiofficial/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/instagram-4.jpg" width="100%"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 tinytext uppercase black-text">
				  Follow on Other Platforms
          </div>
          <div class="col-lg-6">
            <ul class="socials">
                <li><a href="https://www.instagram.com/dariushsoudiofficial/" target="_blank" class="instagram"></a></li>
                <li><a href="https://www.youtube.com/@DariushSoudi" target="_blank" class="youtube"></a></li>
                <li><a href="https://www.linkedin.com/in/dariushsoudi" target="_blank" class="linkedin"></a></li>
                <li><a href="https://www.tiktok.com/@dariushsoudiofficial" target="_blank" class="tiktok"></a></li>
                <li><a href="https://www.facebook.com/DariushSoudiOfficial" target="_blank" class="facebook"></a></li>
                <li><a href="https://twitter.com/dariushspeaks" target="_blank" class="twitter"></a></li>
                <li><a href="https://www.threads.net/@dariushsoudiofficial" target="_blank" class="threads"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    

<?php
get_footer();