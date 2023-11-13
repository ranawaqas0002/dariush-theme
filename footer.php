<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dariush_Theme
 */

?>

<style>
  div#contact {
    display: flex !important;
    align-items: flex-start;
}

</style>


    <section id="news" class="pt-220 gray-bg pb-220">
      <div class="container animate" data-animate="fade-in-top">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="section-heading">Follow on Instagram</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mb-60">
            <div id="instagram-carousel" class="mt-60 carousel line-carousel">
				
				<?php 
					global $wpdb;
					$query = $wpdb->prepare("SELECT * FROM ".$wpdb->prefix."instagram_feeds LIMIT 4;");
					$row = $wpdb->get_results( $query );

					if(count($row)){

						foreach($row as $item):
					?>
					  <div class="slide">
						<a href="<?php echo $item->link; ?>" target="_blank"><img src="<?php echo $item->url; ?>" width="100%"></a>
					  </div>
					<?php 
						endforeach; 

					} else {
				?>

					  <div class="slide">
						<a href="https://www.instagram.com/dariushsoudiofficial/" target="_blank"><img src="assets/img/instagram-1.jpg" width="100%"></a>
					  </div>
					  <div class="slide">
						<a href="https://www.instagram.com/dariushsoudiofficial/" target="_blank"><img src="assets/img/instagram-2.jpg" width="100%"></a>
					  </div>
					  <div class="slide">
						<a href="https://www.instagram.com/dariushsoudiofficial/" target="_blank"><img src="assets/img/instagram-3.jpg" width="100%"></a>
					  </div>
					  <div class="slide">
						<a href="https://www.instagram.com/dariushsoudiofficial/" target="_blank"><img src="assets/img/instagram-4.jpg" width="100%"></a>
					  </div>
				<?php
					}
				?>
				
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
    </section>

<?php
// $pageId = get_the_ID(); // Get the current page ID

// $allowedPageIds = array(27, 31, 39, 41); // Add the page IDs you want to include

// if (in_array($pageId, $allowedPageIds)) {
//     echo '
//     <section id="newsletter" class="pb light-gray-bg white-bg-newsletter">
//         <div class="container">
//             <div class="row">
//                 <div class="col-lg-6 offset-lg-1 animate" data-animate="fade-in-left">
//                     <h2 class="section-heading black-text sm-pb">Join Our Newsletter</h2>
//                     <p class="black-text sm-pb">Enter your email below to receive occasional emails about upcoming events and notes from Dariush.</p>
//                     <form id="newsletterForm">
//                         <div class="fields mb-40">
//                             <input type="text" placeholder="Your Name" id="nlName">
//                             <input type="email" placeholder="Email Address" id="nlEmail">
//                         </div>
//                         <input type="submit" value="SIGN UP" class="linebt">
//                     </form>
//                 </div>
//             </div>
//         </div>
//     </section>';
// }
?>


<?php if(get_field('show_newsletter')){ ?>

  <section id="newsletter" class="pb-220 pt-220 light-gray-bg white-bg-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-1 animate" data-animate="fade-in-left">
            <h2 class="section-heading black-text sm-pb ml-09">Join Our Newsletter</h2>
            <p class="black-text sm-pb ml-09">Enter your email below to receive occasional emails about upcoming events and notes from Dariush.</p>
            <?php echo apply_shortcodes( '[contact-form-7 id="0b92d30" title="Newsletter"]' ); ?>
          </div>
        </div>
      </div>
    </section>

<?php } ?>


<footer>
      <div class="container pt pb top">
        <div class="row" id="contact">
          <div class="col-lg-7 left animate" data-animate="fade-in-left">
            <h3 class="section-heading graytext">
            <span class="whitetext">Master Every Area of Your Life.</span><br/>
              Get In Touch With Me
            </h3>
            <!-- <a href="#contact" class="linebt">Get In Touch</a> -->
          </div>
          <div class="col-lg-2 animate" data-animate="fade-in-right">
            <span class="tinytext uppercase mb-60">Contact</span>
            <a href="tel:+97148347391" class="">+971 4 834 7391</a>

            <span class="tinytext uppercase mb-60">BUSINESS & SPEAKING ENQUIRIES</span>
            <a href="mailto:ali@arenacapital.com" class="">ali@arenacapital.com</a>

            <span class="tinytext uppercase mb-60">PRESS</span>
            <a href="mailto:keera@arenacapital.com" class="">keera@arenacapital.com</a>

          </div>
          <div class="col-lg-2 offset-lg-1 animate" data-animate="fade-in-right">
            <span class="tinytext uppercase">Location</span>
            <a href="tel:+97336156641" class="">3305, 33rd Floor, Dubai Marina Plaza, UAE</a>

            <span class="tinytext uppercase">PODCAST ENQUIRIES</span>
            <a href="mailto:alexa@arenacapital.com" class="">alexa@arenacapital.com</a>
          </div>
        </div>
      </div>
      <div class="container bottom animate" data-animate="fade-in-bottom">
        <div class="row">
          <div class="col-lg-6">
            <span id="copyright">Dariush Soudi © 2023 All rights reserved.</span>
          </div>
          <div class="col-lg-6">
            <!-- <ul>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Policies</a></li>
            </ul> -->
          </div>
        </div>
      </div>

  <?php wp_footer() ?>
    </footer>

  <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/plugins.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/main.js"></script>
  <script>$('.eapps-instagram-feed').find('a').eq(4).remove();</script>

  <?php if(is_page(23)){ ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <?php } ?>

  <script>
	
    $('.three-slides').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false,
      dots: false,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
          }
        },
      ]
    });

    $('.four-slides').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true
          }
        },
      ]
    });

    $('#investments-carousel').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      arrows: true,
      appendArrows: '#investment-arrows',
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            dots: true
          }
        },
        {
          breakpoint: 520,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true
          }
        },
      ]
    });

    $('#instagram-carousel').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
      ]
    });

    $('#subscribeForm').on('submit', function(e){
      e.preventDefault();
      e.stopPropagation();
      email = $('#subscribeEmail').val();
      name = $('#subscribeName').val();
      
      if(email){
        try {
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "https://hooks.zapier.com/hooks/catch/4438683/3m4u1yv/");
          xhr.send(JSON.stringify({email: email, name: name}));
          $('#subscribeForm').html('<div class="thanks">Thank you for your interest.<br/>I salute you!</div>');
        } catch(e) {
          console.error(e);
          $('#subscribeForm').html('<div class="thanks">There was an error while sending your request. Please try again later.</div>');
        }
      }
    });

    $('#newsletterForm').on('submit', function(e){
      e.preventDefault();
      e.stopPropagation();
      name = $('#nlName').val();
      nlemail = $('#nlEmail').val();
      
      if(nlemail && name){
        try {
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "https://hooks.zapier.com/hooks/catch/4438683/3mw9kip/");
          xhr.send(JSON.stringify({name: name, email: nlemail }));
          $('#newsletterForm').html('<div class="thanks">Thank you for your interest.<br/>I salute you!</div>');
        } catch(e) {
          console.error(e);
          $('#newsletterForm').html('<div class="thanks">There was an error while sending your request. Please try again later.</div>');
        }
      }
    });


    $('.tab-buttons a').on('click', function(e){
        e.preventDefault();
        $('.tab-content').removeClass('active');
        $('.tab-buttons a').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').eq($(this).index('.tab-buttons a')).addClass('active');
        $('.three-slides').slick('refresh');
    });
  </script>
<?php // wp_footer(); ?>

</body>
</html>
