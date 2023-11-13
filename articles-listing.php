<?php
/*
Template Name: Articles Listing Page Template
*/
get_header();
?>

<style>
    .al-section-2 img {
    max-width: 500px !important;
    width: 
    100% !important;
}
.pagination {
    justify-content: center !important;
}

.al-sectyion-3 p.white-text {
    padding-top: 15px !important;
}
.podcast-item.animate {
    opacity: 1 !important;
}
    @media screen and (max-width:1200px){
        .al-section-2 .mt-60{
            margin-top: 30px !important;
        }
        h1{
            padding-top: 40px !important;
        }
      
    }
    
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

<!-- Section 2 -->
<?php
$section_2 = get_field('section_2');
if($section_2){  
?>
<section class="light-gray-bg al-section-2 pb-220 pt-220">
  <div class="container">
    <div class="row">
    <div class="col-lg-5 img-container offset-lg-1 animate" data-animate="fade-in">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/featured-blog.jpg" alt="">
      </div>
      <div class="col-lg-4 offset-lg-1 animate" data-animate="fade-in-bottom">
        <a href="<?php echo $section_2['cta_link'] ?>"><h1 class="section-heading black-text"><?php echo $section_2['heading'] ?></h1></a>
        <a href="<?php echo $section_2['cta_link'] ?>"><p class= "wt-op-5 mt-60"><?php echo $section_2['date'] ?></p></a>
        <a href="<?php echo $section_2['cta_link'] ?>"><h4 class="small-heading black-text sm-pb"> <?php echo $section_2['sub_heading'] ?></h4></a>
        <a href="<?php echo $section_2['cta_link'] ?>"><p class="black-text"><?php echo $section_2['text'] ?></p></a>
        
        <a href="<?php echo $section_2['cta_link'] ?>"><button class="global-btn-white-bg mt-60"><?php echo $section_2['cta_text'] ?></button></a>

    </div>
      
    </div>
  </div>
</section>
<?php } ?>


<section id="podcast" class="pt-220 pb-220">
    <div class="container">
        <div class="row animate" data-animate="fade-in-top">
            <div class="col-lg-6">
                <h2 class="section-heading" id="resources">Latest Blogs</h2>
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-12 podcast-listing-section-3">
                <div class="tab-content active">
                    <div class="podcast-grid mt-60 podcast-items-container">
                        <?php
                        $args = array(
                            'post_type' => 'articles',
                            'posts_per_page' => 6,
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
                                    <p><?php
                                        $excerpt = get_the_excerpt();
                                        $words = explode(' ', $excerpt);
                                        $trimmed_excerpt = implode(' ', array_slice($words, 0, 15));
                                        echo $trimmed_excerpt;
                                        ?></p>
                                    
                                </div>
                            <?php endwhile; ?>

                            <!-- Start the pagination functions after the loop. -->
                            
                            <!-- End the pagination functions after the loop. -->

                        <?php else : ?>
                            <?php _e('Sorry, no posts matched your criteria.'); ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <div class="pagination">
                        <div class="nav-previous alignleft">
                            <a href="#" id="load-more" class="nav-link">LOAD MORE</a>
                        </div>
                        <!-- Remove the previous_posts_link() line, as it's not necessary for AJAX load more -->
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>  
<script>
jQuery(document).ready(function($) {
    var loading = false;
    var currentPage = <?php echo $loop->query_vars['paged'] ? $loop->query_vars['paged'] : 1; ?>;
    var maxPages = <?php echo $loop->max_num_pages; ?>;

    $('#load-more').click(function(e) {
        e.preventDefault();
        if (currentPage < maxPages && !loading) {
            loading = true;
            currentPage++;

            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'post',
                data: {
                    action: 'load_more_articles',
                    page: currentPage,
                },
                success: function(response) {
                    $('.podcast-grid').append(response); // Appends new articles
                    loading = false;
                    if (currentPage === maxPages) {
                        $('#load-more').hide();
                    }
                },
                error: function(errorThrown) {
                    console.log(errorThrown); // Log any AJAX errors
                }
            });
        }
    });
});


</script>


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