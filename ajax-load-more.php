<?php
// Add this line at the top of the file
define('WP_USE_THEMES', false);

// Include WordPress core
require_once('../../../wp-load.php');

// Get the current page from the AJAX request
$page = $_GET['page'];

// Set up query arguments for your custom post type (adjust as needed)
$args = array(
    'post_type' => 'podcasts',
    'posts_per_page' => 6,
    'paged' => $page,
);

// Query the posts
$loop = new WP_Query($args);

// Check if there are posts
if ($loop->have_posts()) :
    // Loop through the posts
    while ($loop->have_posts()) : $loop->the_post();
        // Display the post content (customize as needed)
        echo '<div class="podcast-item animate" data-animate="fade-in-bottom">';
        echo '<a href="' . get_the_permalink() . '" target="_self" class="imglink">';
        echo '<img src="' . get_the_post_thumbnail_url($post->ID) . '" width="100%">';
        echo '</a>';
        echo '<p class="gt-op-5 sm-pt">' . get_the_date() . ' | ' . get_field('read_duration', $post->ID) . '</p>';
        echo '<h3 class="grid-heading wt-op-1">' . get_the_title() . '</h3>';
        echo '<p>';
        $excerpt = get_the_excerpt();
        $words = explode(' ', $excerpt);
        $trimmed_excerpt = implode(' ', array_slice($words, 0, 15));
        echo $trimmed_excerpt;
        echo '</p>';
        echo '</div>';
    endwhile;

    // Clean up after the query
    wp_reset_postdata();

else :
    echo 'No more articles found.';
endif;
?>
