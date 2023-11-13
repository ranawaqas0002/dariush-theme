<?php
/*
Template Name: Articles Detail Page Template
*/
get_header();
?>
<style>
  #podcast .section-heading{
    margin-bottom: 0px !important;
  }
  #podcast a.imglink{
    margin-bottom: 0px !important;
  }
 a.nav-button.nav-previous.slick-prev.slick-arrow:hover {
    background-color: black !important;
}
a.nav-button.nav-next.slick-next.slick-arrow:hover {
    background-color: black !important;
}
    .article-heading h2{
        font-size: 28px;
        color: black;
        line-height: 36px;
        margin-top: 90px;
    }
    .article-para{
        font-size: 18px;
        color: black;
    }
    .article-content img{
      width: 100% !important;
    }

section.pd-section-2.light-gray-bg.pt {
    overflow: visible !important;
}
/* section.section-1.about-section.pd-section-1.white-bg {
    margin-bottom: -14% !important;
} */
.mt-120{
  margin-top: 120px !important;
}
.mb-120{
  margin-bottom: 120px !important;
}

.navigation-buttons.single-arrows a{
  font-size: 1px !important;
  color: transparent !important;
}
.navigation-buttons.single-arrows {
    text-align: right;
}

@media only screen and (min-width:1200px) {
  .container.pull-up {
    margin-top: -520px !important;
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
  
}
    @media screen and (max-width: 567px) {
        .article-heading h2{
        font-size: 21px;
        line-height: 28px;
        margin-top: 50px !important;
    }
    .article-para{
        font-size: 16px;
    }
    .navigation-buttons.single-arrows {
    text-align: left !important;
    padding-top: 15px !important;
}
    /* section.section-1.about-section.pd-section-1.white-bg {
    margin-bottom: -24% !important;
} */
    /* section.pd-section-2.white-bg {
    margin-bottom: -29% !important;
} */
.mt-120{
  margin-top: 7px !important;
}
.mb-120{
  margin-bottom: 70px !important;
}
        
    }

</style>


<section class="section-1 about-section pd-section-1 white-bg">
  <div class="container">
    <div class="row hero-padding sm-pb">
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



<section class="pd-section-2 light-gray-bg pt">
  <div class="container pull-up">
    <div class="row">
    <div class="col-lg-10 offset-lg-1 sm-pb">
        <img src="<?php echo get_the_post_thumbnail_url($post->ID);?>" width="100%">
      </div>
      <div class="col-lg-10 offset-lg-1 article-content article-heading article-para">
        <?php echo $post->post_content; ?>
        <!-- <h2 class="article-heading sm-pb">On the road to investment, there’s a lot to consider. You must understand what investors are looking for when they invest, as well as what qualifies a company for the funding they provide. It also helps to know how much money you should ask for rather than settling on a random figure.</h2>
        <p class="article-para">There is no such thing as a “one-size-fits-all” solution when it comes to investment funding. While getting money through the door may be the most important thing, it’s also important to think about which method is best for your company.
            The good news is that we have numerous financing options available to assist the company’s growth.
            It’s important to remember that investors can bring more to your company than just money. Indeed, investors frequently possess specialized knowledge, and having access to that knowledge could be just as valuable, if not more valuable, than the money on offer.</p>  
        <h2 class="article-heading sm-pb">Find Funding that is Best for your Company</h2>
        <p class="article-para">There is no such thing as a “one-size-fits-all” solution when it comes to investment funding. While getting money through the door may be the most important thing, it’s also important to think about which method is best for your company. The good news is that we have numerous financing options available to assist the company’s growth.</p>
        <p class="article-para">It’s important to remember that investors can bring more to your company than just money. Indeed, investors frequently possess specialized knowledge, and having access to that knowledge could be just as valuable, if not more valuable, than the money on offer.</p>
        <h2 class="article-heading sm-pb">Make it Clear Why you Want People to Invest</h2>
        <p class="article-para">When looking for investment, it’s critical to understand what investors want from their money and what qualifies a company for the funds they offer. Clarity is crucial in demonstrating this. Have a clear understanding of how and why investment would benefit your company.</p>
        <p class="article-para">Every company has growth plans, but what distinguishes successful investors is their ability to demonstrate a strong track record. Explain why you approached a particular investor and, more importantly, how you arrived at the investment amount.
        Tell potential investors exactly how their money will benefit your business over the course of the investment. A roadmap outlines where and when an investor’s money will be spent, as well as which key milestones must be met.</p>
        <h2 class="article-heading sm-pb">Understand the Market</h2>
        <p class="article-para mb-120">To persuade an investor that your business is worth investing in, you must demonstrate a thorough understanding of your target market and research into your target customer base. Knowing about market segments will show that you are aware of what your competitors are doing and what it will take for your company to succeed in its industry.</p>
        
        <div class="col-lg-12 sm-pb">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/chess.jpg" width="100%">
        </div>

        <h2 class="article-heading sm-pb">Prepare your Business Strategy</h2>
        <p class="article-para">In order to attract an investor, you must be prepared, and you must have the right mindset when approaching potential investors. A thorough business plan will demonstrate this mindset by laying out your company’s goals, strategies, and financial projections. Giving your investor confidence that you know where your company is going requires demonstrating a clear growth ambition backed up by evidence.</p>
        <p class="article-para">Assessing how market dynamics might affect your plans and how customer demand might change after the previous years is also critical. Don’t be afraid to bring up potential risks; it shows that you’ve carefully considered your business plan and are prepared to deal with them if they arise.</p>

        <h2 class="article-heading sm-pb"> Detail an Exit Strategy</h2>
        <p class="article-para">Most investors want to know about your exit strategy, and most want to see a return on their investment within 5-7 years. As a result, investors will consider how they will exit your company in the future to maximize their profit.
        Demonstrate to investors that you’ve thought about their perspectives as well as your own.</p> -->
      </div>
    </div>
  </div>
</section>



<section id="newsletter" class="pb-220 light-gray-bg white-bg-newsletter pt-220">
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

    <section id="podcast" class="pt-220 pb-220">
      <div class="container">
        <div class="row animate" data-animate="fade-in-top">
          
        </div>
        <div class="row animate" data-animate="fade-in-top">
        <div class="col-lg-10  ">
            <div class="tab-buttons">
            <h2 class="section-heading" id="resources">Latest Blogs</h2>
              <!-- <a href="#" class="linebt ">Blogs</a> -->
            </div>
          </div>
        </div>
        <div id="podcasts-carousel" class="three-slides mt-60 carousel animate" data-animate="fade-in-bottom">
    <!-- Slider Arrow: Left -->
    <div class="slider-arrow left">
        <i class="fas fa-chevron-left"></i>
    </div>
    
    <!-- Your existing podcast items here -->
    
    <!-- Slider Arrow: Right -->
    <div class="slider-arrow right">
        <i class="fas fa-chevron-right"></i>
    </div>
</div>

        <div class="row">
          <div class="col-lg-12">
            <div class="tab-content active">

              <div id="podcasts-carousel" class="three-slides carousel animate" data-animate="fade-in-bottom">
              <?php
                        $args = array(
                            'post_type' => 'articles',
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