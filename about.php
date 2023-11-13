<?php
/*
Template Name: About Page Template
*/
get_header();
?>
<style>
   .dariush-image-about img {
    width: 100% !important;
    padding-top: 40px;
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
section.about-section-2{
  padding-top: 180px !important;
  padding-bottom: 180px !important;
}
img.sm-pt.sign {
    width: 240px !important;
    height: 100px !important;
    filter: invert(1);
}
#my-story1 .word {
    opacity: 1 !important;
}
#my-story .word {
    color: #000000 !important;
}
#my-story h2.section-heading.black-text {
    margin-bottom: 30px !important;
}
#my-story img {
    filter: invert(1) !important;
}
.clients-carousel .item img {
    max-width: 130px !important;
    width: 100% !important;
}
button.slick-next.slick-arrow {
    position: absolute;
    top: 81%;
    right: 47%;
}
button.slick-prev.slick-arrow {
    position: absolute;
    top: 79%;
    left: 44%;
}
@media (min-width:992px) and (max-width: 1200px){
    button.slick-next.slick-arrow {
    position: absolute;
    top: 81%;
    right: 43%;
}
button.slick-prev.slick-arrow {
    position: absolute;
    top: 79%;
    left: 45%;
}

}
@media (min-width: 768px) and (max-width: 992px){
    button.slick-prev.slick-arrow {
    position: absolute;
    top: 735px;
    left: 39%;
}
button.slick-next.slick-arrow {
    position: absolute;
    top: 755px;
    right: 45%;
}
}

@media only screen and (max-width: 768px){
  section.about-section-2{
  padding-top: 120px !important;
  padding-bottom: 120px !important;
}
.dariush-image-about img {
    width: 100% !important;
    padding-top: 40px;
}
}

@media only screen and (max-width: 576px){
section.section-1.about-section h1 {
    font-size: 20px !important;
}

    }
</style>
<!-- Section 1 -->
<section class="section-1 about-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1">
        <h1 class="display-4">
        <div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo get_field('banner_text'); ?></span></div> 
      </h1>
      </div>
    </div>
  </div>
</section>
<!-- Section 1 -->

<?php 
$story = get_field('story'); 
if($story){
?>
<!-- <section class="thankyou-section-2 about-section-2 pt-180 pb-120">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1">
        <h1><?php echo $story['heading']; ?></h1>
        <p><?php echo $story['text']; ?> </p>  
        <img class="sm-pt sign" src="<?php echo $story['signature_image']; ?>" alt="Dariush Soudi">
      </div>
    </div>
  </div>
</section> -->

<section id="my-story" class="pt-220 pb-220 light-gray-bg">
      <div class="container">
        <div class="revealscroll" id="scrollWrap">
          <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-6 offset-lg-1 animate" data-animate="fade-in-left">
              <h2 class="section-heading black-text"><?php echo $story['heading']?></h2>
              <div class="revealtexts">
                <div class="word"></div>
                <?php $string = $story['text1']; ?> 
                  <?php
                      $words = explode(' ', strip_tags($string));
                      for($x=0;$x<count($words);$x++){
                          $letters = str_split($words[$x]);
                          echo '<div class="word">'.$words[$x].'</div>&nbsp;';
                      }
                  ?>
                <br/><br/>
                <?php $string = $story['text2'];  ?>
                  <?php
                      $words = explode(' ', strip_tags($string));
                      for($x=0;$x<count($words);$x++){
                          $letters = str_split($words[$x]);
                          echo '<div class="word">'.$words[$x].'</div>&nbsp;';
                      }
                  ?>
                <br/><br/>
                <?php $string = $story['text3']; ?>
                <div class="mb-60">
                  <?php
                      $words = explode(' ', strip_tags($string));
                      for($x=0;$x<count($words);$x++){
                          $letters = str_split($words[$x]);
                          echo '<div class="word">'.$words[$x].'</div>&nbsp;';
                      }
                  ?>
                  <br/><br/>
                  <?php $string = $story['text4']; ?>
                  <?php
                      $words = explode(' ', strip_tags($string));
                      for($x=0;$x<count($words);$x++){
                          $letters = str_split($words[$x]);
                          echo '<div class="word">'.$words[$x].'</div>&nbsp;';
                      }
                  ?>
                <br/><br/>
                <?php $string = $story['text5']; ?>
                  <?php
                      $words = explode(' ', strip_tags($string));
                      for($x=0;$x<count($words);$x++){
                          $letters = str_split($words[$x]);
                          echo '<div class="word">'.$words[$x].'</div>&nbsp;';
                      }
                  ?>
              </div>
              </div>
              <img src="<?php echo $story['signature_image']; ?>" alt="Dariush Soudi">
            </div>
           
          </div>
        </div>
      </div>
    </section>

<?php } ?>




<?php 
$section_3 = get_field('section_3'); 
if($section_3){
?>

<section id="my-story1" class="pt-220 about-section-reveal">
      <div class="container">
        <div class="revealscroll" id="scrollWrap">
          <div class="row">
            <div class="col-lg-5 offset-lg-1 animate" data-animate="fade-in-left">
              <div class="revealtexts">
                <div class="word"></div>
                <?php $string = $section_3['text']; ?>
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
            <div class="col-lg-6 right animate dariush-image-about" data-animate="fade-in">
            <img src="<?php echo $section_3['image']; ?>" alt="Dariush Soudi">
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php } ?>


        <?php
$investment = get_field('investment');
if($investment){
?>
    <section id="investments" class="pb">
      <div class="container col-lg-10 offset-lg-1">
        <div class="row animate" data-animate="fade-in-top">
          <div class="col-lg-12 ">
            <h2 class="section-heading"><?php echo $investment['heading'] ?></h2>
          </div>
        </div>
        <div class="row animate" data-animate="fade-in-top">
          <div class="col-lg-6">
            <p class="graytext"><?php echo $investment['text'] ?></p>
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
    <?php } ?>


    <!-- <section class="about-section-3">
        <div class= "container">
            <div class= "row">
                <div class="col-md-10 offset-md-1">
  
                    <div class="custom-video-container">
        <video id="custom-video" poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-video-thumbnail.png">
            <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dummy-video.mov" type="video/mp4">
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
        </div>
    </section>
    
  <?php 
  $section_5 = get_field('section_5'); 
  if($section_5){
  ?>
    <section class="about-section-4">
        <div class="container">
            <div class="row">
            <div class="col-lg-6 offset-lg-1">
                <h1 class="sm-pb"><?php echo $section_5['heading']; ?></h1>
                <p class="graytext"><?php echo $section_5['text']; ?></p>       
              </div>
            </div>
        </div>
    </section>
    <?php } ?> -->

<!--     <section id="news" class="pt-220 pb-220 light-gray-bg">
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