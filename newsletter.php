<?php
/*
Template Name: Newsletter Template
*/
get_header();
?>

<style>
  

</style>


<section class="section-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1">
        <h1 class="display-4 black-text">
        <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo get_field('banner_text') ?></span></div> 
      </h1>
      </div>
    </div>
  </div>
</section>

<section id="newsletter" class="pb-220 light-gray-bg white-bg-newsletter pt-220">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-1 animate" data-animate="fade-in-left">
            <h2 class="section-heading black-text sm-pb ml-09">Join Dariush's Newsletter</h2>
            <p class="black-text sm-pb ml-09">Enter your email below to receive occasional emails about upcoming events and notes from Dariush.</p>
            <?php echo apply_shortcodes( '[contact-form-7 id="0b92d30" title="Newsletter"]' ); ?>
          </div>
        </div>
      </div>
    </section>


    <!-- <section id="news" class="pt-220 gray-bg pb-220">
      <div class="container animate" data-animate="fade-in-top">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="thankyou section-heading">Follow on Instagram</h2>
            
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
          <div class="col-lg-6 tinytext uppercase">
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
<?php
get_footer();