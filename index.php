<?php
/**
 * Template Name: Home Page Template
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dariush_Theme
 */

get_header();
?>

<style>
  .newsletter-book {
    text-align: center !important;
}
 #landing img {
    max-width: 650px !important;
    width: 100% !important;
}
#book .form-container1 input#your-name, #book .form-container1 input#your-email {
    background-color: #191919 !important;
}
#navbutton span {
    background-color: white  !important;
  }
  header.floating #navbutton span {
    background-color: white !important;
  }
  .word {
    margin-right: 5px;
}
#podcast .carousel a {
    font-size: 18px;
    text-transform: initial;
    line-height: 26px;
}
@media screen and (min-width:568px ){
  a.home-podcast-arrow.slick-prev.slick-arrow {
    z-index: 999 !important;
    position: absolute !important;
    top: 22% !important;
    left: -4% !important;
    cursor: pointer !important;
}
a.home-podcast-arrow.slick-next.slick-arrow {
    position: absolute;
    z-index: 999 !important;
    right: -4% !important;
    top: 24% !important;
    cursor: pointer !important;
}
  
}
  

  /* Banner Height For HomePage */

  @media (min-width:992px) and (max-width:1200px){
#landing, #landing .container, #landing .wrap {
    height: 688px !important;
}
a.home-podcast-arrow.slick-prev.slick-arrow {
    
    top: 22% !important;
    left: -8% !important;
}
a.home-podcast-arrow.slick-next.slick-arrow {
    position: absolute;
    right: -8% !important;
    top: 24% !important;
  }
}
  @media (min-width:568px) and (max-width:991px){
#landing, #landing .container, #landing .wrap {
    height: 488px !important;
}
#landing .container .wrap{
      height: 540px !important;
    }
    section#my-story {
    padding-top: 0px !important;
}

a.home-podcast-arrow.slick-prev.slick-arrow {
    top: 22% !important;
    left: -9% !important;
}
a.home-podcast-arrow.slick-next.slick-arrow {
    right: -9% !important;
    top: 24% !important;
}
  }
  @media only screen and (max-width:567px) {
    #landing, #landing .container, #landing .wrap{
      height: 288px !important;
    }
    #landing .container .wrap{
      height: 340px !important;
    }
    section#my-story {
    padding-top: 30px !important;
}
a.home-podcast-arrow.slick-next.slick-arrow {
    position: absolute !important;
    z-index: 999 !important;
    left: 14% !important;
    right: 10% !important;
    top: 0% !important;
}  
  }
  @media screen and (max-width: 414px) {
    section#podcast .linebt {
    margin-left: 0px !important;
    margin-right: 2px !important;
}
}
  @media (max-width:390px){
    a.home-podcast-arrow.slick-next.slick-arrow{
      left: 18% !important;
    }
  }
  @media screen and (max-width:992px) {
    .image-section img{
      width: 100%;
      padding-top: 60px;
    }
    
  }

</style>

	<main id="primary" class="site-main">

    <section id="landing" class="gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 offset-lg-1">
        <div class="wrap">
          <h1>
            <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo get_field('banner_text') ?></span></div> 
          </h1>
        </div>
      </div>
      <div class="col-lg-5 d-none d-lg-block animate" data-animate="fade-in"> 
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mr-d-min.png" alt="Image" style="width: 100%; height: auto; object-fit: cover; position: absolute; bottom: 0;">
      </div>
    </div>

    <div class="bottom animate" data-animate="fade-in-bottom">
      <div class="row">
        <div class="col-6 d-none d-lg-block left offset-lg-1">
          SCROLL DOWN
        </div>
      </div>
    </div>
  </div>
</section>




  <!-- Main Section -->
    <!-- <section id="landing" class="gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="wrap">
              <h1>
                <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo get_field('banner_text') ?></span></div> 
            </div>
          </div>
        </div>

        <div class="bottom animate" data-animate="fade-in-bottom">
          <div class="row">
            <div class="col-6 left offset-lg-1">
              SCROLL DOWN
            </div>
            <div class="col-5 right">
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
    </section> -->

    <?php
    $my_story = get_field('my_story');
    if($my_story){
    ?>

<section class="image-section">
      <div class="container">
        <div class="row">
        <div class="col-lg-6 right animate" data-animate="fade-in">
            <img src="<?php echo $my_story['right_image']; ?>" alt="Dariush Soudi" class="d-block d-lg-none">
            </div>

        </div>
      </div>

    </section>


    <section id="my-story" class="pt-220">
      <div class="container">
        <div class="revealscroll" id="scrollWrap">
          <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-6 offset-lg-1 animate" data-animate="fade-in-left">
              <h2 class="section-heading"><?php echo $my_story['heading'] ?></h2>
              <div class="revealtexts">
                <div class="word"></div>
                <?php $string = $my_story['para1']; ?>
                  <?php
                      $words = explode(' ', strip_tags($string));
                      for($x=0;$x<count($words);$x++){
                          $letters = str_split($words[$x]);
                          echo '<div class="word">'.$words[$x].'</div>';
                      }
                  ?>
                <br/><br/>
                <?php $string = $my_story['para2']; ?>
                  <?php
                      $words = explode(' ', strip_tags($string));
                      for($x=0;$x<count($words);$x++){
                          $letters = str_split($words[$x]);
                          echo '<div class="word">'.$words[$x].'</div>';
                      }
                  ?>
                <br/><br/>
                <?php $string = $my_story['para3']; ?>
                <div class="mb-60">
                  <?php
                      $words = explode(' ', strip_tags($string));
                      for($x=0;$x<count($words);$x++){
                          $letters = str_split($words[$x]);
                          echo '<div class="word">'.$words[$x].'</div>';
                      }
                  ?>
                  <br/><br/>
                  <?php $string = $my_story['para4']; ?>
                  <?php
                      $words = explode(' ', strip_tags($string));
                      for($x=0;$x<count($words);$x++){
                          $letters = str_split($words[$x]);
                          echo '<div class="word">'.$words[$x].'</div>';
                      }
                  ?>
                <br/><br/>
                <?php $string = $my_story['para5']; ?>
                  <?php
                      $words = explode(' ', strip_tags($string));
                      for($x=0;$x<count($words);$x++){
                          $letters = str_split($words[$x]);
                          echo '<div class="word">'.$words[$x].'</div>';
                      }
                  ?>
              </div>
              </div>
              <img src="<?php echo $my_story['signature']; ?>" alt="Dariush Soudi">
            </div>
            <!-- <div class="col-lg-6 right animate" data-animate="fade-in">
            <img src="<?php echo $my_story['right_image']; ?>" alt="Dariush Soudi" class="d-block d-lg-none">
            </div> -->
          </div>
        </div>
      </div>
    </section>
   
    <?php } ?>

    <section id="book" class="pt">
      <div class="container">
        <div class="row reverse-mobile">
          <div class="col-lg-4 offset-lg-1 left animate newsletter-book" data-animate="fade-in">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gm-book.png">
          </div>
          <div class="col-lg-7 center-align animate" data-animate="fade-in-right">
            <div class="wrap">
              <h2 class="section-heading ml-09">The VII Principles of a Modern Day Gladiator</h2>
              <p class="mb-40 ml-09">An empowering journey of personal transformation for those who dare to succeed beyond all limitations. Join the waitlist to pre-order your copy today!</p>
              <?php echo apply_shortcodes( '[contact-form-7 id="dcea916" title="Waitlist Form"]' ); ?>
              <!-- <form id="subscribeForm">
                <div class="d-flex">
                  <input type="text" placeholder="Your Name" id="subscribeName">
                  <input type="email" placeholder="Email Address" id="subscribeEmail">
                </div>
                <input type="submit" value="JOIN THE WAITLIST">
            </form> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
    $resources = get_field('resources');
    if($resources){
    ?>
    <section id="podcast" class="pt">
      <div class="container">
        <div class="row animate" data-animate="fade-in-top">
          <div class="col-lg-12">
            <h2 class="section-heading" id="resources"><?php echo $resources['heading'] ?></h2>
          </div>
        </div>
        <div class="row animate" data-animate="fade-in-top">
          <div class="col-lg-6">
            <p class="graytext"><?php echo $resources['text'] ?></p>
          </div>
          <div class="col-lg-6 right-align">
            <div class="tab-buttons">
              <a href="#" class="linebt active">Podcasts</a>
              <a href="#" class="linebt ">Press</a>
              <a href="#" class="linebt ">Blogs</a>
              <!-- <a href="#" class="linebt ">Blogs</a> -->
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="tab-content active">

              <div id="podcasts-carousel" class="mt-60 carousel">
              <?php 
                $args = array( 
                    'post_type' => 'podcasts',
                    'posts_per_page' => 50,
                );

                $loop = new WP_Query( $args ); 
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <a href="<?php echo get_the_permalink(); ?>" target="_blank" class="content-link"> <!-- Wrap the entire content block with the anchor tag -->
                        <div class="home-podcast podcast-item">
                            <img src="<?php echo get_the_post_thumbnail_url($post->ID);?>" width="100%">
                            <p class="gt-op-5 sm-pt"><?php echo date('jS F, Y', strtotime(get_the_date())); ?> |  <?php echo get_field('read_duration', $post->ID); ?></p>
                            <h3 class="grid-heading wt-op-1"><?php echo $post->post_title; ?></h3>
                        </div>
                    </a> <!-- Close the anchor tag here -->
                <?php endwhile;
                wp_reset_postdata(); ?>

              </div>

            </div>
          </div>
        </div>


<!-- Include the Slick library files (CSS and JS) -->
<script type="text/javascript" src="path-to/slick.min.js"></script>





            <div class="tab-content">
              <div id="news-carousel" class="three-slides mt-60 carousel line-carousel">
                <div class="slide">
                <a href="https://theblast.com/488073/hollywood-stars-with-billionaire-aspirations-flocking-to-business-titan-dariush-soudi/" target="_blank">
                  <div class="box">
                    <h3 class="medium-heading">Hollywood Stars With Billionaire Aspirations Flocking To Business Titan Dariush Soudi</h3>
                    <a href="https://theblast.com/488073/hollywood-stars-with-billionaire-aspirations-flocking-to-business-titan-dariush-soudi/" target="_blank">The Blast, 2023</a>
                  </div>
                  </a>
                </div>
                <div class="slide">
                  <a href="https://aspiremagz.com/dariush-soudi-gladiator-mastery-program/" target="_blank">
                  <div class="box">
                    <h3 class="medium-heading">Cover Story: Self Taught Sales Guru</h3>
                    <a href="https://aspiremagz.com/dariush-soudi-gladiator-mastery-program/" target="_blank">ASPIRE MAGAZINE, 2022</a>
                  </div>
                  </a>
                </div>
                <div class="slide">
                <a href="https://gulfbusiness.com/why-dubai-businessman-dariush-soudi-is-confident-about-future-success/" target="_blank">
                  <div class="box">
                    <h3 class="medium-heading">Why Dubai businessman Dariush Soudi is confident about future success</h3>
                    <a href="https://gulfbusiness.com/why-dubai-businessman-dariush-soudi-is-confident-about-future-success/" target="_blank">Gulf Business, 2021</a>
                  </div>
                  </a>
                </div>
                <div class="slide">
                <a href="https://www.success.com/dariush-soudi-sales-to-success-in-the-entrepreneurial-world/" target="_blank">
                  <div class="box">
                    <h3 class="medium-heading">Sales to Success in the Entrepreneurial World</h3>
                    <a href="https://www.success.com/dariush-soudi-sales-to-success-in-the-entrepreneurial-world/" target="_blank">Success, 2021</a>
                  </div>
                  </a>
                </div>
                <div class="slide">
                <a href="https://www.bizpreneurme.com/entrepreneur-spotlight-dariush-soudi/" target="_blank">
                  <div class="box">
                    <h3 class="medium-heading">Entrepreneur Spotlight: Dariush Soudi</h3>
                    <a href="https://www.bizpreneurme.com/entrepreneur-spotlight-dariush-soudi/" target="_blank">Bizpreneur Middle East, 2021</a>
                  </div>
                  </a>
                </div>
              </div>
            </div>

            <div class="tab-content">

              <div id="podcasts-carousel" class="three-slides mt-60 carousel blog-carousel animate" data-animate="fade-in-bottom">
              <?php 
                $args = array( 
                    'post_type' => 'articles',
                    'posts_per_page' => 50,
                );

                $loop = new WP_Query( $args ); 

                while ( $loop->have_posts() ) : $loop->the_post(); 
                ?>
                    <a href="<?php echo get_the_permalink(); ?>" target="_self" class="content-link"> <!-- Wrap the entire content block with the anchor tag -->
                        <div class="home-podcast podcast-item animate" data-animate="fade-in-bottom">
                            <img src="<?php echo get_the_post_thumbnail_url($post->ID);?>" width="100%">
                            <p class= "gt-op-5 sm-pt"><?php echo date('jS F, Y', strtotime($post->post_date)); ?> |  <?php echo get_field('read_duration', $post->ID); ?></p>
                            <h3 class="grid-heading wt-op-1"><?php echo $post->post_title; ?></h3>
                            <p><?php
                                $excerpt = get_the_excerpt();
                                $words = explode(' ', $excerpt);
                                $trimmed_excerpt = implode(' ', array_slice($words, 0, 15));
                                echo $trimmed_excerpt;
                            ?></p>
                        </div>
                    </a> <!-- Close the anchor tag here -->
                <?php
                endwhile;

                wp_reset_postdata(); 
                ?>
                
              </div>

              <!-- <a href="https://www.youtube.com/@DariushSoudi/videos" target="_blank" class="linebt mt-60">View all podcasts</a> -->
            
            </div>
            
            <!-- <div class="tab-content">
              <div id="blog-carousel" class="three-slides mt-60 carousel animate" data-animate="fade-in-bottom">
                <div class="slide">
                  <a href="https://www.youtube.com/watch?v=sa1Y6p5HH1Q" target="_blank" class="imglink"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/podcast-3.jpg" width="100%"></a>
                  <h3 class="medium-heading">How To Stay Ahead In The Game Of Entrepreneurship With John Lee</h3>
                  <a href="https://www.youtube.com/watch?v=sa1Y6p5HH1Q" target="_blank" class="link">Watch now</a>
                </div>
                <div class="slide">
                  <a href="https://www.youtube.com/watch?v=b2FfVIftPuQ" target="_blank" class="imglink"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/podcast-2.jpg" width="100%"></a>
                  <h3 class="medium-heading">The Unknown Art of Making Stars : FAME by Sheeraz</h3>
                  <a href="https://www.youtube.com/watch?v=b2FfVIftPuQ" target="_blank" class="link">Watch now</a>
                </div>
                <div class="slide">
                <a href="https://www.youtube.com/watch?v=5548DQyxb1I" target="_blank" class="imglink"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/podcast-1.jpg" width="100%"></a>
                  <h3 class="medium-heading">The Heart of the Matter: Ebraheem Al Samadi</h3>
                  <a href="https://www.youtube.com/watch?v=5548DQyxb1I" target="_blank" class="link">Watch now</a>
                </div>
              </div>
              <a href="https://www.youtube.com/@DariushSoudi/videos" target="_blank" class="linebt mobile-only mt-60">View all podcasts</a>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <?php } ?>

    <?php
    $section_5 = get_field('section_5');
    if($section_5){
    ?>
    <section id="practice" class="pt-220 pb-220">
      <div class="container">
        <div class="row reverse-mobile">
          <div class="col-lg-5 col-md-12 offset-lg-1 center-align animate" data-animate="fade-in-left">
            <h2 class="medium-heading graytext">
              <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo $section_5['line1'] ?></span></div> 
              <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo $section_5['line2'] ?></span></div> 
              <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo $section_5['line3'] ?></span></div> 
              <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo $section_5['line4'] ?> </div> 
              <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo $section_5['line5'] ?></span></div> 
             </h2>
          </div>
          <div class="col-lg-6 right animate" data-animate="fade-in">
            <img src="<?php echo $section_5['image'] ?>">
          </div>
        </div>
      </div>
    </section>
    <?php } ?>

<!-- <?php
$section_6 = get_field('section_6');
if($section_6){
?>
    <section id="investments" class="pb">
      <div class="container">
        <div class="row animate" data-animate="fade-in-top">
          <div class="col-lg-12">
            <h2 class="section-heading"><?php echo $section_6['heading'] ?></h2>
          </div>
        </div>
        <div class="row animate" data-animate="fade-in-top">
          <div class="col-lg-6">
            <p class="graytext"><?php echo $section_6['text'] ?></p>
          </div>
          <div class="col-lg-6 right-align">
            <div id="investment-arrows">
            </div>
          </div>
        </div>
        <div class="row animate" data-animate="fade-in-bottom">
          <div class="col-lg-12">
              <div id="investments-carousel" class="mt-60 carousel animate" data-animate="fade-in-bottom">
                <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/investments/aix.png">
                </div>
                <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/investments/browz.png">
                </div>
                <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/investments/jetclass.png">
                </div>
                <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/investments/vinivia.png">
                </div>
                <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/investments/zcash-min.png">
                </div>
                <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/investments/redev-min.png">
                </div>
                <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/investments/uniq-min.png">
                </div>
                <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/investments/apotekamo.png">
                </div>
                <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/investments/EPTI.png">
                </div>
                <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/investments/InBanner.png">
                </div>
                <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/investments/linky.png">
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <?php } ?> -->

    <?php
    $section_7= get_field('section_7');
    if($section_7){
    ?>
    <section id="news" class="pt-220 pb-220 gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-1 animate" data-animate="fade-in-left">
            <h2 class="medium-heading mb-60 graytext">
              <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo $section_7['text_line_1'] ?></span></div> 
              <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo $section_7['text_line_2'] ?> </span></div> 
              <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo $section_7['text_line_3'] ?></span></div> 
              <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo $section_7['text_line_4'] ?></span></div> 
            </h2>
            <a href="<?php echo $section_7['cta_link'] ?>" class="linebt"><?php echo $section_7['cta_text'] ?></a>
          </div>
        </div>
      </div>
    </section>
    <?php } ?>


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

    
	

	</main><!-- #main -->

	

<?php
get_sidebar();
get_footer();?>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const podcastsCarousel = document.getElementById('podcasts-carousel');
  let slickInitialized = false;

  const startSlickAutoplay = () => {
    if (!slickInitialized) {
      // Initialize Slick Carousel when element is in view
      $(podcastsCarousel).slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<a class="home-podcast-arrow slick-prev"><i class="fas fa-chevron-left"></i></a>',
        nextArrow: '<a class="home-podcast-arrow slick-next"><i class="fas fa-chevron-right"></i></a>',
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 992,  // Medium devices (tablets)
            settings: {
              slidesToShow: 2  // Number of slides to show on tablets
            }
          },
          {
            breakpoint: 768,  // Small devices (mobile)
            settings: {
              slidesToShow: 1  // Number of slides to show on mobile
            }
          }
        ]
      });
      slickInitialized = true;
    }
  };

  const intersectionObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Element is in view, start autoplay
        startSlickAutoplay();
        intersectionObserver.unobserve(entry.target); // Stop observing once started
      }
    });
  });

  // Start observing the element
  intersectionObserver.observe(podcastsCarousel);
});

</script>
<script>
var conController = new ScrollMagic.Controller({ globalSceneOptions: {} });
var scene = [];

function createMagicMain() {
  var conClass = [];
  conScene = new Array();

  if ($('.revealscroll').length) {
    range = [];
    indx = 0;
    $('.revealscroll').each(function () {
      targ = $(this);
      var triggerHeight = isMobileDevice() ? $(targ).outerHeight() / 2 : $(targ).outerHeight() / 2;

      newscene = new ScrollMagic.Scene({
        triggerElement: "#" + $(this).attr('id'),
        duration: triggerHeight,
        // offset: 400
      })
        .on("enter", function (d) {})
        .on("leave", function () {})
        .on("refresh", function (d) {})
        .on("progress", function (d) {
          tg = d.currentTarget.triggerElement();
          words = $(tg).find('.revealtexts .word').length;
          range = 100 / words;
          currentWords = Math.round((d.progress * 100) / range);
          if (d.scrollDirection == "FORWARD") {
            for (x = 0; x < currentWords; x++) {
              t = $(tg).find('.word').eq(x + 1);
              if (!$(t).hasClass('active'))
                $(tg).find('.word').eq(x + 1).addClass('active');
            }
          } else {
            for (x = words; x > currentWords; x--) {
              t = $(tg).find('.word').eq(x);
              if ($(t).hasClass('active'))
                $(t).removeClass('active');
            }
          }
        })
        // .addIndicators({ name: "test" + indx }) // add indicators (requires plugin)
        .addTo(conController);

      scene.push(newscene);
      indx++;
    });
  }
}

function destroyMagicControllerMain() {
  conController.destroy(true);
  if (scene.length)
    for (x = 0; x < scene.length; x++) {
      if (scene[x].length)
        scene[x].destroy(true);
    }
}

// Detect if the device is a mobile device
function isMobileDevice() {
  return window.innerWidth <= 768; // You can adjust the width threshold as needed
}

// Resize
window.addEventListener("resize", function () {
  destroyMagicControllerMain();
  conController = new ScrollMagic.Controller({ globalSceneOptions: {} });
  createMagicMain();
});

$(document).ready(function () {
  createMagicMain();
});

</script>

