<?php
/*
Template Name: Podcast Listing Page Template
*/
get_header();
?>
<style>
  .podcast-cat p.date {
    color: #949494 !important;
    font-size: 12px !important;
    margin-top: 15px !important;
    margin-bottom: 5px !important;
}

  /* Styles for the dropdown button */
  .listen-banner li img {
    width: 120px !important;
    height: 120px !important;
    margin-top: -48px !important;
    margin-left: 20px !important;
}
.podcast-cat.col-lg-3.col-md-4.col-6 {
    max-width: 417px !important;
    width: 100% !important;
}

.podcast-cat img {
    max-width: 417px !important;
    width: 100% !important;
}
.section-4-listen li img{
  width: 110px !important;
  height: 120px !important;
  margin-top: -48px !important;

}

.dropbtn {
  background-color: transparent;
  color: white;
  border: 1px solid white;
  padding: 10px 15px;
  font-size: 16px;
  letter-spacing: 3px;
  cursor: pointer;
}
#podcast select#select {
    max-width: 418px !important;
    width: 100% !important;
    height: 44px !important;
    background-color: transparent !important;
    border: 1px solid #949494;
    color: #949494 !important;
    font-size: 18px !important;
    padding-left: 15px !important;
}

/* Styles for the dropdown content */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: transparent;
  border: 1px solid white;
  border-top: none;
  width: 100%;
}

/* Style for the active category link */
.linebt.active {
    background-color: transparent !important;
    color: white !important;
    border: none !important;
    letter-spacing: 3px !important;
}

/* Show the dropdown content when the button is hovered over */
.dropdown:hover .dropdown-content {
  display: block;
}

    ul.listen {
    display: flex;
    padding-left: 0px !important;
    margin-top: 40px;
}
.listen li {
    list-style: none;
}

section.podcast-listing-section-4 img {
    max-width: 500px;
    width: 100%;
}
.podcast-listing span.rotate.animate.animated.rotate-back {
    font-weight: 300 !important;
}
.pagination {
    justify-content: center !important;
    margin-bottom: 20px !important;
}
.podcast-item.animate {
    opacity: 1 !important;
}
section.pt-220.about-section-reveal.podcast-section-2 p {
    font-size: 28px !important;
    line-height: 36px !important;
}
section.pt-220.pb-220.podcast-listing-section-4 ul.listen {
    filter: invert(1) !important;
}

/* Adjust the podcast item styles */
@media screen and (min-width:768px) {
  section.section-1.light-gray-bg.podcast-listing {
    padding-top: 230px !important;
    padding-bottom: 100px !important;
}
button.dropbtn {
    width: 330px !important;
}
  
}

@media screen and (max-width: 767px ) {   
    .listen li img{
        width: 70%;
    }
    ul.listen {
    margin-top: 10px;
}
.pt-mb-40{
    padding-top: 40px;
}
.section-4-listen li img {
    width: 90px !important;
    height: 120px !important;
    margin-top: -38px !important;
}
section.section-1.light-gray-bg.podcast-listing {
    padding-top: 153px !important;
    padding-bottom: 110px !important;
}
section.pt-220.about-section-reveal.podcast-section-2 p {
    font-size: 21px !important;
    line-height: 28px !important;
}
.listen-banner li img {
  width: 70px !important;
    height: 62px !important;
    margin-top: -24px !important;
    margin-left: 5px !important;
}
p.black-text {
    font-size: 12px !important;
    line-height: 16px !important;
}
.podcast-cat.col-lg-3.col-md-4.col-6 {
    max-width: 516px !important;
    width: 100% !important;
}

.podcast-cat img {
    max-width: 516px !important;
    width: 100% !important;
}

    
}
</style>



<!-- Section 1 -->
<section class="section-1 light-gray-bg podcast-listing">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 offset-lg-1">
              <h1 class="black-text">
                <div class="black-text animates"><span class="rotate animate" data-animate="rotate-back"><?php echo get_field('banner_text'); ?></span></div></h1> 
          </div>
        </div>

        <div class="bottom animate" data-animate="fade-in-bottom">
          <div class="row">
            <div class="sm-pt col-lg-6 right offset-lg-1">
              <ul class="listen listen-banner">
                <li class="full"><p class="black-text">LISTEN ON</p></li>
                <li><a href="https://podcasts.apple.com/ae/podcast/in-the-arena-with-dariush-soudi/id1489597701"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-p.svg" alt="Logo 2" class="ml-sm"></a></li>
                <li><a href="https://open.spotify.com/show/2Fq4YJUcchyh5KZlDVDmew?si=94acd3fa78d741a9&nd=1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/spotify-black.svg" alt="Logo 2" class="ml-sm"></a></li>
                <li><a href="https://www.youtube.com/@DariushSoudi"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/YouTube-logo.svg" alt="Logo 2" class="ml-sm"></a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>



<!-- Section 2 -->

<section class="pt-220 about-section-reveal podcast-section-2">
<div class="container">
    <div class="row">
      <div class="col-lg-7 offset-lg-1">
        <p class="graytext">"I am my lifes journey, I come across individuals who have great stories to share. These Gladiators inspire me. By sharing their wins, and losses, I hope they will inspire you too."  </p>
        </div>
      <!-- <div class="col-md-6 img-container pt-mb-40">
      <img src="<?php echo $section_4['image']; ?>" alt="Want More">
      </div> -->
    </div>
  </div>
    </section>

<!-- Latest Episodes Section 3-->
<section id="podcast" class="pt-220">
    <div class="container">
        <div class="row animate" data-animate="fade-in-top">
            <div class="col-lg-6">
                <h2 class="section-heading" id="resources">Latest Episodes</h2>
            </div>
            <div class="col-lg-6 right-align">
            <!-- <div class="dropdown">
              <button class="dropbtn">SELECT CATEGORY</button>
              <div class="dropdown-content">
                <a href="#entrepreneurship" class="linebt active">entrepreneurship</a>
                Add more category links here if needed
              </div>
            </div> -->
            <?php
                $categories = get_terms('podcast_categories', array(
                    'hide_empty' => false,
                    'order' => 'ASC',
                    'orderby'   => 'ID'
                ));
            ?>

            <select id="select">
              <option value="all">ALL</option>
                <?php
                foreach($categories as $category){
                
                    echo '<option value="'.$category->slug.'">'.$category->name.'</option>';
                }
                ?>
            </select>
            </div>
          

        </div>

        <div id="entrepreneurship" class="row">
            <div class="col-lg-12 podcast-listing-section-3">
                <div class="tab-content active">
                    <div class="podcast-grid mt-60 podcast-items-container">
                    <?php
                        $args = array(
                            'post_type' => 'podcasts', // Adjust post type as needed
                            'post_status' => 'publish', // Only query published posts
                            'posts_per_page' => 6,
                            'paged' => 1, // Initial page number
                        );

                        $loop = new WP_Query($args);
                        $page_number = 1; // Store the current page number
                        

                        if ($loop->have_posts()) :
                            while ($loop->have_posts()) : $loop->the_post();
                                echo '<div class="podcast-item animate" data-animate="fade-in-bottom">';
                                echo '<a href="' . get_the_permalink() . '" target="_self" class="imglink">';
                                echo '<img src="' . get_the_post_thumbnail_url($post->ID) . '" width="100%">';
                                echo '</a>';
                                echo '<p class="gt-op-5 sm-pt">' . date('jS F, Y', strtotime(get_the_date())) . ' | ' . get_field('read_duration', $post->ID) . '</p>';
                                echo '<h3 class="grid-heading wt-op-1">' . get_the_title() . '</h3>';
                                
                                echo '</div>';
                            endwhile;

                            ;

                        else :
                            _e('Sorry, no posts matched your criteria.');
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="pagination">
                        <div class="nav-previous alignleft">
                            <a href="#" id="load-more">LOAD MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

jQuery("#select").on("change", function () {
  filterData($(this).val());
});

function filterData(category) {

  const container = jQuery(".podcast-grid");
  console.log('Select changed:' + category);
  const url = `${window.location.origin}/wp-json/v2/custom-filter?category_slug=${category}`;
  loading = true;
  try {
    jQuery.ajax({
      url,
      success: function (res) {
        container.html("");
        console.log(res);
        if (res.length > 0) {
          res.forEach(({ id, image, title, content,date,duration, custom_field }) => {
            var content = `
                      <div class="podcast-cat col-lg-3 col-md-4 col-6">
                          <img src="${image}" alt=" ${title}"/>
                          <p class="date">${date} | <span class="duration">${duration}</span></p> 
                          <h5 class="name"> ${title}</h5>
                          <p class="content">${content}</p>
                          
                      </div>
                      `;
            container.append(content);
          }
          );
        } 
        
        else {
          const content = `
            <div class="error">
              NO RESULTS
            </div>
          `;
          container.append(content);
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        console.log(thrownError);
      },
      complete: function () {
        $("#loader").removeClass("active");
      },
    });
  } catch (error) {
    console.log(error);
  }
}

jQuery(document).ready(function($) {
    var loading = false;
    var currentPage = <?php echo $page_number; ?>;
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
                    action: 'load_more_podcasts',
                    page: currentPage,
                    categories: jQuery("#select").val()
                },
                success: function(response) {
                    $('.podcast-grid').append(response);
                    loading = false;
                    if (currentPage === maxPages) {
                        $('#load-more').hide();
                    }
                },
            });
        }
    });
});
</script>








<?php 
$section_4 = get_field('section_4'); 
if($section_4){
?>
<section class="pt-220 pb-220 podcast-listing-section-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 offset-lg-1">
        <p><?php echo $section_4['text']; ?></p>
        <div class="col-lg-6">
              <ul class="listen section-4-listen">
                <li><a href="https://podcasts.apple.com/ae/podcast/in-the-arena-with-dariush-soudi/id1489597701"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-p.svg" alt="Logo 2" ></a></li>
                <li><a href="https://open.spotify.com/show/2Fq4YJUcchyh5KZlDVDmew?si=94acd3fa78d741a9&nd=1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/spotify-black.svg" alt="Logo 2" class="ml-sm"></a></li>
                <li><a href="https://www.youtube.com/@DariushSoudi"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/YouTube-logo.svg" alt="Logo 2" class="ml-sm"></a></li>
                
              </ul>
            </div>
        </div>
      <div class="col-md-6 img-container pt-mb-40">
      <img src="<?php echo $section_4['image']; ?>" alt="Want More">
      </div>
    </div>
  </div>
</section>

<?php } ?>



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