<?php
/*
Template Name: Podcast Detail Page Template
*/
get_header();
?>

<style>
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

section.section-1.about-section.pd-section-1.white-bg{
  margin-bottom: -14% !important;

}
section.pd-section-2.white-bg {
    margin-bottom: -23% !important;
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
    
  }
  @media screen and (max-width: 567px) {
    section.section-1.about-section.pd-section-1.white-bg{
    margin-bottom: -25% !important;

}
    section.pd-section-2.white-bg {
      margin-bottom: -31% !important;
    }
  }

</style>


<section class="section-1 about-section pd-section-1 white-bg">
  <div class="container">
    <div class="row">
    <div class="col-lg-6 offset-lg-1">
            <div class="wrap">
            
              <h1 class="black-text">
              <p class= "wt-op-5 sm-pt">Jul 28, 2023 | 1HR 19MIN</p>
                <div class="animates"><span class="rotate animate" data-animate="rotate-back">Discovering your purpose with Master Sri Akarshana.</span></div> 
            </div>
          </div>
    </div>
  </div>
</section>
<!-- Section 1 -->
<!-- <section id="landing" class="white-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="wrap">
            
              <h1 class="black-text">
              <p class= "wt-op-5 sm-pt">Jul 28, 2023 | 1HR 19MIN</p>
                <div class="animates"><span class="rotate animate" data-animate="rotate-back">Discovering your purpose with Master Sri Akarshana.</span></div> 
            </div>
          </div>
        </div>
      </div>
</section> -->

<!-- section 2 -->
<section class="pd-section-2 white-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1 mb-60">
      <div class="custom-video-container">
        <video id="custom-video" poster="<?php echo get_the_post_thumbnail_url($post->ID);?>">
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


<section class="pd-section-3 light-gray-bg pt">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <h1 class="small-heading black-text sm-pb mt-60">As the first ever spiritual guide on our podcast, Master Sri shares how he found inner peace and professional success. </h1>
        <p class="black-text sm-pb">Known as the Yogi with a Lamborghini, Master Sri walks as through his story, from leaving everything behind and overcoming depression to reaching enlightenment, and getting a clear vision of his purpose on earth, Master Sri has had a fascinating journey and many plans for the foreseeable future. In this podcast episode, Master Sri explains how spirituality and business are symbiotic in the path to true happiness and success. </p>
      </div>
    </div>
  </div>
</section>

<section class="pd-section-4 light-gray-bg pb-120">
  <div class="container">
    <div class="row">
    <div class="col-lg-10 offset-lg-1">
        <h1 class="small-heading black-text pt-120 sm-pb">Episode Notes</h1>

        <ul class="ep-notes black-text">
          <li class="left">00:00 <ul><li class="right"> Intro</li></ul></li>
          <li class="left">03:12 &nbsp;<ul><li class="right">Why Master Sri walked away from his restaurant business</li></ul></li>
          <li class="left">06:01 &nbsp;<ul><li class="right">Master Sri's epiphany</li></ul></li>
          <li class="left">10:15 &ensp;<ul><li class="right">Creating a platform of intent and value</li></ul></li>
          <li class="left">17:24 &ensp;<ul><li class="right">Rebirth and discovering your purpose</li></ul></li>
          <li class="left">33:26 &nbsp;<ul><li class="right">Death, parallel dimensions and meditation</li></ul></li>
          <li class="left">41:46 &nbsp;&nbsp;<ul><li class="right">Yogi with a Lamborghini</li></ul></li>
          <li class="left">47:16 &ensp;&nbsp;<ul><li class="right">Why Master Sri chose Dubai</li></ul></li>
          <li class="left">55:23 &ensp;<ul><li class="right">I Am Verse Center</li></ul></li>
          <li class="left">1:06:02 <ul><li class="right">Nature AND Nurture</li></ul></li>
          <li class="left">1:10:18 &nbsp;<ul><li class="right">Master Sri, the Metaverse and AI</li></ul></li>

        </ul>
      </div>
    </div>
  </div>

</section>



<section id="podcast" class="pt">
  <div class="container">
    <div class="row animate" data-animate="fade-in-top">
      <div class="col-lg-6">
        <h2 class="section-heading" id="resources">Latest Episodes</h2>
      </div>
      <div class="col-lg-6 right-align">
        <div class="tab-buttons">
          <a href="#" class="linebt active">entrepreneurship</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 pb podcast-listing-section-3">
        <div class="tab-content active">
          <div class="podcast-grid mt-60">

            <!-- Podcast Episode 1 -->
                <div class="podcast-item">
                <a href="https://www.youtube.com/watch?v=XctDFjuoF7I" target="_blank" class="imglink">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/p4.jpg" width="100%">
                </a>
                <p class= "gt-op-5 sm-pt">Jul 28, 2023 | 1HR 19MIN</p>
                <h3 class="grid-heading wt-op-1">Discovering your purpose with Master Sri Akarshana</h3>
                </div>

            

            <!-- Podcast Episode 2 -->
            <div class="podcast-item">
              <a href="https://www.youtube.com/watch?v=5548DQyxb1I" target="_blank" class="imglink">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/p5.jpg" width="100%">
              </a>
              <p class= "gt-op-5 sm-pt">Jul 21, 2023 | 58MIN</p>
              <h3 class="grid-heading wt-op-1">The Millionaire Mindset with Firas Al Msaddi</h3>
            </div>

            <!-- Podcast Episode 3 -->
            <div class="podcast-item">
              <a href="https://www.youtube.com/watch?v=b2FfVIftPuQ" target="_blank" class="imglink">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/p1.jpg" width="100%">
              </a>
              <p class= "gt-op-5 sm-pt">Jul 16, 2023 | 1HR 26MIN</p>
              <h3 class="grid-heading wt-op-1">Mastering Your Innerfight - The Inspiring Story of Marcus Smith</h3>
            </div>
            <!-- Add more podcast items here -->
          </div>                    

        </div>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();