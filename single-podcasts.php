<?php

/*

Template Name: Podcast Detail Page Template

*/

get_header();

?>



<style>

  .mainli {
    display: flex !important;
margin-bottom: 10px !important;
}
.leftli {
    max-width: 90px !important;
    width: 100% !important;
}
ul {
    padding-left: 0px !important;
}


.navigation-buttons.single-arrows a{
  font-size: 1px !important;
  color: transparent !important;
}
.navigation-buttons.single-arrows {
    text-align: right;
}

section.pd-section-3.light-gray-bg.pt {
    overflow: visible !important;
}
a.nav-button.nav-previous.slick-prev.slick-arrow:hover {
    background-color: black !important;
}
a.nav-button.nav-next.slick-next.slick-arrow:hover {
    background-color: black !important;
}
#podcast a.imglink{
    margin-bottom: 0px !important;
  }
  ul.socials {
    filter: invert(1) !important;
    justify-content: start !important;
}
.social-div{
  padding-left: 0px !important;
}
.subscribe-btn{
  text-align: right !important;
}

@media only screen and (min-width:1200px) {
  .container.pull-up {
    margin-top: -530px !important;
}
  
}

@media (min-width:992px) and (max-width:1200px){
  .container.pull-up {
    margin-top: -390px !important;
}
  
}

@media (min-width:768px) and (max-width:992px){
  .container.pull-up {
    margin-top: -330px !important;
}
.navigation-buttons.single-arrows {
    text-align: left !important;
    padding-top: 15px !important;
}
}
@media only screen and (max-width: 768px) {
  .container.pull-up {
    margin-top: -240px;
}
.navigation-buttons.single-arrows {
    text-align: left !important;
    padding-top: 15px !important;
}
.subscribe-btn{
  margin-bottom: 40px !important;
}
}
  
  .pagination {
    justify-content: center !important;
}


  .pd-section-2 video{

    max-width: 1072px;

    width: 100% !important;

  }

  

  .ep-notes{

    list-style: none;

    padding-left: 0px

  }

  .ep-notes li {

    padding-bottom: 8px !important;

}

.pt-120{

  padding-top: 120px;

}

.pb-120{

  padding-bottom: 120px;

}

li.left {

    display: flex !important;

}

ul {

    list-style: none !important;

}

.episode-button a.active{
  letter-spacing: 4px;
}
.episode-button:hover {
    border: 1px solid #ffffff;
}
.episode-button {
    max-width: 238px;
    width: 100%;
    border: 1px solid #ffffff;
    justify-content: center;
    text-align: center;
    border: 1px solid rgba(255,255,255,.25);
    padding: 0 20px;
    height: 45px;
    line-height: 45px;
    text-transform: uppercase;
    font-size: 12px;
    transition: border 600ms;
    display: inline-block;
}



  @media screen and (max-width: 768px) {

    .main-heading{

    font-size: 24px;

    }

    .small-heading{

      font-size: 22px;

  }

  .pt-120{

    padding-top: 60px;

  }

  .pb-120{

    padding-bottom: 60px;

  }

  .ep-notes li.left{

    font-size: 14px;

    line-height: 22px;

  }

  .ep-notes li {

    padding-bottom: 6px !important;

}

.pd-section-3 h1.small-heading.black-text.sm-pb.mt-60 {

    margin-top: 0px !important;

}
.leftli {
    max-width: 60px !important;
    width: 100% !important;
}

    

  }





</style>


<!-- Section 1 -->

<section class="section-1 about-section pd-section-1 white-bg">

  <div class="container">

    <div class="row hero-padding mb-60">

    <div class="col-lg-6 offset-lg-1">

         <div class="wrap">

            

            <h1 class="black-text">

            <p class= "wt-op-5 sm-pt animate" data-animate="fade-in"><?php echo date('jS F, Y', strtotime($post->post_date)); ?> |  <?php echo get_field('read_duration', $post->ID); ?></p>

            <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo $post->post_title; ?></span></div> 

          </div>
          
          
          </div>
          <div class= "col-lg-4">
          <div class="navigation-buttons single-arrows">
                <?php
                $next_post = get_next_post(); 
                if ($next_post) {
                    $id = $next_post->ID;
                    $next_permalink = get_permalink($id);
                }
                ?>

                <?php 
                $prev_post = get_previous_post();

                if ($prev_post) {
                    $nid = $prev_post->ID;
                    $prev_permalink = get_permalink($nid);
                }

                if ($prev_post): ?>
                    <a href="<?php echo esc_url($prev_permalink); ?>" class="nav-button nav-previous slick-prev slick-arrow"><?php previous_post_link('%link', __('Previous', 'twentyeleven')); ?></a>
                <?php endif; ?>

                <?php if ($next_post): ?>
                    <a href="<?php echo esc_url($next_permalink); ?>" class="nav-button nav-next slick-next slick-arrow"><?php next_post_link('%link', __('Next', 'twentyeleven')); ?></a>
                <?php endif; ?>
            </div>


          </div>

    </div>

  </div>

</section>


<!-- section 2 -->


<?php

$podcast_content = get_field('podcast_content');
if($podcast_content){
?>
<section class="pd-section-3 light-gray-bg pt">
  <div class="container pull-up">
    <div class="row">
    <div class="col-lg-10 offset-lg-1 mb-60">
<div class="custom-video-container">
  <!-- <video id="custom-video" poster="<?php echo get_the_post_thumbnail_url($post->ID);?>">
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dummy-video.mov" type="video/mp4">
      Your browser does not support the video tag.
      
  </video> -->
  <?php echo $podcast_content['iframe'] ?>
  <div class="mt-60 subscribe-btn">
  <script src="https://apis.google.com/js/platform.js"></script>

<!-- <div class="g-ytsubscribe" data-channelid="UC37Ezy_rLM5Fz1gclFKXnZQ" data-layout="default" data-count="default"></div>
<div class="fb-like" data-href="https://www.facebook.com/DariushSoudiOfficial" data-width="" data-layout="button_count" data-action="" data-size="large" data-share="true"></div>
   -->
</div>
  
  
  <!-- <button id="play-button" class="play-button"></button>
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

  </script> -->

</div>

      <div class="col-lg-10">

        <h1 class="small-heading black-text sm-pb mt-60"><?php echo $podcast_content['heading'] ?></h1>

        <p class="black-text sm-pb"><?php echo $podcast_content['text'] ?></p>
        <div class="video-container">
        

      </div>

    </div>

  </div>

</section>

<?php } ?>


<?php 

$test = get_field('test'); 

if($test){

?>

<section class="pd-section-4 light-gray-bg pb-120">

  <div class="container">

    <div class="row">

      <div class="col-lg-10 offset-lg-1">

        <h1 class="small-heading black-text mt-60 sm-pb"><?php echo $test['heading'] ?></h1>



        <ul class="ep-notes black-text">

          <?php $testItems = $test['episodes']; ?>



          <?php foreach($testItems as $testitem) { ?>
            <div class="mainli">
            <div class="leftli">
            <li class="left"><?php echo $testitem['time1']; ?>
            </div>
              <ul>
              <div class="rightli">
                <li class="right"><?php echo $testitem['detail1']; ?></li>
                </div>
              </ul>
              </div>

            </li>

          <?php } ?>

        </ul>

      </div>
      <div class="sm-pt sm-pb offset-lg-1 social-div">  
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
      <div class="col-lg-10 offset-lg-1 mt-60" >
      <?php echo $test['apple'] ?> 

      </div>
      <div>
      </div>

    </div>
    
  </div>

</section>

<?php } ?>




<!-- <section id="podcast" class="pt-220 pb-220">
    <div class="container">
        <div class="row animate" data-animate="fade-in-top">
            <div class="col-lg-6">
                <h2 class="section-heading" id="resources">Latest Episodes</h2>
            </div>
            <div class="col-lg-6 right-align">
                <div class="tab-buttons">
                    <a href="#" class="linebt active">View All Episodes</a>
                </div>
            </div>
           

            
        </div>

        <div class="row">
            <div class="col-lg-12 podcast-listing-section-3">
                <div class="tab-content active">
                    <div class="podcast-grid mt-60 podcast-items-container">
                        <?php
                        $args = array(
                            'post_type' => 'podcasts',
                            'posts_per_page' => 3,
                            'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                        );

                        $loop = new WP_Query($args);

                        if ($loop->have_posts()) : ?>
                            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                <div class="podcast-item animate" data-animate="fade-in-bottom">
                                    <a href="<?php echo get_the_permalink(); ?>" target="_self" class="imglink">
                                        <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" width="100%">
                                    </a>
                                    <p class="gt-op-5 sm-pt"><?php echo get_the_date(); ?> | <?php echo get_field('read_duration', $post->ID); ?></p>
                                    <h3 class="grid-heading wt-op-1"><?php echo get_the_title(); ?></h3>
                                    <div class="white-text">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                          

                        <?php else : ?>
                            <?php _e('Sorry, no posts matched your criteria.'); ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section> -->



<section id="podcast" class="pt-220 pb-220">
      <div class="container">
        <div class="row animate" data-animate="fade-in-top">
          
        </div>
        <div class="row animate" data-animate="fade-in-top">
        <div class="col-lg-6  ">
            <div class="tab-buttons">
            <h2 class="section-heading" id="resources">Latest Episodes</h2>
              <!-- <a href="#" class="linebt ">Blogs</a> -->
            </div>
          </div>
          <div class="col-lg-6 right-align">
            <div class="episode-button">
              <a href="/podcasts/" class="active" >VIEW ALL EPISODES</a>
              <!-- <a href="#" class="linebt ">Blogs</a> -->
            </div>
          </div>
        </div>
        <!-- <div id="podcasts-carousel" class="three-slides mt-60 carousel animate" data-animate="fade-in-bottom">
    
    <div class="slider-arrow left">
        <i class="fas fa-chevron-left"></i>
    </div>
    
    
    <div class="slider-arrow right">
        <i class="fas fa-chevron-right"></i>
    </div>
</div> -->

        <div class="row">
          <div class="col-lg-12">
            <div class="tab-content active">

              <div id="podcasts-carousel" class="three-slides mt-60 carousel animate" data-animate="fade-in-bottom">
              <?php
                        $args = array(
                            'post_type' => 'podcasts',
                            'posts_per_page' => 50,
                            'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                        );

                        $loop = new WP_Query($args);

                        if ($loop->have_posts()) : ?>
                            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                <div class="podcast-item animate" data-animate="fade-in-bottom">
                                    <a href="<?php echo get_the_permalink(); ?>" target="_self" class="imglink">
                                        <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" width="100%">
                                    </a>
                                    <p class="gt-op-5 sm-pt"><?php echo date('jS F, Y', strtotime(get_the_date())); ?> | <?php echo get_field('read_duration', $post->ID); ?></p>
                                    <h3 class="grid-heading wt-op-1"><?php echo get_the_title(); ?></h3>
                                    
                                </div>
                            <?php endwhile; ?>

                            <!-- Start the pagination functions after the loop. -->
                            
                            <!-- End the pagination functions after the loop. -->

                        <?php else : ?>
                            <?php _e('Sorry, no posts matched your criteria.'); ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                        
                
              </div>   
            </div>            
           </div>
          </div>
        </div>
      </div>
    </section>




 




<!-- <section id="news" class="pt-220 light-gray-bg pb-220">

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



<?php

get_footer();