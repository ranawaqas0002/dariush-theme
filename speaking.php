<?php
/*
Template Name: Speaking Template
*/
get_header();
?>

<style>
  h2.medium-heading.mb-60.graytext{
    font-weight: 300 !important;
  }
    .speaking-sec-5 video {
    max-width: 1000px !important;
    width: 100% !important;
}
    .speaking-sec-heading h1{
        font-size: 42px !important;
    }
    .speaking-sec-heading h4 {
    font-size: 28px !important;
    font-weight: 300 !important;
}
    .speaking-sec-4 ul {
        list-style: none !important;
        padding-left: 0px !important;
}
li.left {
    font-size: 26px !important;
}
li.right {
    text-transform: uppercase;
    margin-bottom: 90px !important;
    margin-top: 5px !important;
    font-size: 16px !important;
    letter-spacing: 3px !important;
    color: #ffffff;
    opacity: 0.5;
}

@media screen and (max-width: 768px) {
  h2.medium-heading.mb-60.graytext {
    font-size: 21px !important;
    line-height: 28px !important;
}
.medium-heading.mb-60.graytext.animates {
    font-size: 21px !important;
    line-height: 26px !important;
}
}

    @media screen and (max-width: 567px) {
        .speaking-sec-heading h1{
            font-size: 30px !important;
        }
        .speaking-sec-heading h4 {
    font-size: 21px !important;
}
li.left {
    font-size: 22px !important;
}
li.right {
    margin-bottom: 60px !important;
    margin-top: 5px !important;
    font-size: 12px !important;
}
        
    }
</style>

<!-- Section 1 -->
<section class="section-1 about-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <h1 class="display-4">
        <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo get_field('banner_text'); ?></span></div> 
      </h1>
      </div>
    </div>
  </div>
</section>


<?php 
$intro = get_field('intro'); 
if($intro){
?>
  <section class="pt-220 speaking-sec-heading speaking-sec-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <h1 class="sm-pb"><?php echo $intro['heading']; ?></h1>
          <h4 class="sm-pb"><?php echo $intro['sub_heading']; ?></h4>
          <p class="mb-60"><?php echo $intro['text']; ?></p>
          <diV>
              <a href="<?php echo $intro['cta_link']; ?>"><button class="global-btn-black-bg"><?php echo $intro['cta_text']; ?></button></a>
          </div>     
      </div>
      </div>
    </div>
  </section>
<?php } ?>


<?php 
$events = get_field('events'); 
if($events){
?>
<section class="pd-section-4 speaking-sec-heading speaking-sec-4 black-bg mt-60 pb-120">
  <div class="container">
    <div class="row">
    <div class="col-lg-10 offset-lg-1">
        <h1 class="small-heading white-text pt-120 mb-60"><?php echo $events['heading']; ?></h1>


        <ul class="us-list white-text">
          <?php $eventItems = $events['speaches']; ?>
          
          <?php foreach($eventItems as $eventitem) { ?>
            <li class="left"><?php echo $eventitem['title']; ?> <ul><li class="right"> <?php echo $eventitem['date']; ?>    <?php echo $eventitem['time']; ?></li></ul></li>
          <?php } ?>
          
          <!-- <li class="left">Dominating the ARENA <ul><li class="right"> Jul 16, 2023  |  8am - 6pm</li></ul></li>
          <li class="left">Marketplace Gladiators <ul><li class="right">Jul 16, 2023  |  8am - 6pm</li></ul></li>
          <li class="left">Elevate Your Sales Game<ul><li class="right">Jul 16, 2023  |  8am - 6pm</li></ul></li>
          <li class="left">From Startup to Titan<ul><li class="right">Jul 16, 2023  |  8am - 6pm</li></ul></li>
          <li class="left">Proven Techniques for Exponential Growth<ul><li class="right">Jul 16, 2023  |  8am - 6pm</li></ul></li>
          <li class="left">Rise Above the Noise<ul><li class="right">Jul 16, 2023  |  8am - 6pm</li></ul></li>
          <li class="left">Strategies for Business Triumph<ul><li class="right">Jul 16, 2023  |  8am - 6pm</li></ul></li> -->
        </ul>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<section class="speaking-sec-5 white-bg pb-120 pt-220">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1 mb-60">
      <div class="custom-video-container">
        <video id="custom-video" poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/speaking-video-poster.png">
            <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Mr-d-short.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <button id="play-button" class="play-button"></button>
        </div>
        <script>
            var video = document.getElementById('custom-video');
            var playButton = document.getElementById('play-button');

            playButton.addEventListener('click', function() {
            if (video.paused) {
                video.play();
                playButton.style.display = 'none';
            } else {
                video.pause();
            }
            });

            video.addEventListener('play', function() {
            playButton.style.display = 'none';
            });

            video.addEventListener('pause', function() {
            playButton.style.display = 'block';
            });
        </script>
      </div>
    </div>
  </div>
</section>

<?php
$section_5 = get_field('section_5');
if($section_5){
?>
    <section class="pb-220 white-bg speaking-sec-heading speaking-sec-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1 animate" data-animate="fade-in-left">
            <h2 class="medium-heading mb-60 graytext">
            <div class="col-lg-7">
              <h1 class="">
                <div class="medium-heading mb-60 graytext animates "><span class="rotate animate" data-animate="rotate-back"><?php echo $section_5['text'] ?></span></div> 
            </div>
            </h2>
            <diV>
            <a href="<?php echo $section_5['cta_link'] ?>"><button class="global-btn-white-bg"><?php echo $section_5['cta_text'] ?></button></a>
          </div>  
          </div>
        </div>
      </div>
    </section>
    <?php } ?>



<!-- <section id="news" class="pt-220 pb-220 light-gray-bg">
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
    </section> -->

<!-- <section id="newsletter" class="pb light-gray-bg white-bg-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-1 animate" data-animate="fade-in-left">
            <h2 class="section-heading black-text sm-pb">Join Our Newsletter</h2>
            <p class="black-text sm-pb">Enter your email below to receive occasional emails about upcoming events and notes from Dariush.</p>
            <form id="newsletterForm">
              <div class="fields mb-40">
                <input type="text" placeholder="Your Name" id="nlName">
                <input type="email" placeholder="Email Address" id="nlEmail">
              </div>
              <input type="submit" value="SIGN UP" class="linebt">
            </form>
          </div>
        </div>
      </div>
    </section> -->

<?php
get_footer();