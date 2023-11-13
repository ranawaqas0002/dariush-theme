<?php
/**
 * Dariush Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dariush_Theme
 */
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dariush_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Dariush Theme, use a find and replace
		* to change 'dariush-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'dariush-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'dariush-theme' ),
			'secondary' => esc_html__( 'Secondary', 'dariush-theme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'dariush_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'dariush_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dariush_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dariush_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'dariush_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dariush_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dariush-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dariush-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dariush_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dariush_theme_scripts() {
	wp_enqueue_style( 'dariush-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'dariush-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'dariush-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dariush_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//Registering Bootstrap Scripts and styles

function dariush_theme_bootstrap_scripts() { 
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css', array());
	wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/assets/fonts/stylesheet.css', array());
	wp_enqueue_style( 'plugins', get_template_directory_uri() . '/assets/css/plugins.css', array());
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array());
	
	wp_enqueue_script( 'vendor', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.12.0.min.js', array());
	// wp_enqueue_script( 'plugin', get_template_directory_uri() . '/assets/js/plugins.js', array());
	// wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/main.js', array());
	//wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array());

}
add_action( 'wp_enqueue_scripts', 'dariush_theme_bootstrap_scripts' );



function custom_rest_routes()
{
	register_rest_route('v2', '/pull-instagram-images', array(
		'methods' => 'GET',
		'callback' => 'pullImages'
	));
}

add_action('rest_api_init', 'custom_rest_routes');

add_filter ('image_strip_meta', false);


function generateInstagramToken($code){

    global $wpdb;
    //  ---------------------------------------
    //  Get initial access token from Instagram using an Instagram authorization code
    //  ---------------------------------------
    
    $query = $wpdb->prepare("SELECT * FROM instagram_feeds_settings WHERE `key`='client_id';");
    $client_id = $wpdb->get_row( $query )->value;
    $query = $wpdb->prepare("SELECT * FROM instagram_feeds_settings WHERE `key`='client_secret';");
    $client_secret = $wpdb->get_row( $query )->value;
    $query = $wpdb->prepare("SELECT * FROM instagram_feeds_settings WHERE `key`='redirect_uri';");
    $redirect_uri = $wpdb->get_row( $query )->value;

    $tokenUrl   = 'https://api.instagram.com/oauth/access_token';

    $postFields   = array(
        'client_id'     => $client_id,
        'client_secret' => $client_secret,
        'grant_type'    => 'authorization_code',
        'redirect_uri'  => $redirect_uri,
        'code'          => $code
    );

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $tokenUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);

    $feed   = curl_exec($ch);

    if (curl_errno($ch))
    {
        $error = curl_error($ch);
        print_r($error);
        exit();
    }
    
    curl_close($ch);

    $json   = json_decode($feed);

    $accessToken    = $json->access_token;

	echo '<pre>SHORT: '.$accessToken.'</pre>';
    //  ---------------------------------------
    //  Exchange short lived access token for long lived token
    //  ---------------------------------------

    $tokenUrl   = 'https://graph.instagram.com/access_token?';

    $postFields   = array(
        'client_secret' => $client_secret,
        'grant_type'    => 'ig_exchange_token',
        'access_token'  => $accessToken
    );

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $tokenUrl . http_build_query($postFields));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $feed   = curl_exec($ch);

    if (curl_errno($ch))
    {
        $error = curl_error($ch);
        print_r($error);
        exit();
    }

    curl_close($ch);

    $json   = json_decode($feed);

    $accessToken = $json->access_token;

    if($accessToken){
        $wpdb->query("UPDATE instagram_feeds_settings SET `value`='".$accessToken."' WHERE `key`='access_token'");
    }
}

function pullImages(){
    global $wpdb;

    $query = $wpdb->prepare("SELECT * FROM instagram_feeds_settings WHERE `key`='access_token';");
    $row = $wpdb->get_row( $query );

    $access_token = $row->value;

    $url = 'https://graph.instagram.com/me/media';

    $params = array(
        'access_token' => $access_token,
        'fields' => 'id,media_type,media_url,thumbnail_url,permalink'
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    // print_r($result);
    $data = json_decode($result);

    $wpdb->query('TRUNCATE TABLE '.$wpdb->prefix.'instagram_feeds');
	clearOutPulledImages();

    foreach ($data->data as $media) {

		$randomName = generateRandomString(30);

        $wpdb->insert($wpdb->prefix.'instagram_feeds', array(
            'feed_id' => $media->id, 
            'type' => $media->media_type, 
            'url' => site_url().'/wp-content/plugins/instagram-feed-puller/pulled_images/'.$randomName.'.jpg', 
            'thumbnail_url' => $media->media_type == "VIDEO" ? $media->thumbnail_url : $media->media_url, 
            'link' => $media->permalink
        )); 

		file_put_contents(ABSPATH.'wp-content/plugins/instagram-feed-puller/pulled_images/'.$randomName.'.jpg', file_get_contents($media->media_type == "VIDEO" ? $media->thumbnail_url : $media->media_url));
    }

    print_r('Feeds successfully pulled!');
}

function clearOutPulledImages(){
	$files = glob(ABSPATH.'wp-content/plugins/instagram-feed-puller/pulled_images/*'); // get all file names
	print_r($files);
	foreach($files as $file){ // iterate files
		if(is_file($file)) {
			unlink($file); // delete file
		}
	} 
}

function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}




function load_more_podcasts() {
    $page = $_POST['page'];
    $taxquery= array(
        array(
            'taxonomy' => 'podcast_categories',
            'field' => 'slug',
            'terms' => $_POST['categories']
        )
        );
        if ($_POST['categories'] == 'all'){
            $taxquery = [];
        }
        
    $args = array(
        'post_type' => 'podcasts',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $page,
        'tax_query' => $taxquery,

    );


    $loop = new WP_Query($args);


    if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post();
		echo '<div class="podcast-item animate" data-animate="fade-in-bottom">';
		echo '<a href="' . get_the_permalink() . '" target="_self" class="imglink">';
		echo '<img src="' . get_the_post_thumbnail_url($post->ID) . '" width="100%">';
		echo '</a>';
		echo '<p class="gt-op-5 sm-pt">' . get_the_date() . ' | ' . get_field('read_duration', $post->ID) . '</p>';
		echo '<h3 class="grid-heading wt-op-1">' . get_the_title() . '</h3>';
		echo '</div>';
        endwhile;
    endif;

    wp_die();
}

add_action('wp_ajax_load_more_podcasts', 'load_more_podcasts');
add_action('wp_ajax_nopriv_load_more_podcasts', 'load_more_podcasts'); // For non-logged-in users


function load_more_articles() {
    $page = $_POST['page'];

    $args = array(
        'post_type' => 'articles',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $page,
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post();
            // Your article item markup here (similar to the original loop)
            echo '<div class="podcast-item animate" data-animate="fade-in-bottom">';
            echo '<a href="' . get_the_permalink() . '" target="_self" class="imglink">';
            echo '<img src="' . get_the_post_thumbnail_url($post->ID) . '" width="100%">';
            echo '</a>';
            echo '<p class="gt-op-5 sm-pt">' . get_the_date() . ' | ' . get_field('read_duration', $post->ID) . '</p>';
            echo '<h3 class="grid-heading wt-op-1">' . get_the_title() . '</h3>';?>
            <p><?php
                    $excerpt = get_the_excerpt();
                    $words = explode(' ', $excerpt);
                    $trimmed_excerpt = implode(' ', array_slice($words, 0, 15));
                    echo $trimmed_excerpt;
                    ?></p>
            <?php echo '</div>';
        endwhile;
    endif;

    wp_die();
}


add_action('wp_ajax_load_more_articles', 'load_more_articles');
add_action('wp_ajax_nopriv_load_more_articles', 'load_more_articles'); // For non-logged-in users



function custom_filters_callback($request)
{
	$quantity = 10;
	$category = $request->get_param('category_slug');

    $posts = get_posts(array(
		'post_type'       => 'podcasts',
		'status'          => 'published',
		'posts_per_page'  => $quantity,
		'tax_query' => array(
            array(
                'taxonomy' => 'podcast_categories',
                'field' => 'slug',
                'terms' => $category
            )
		)
	));
    
	$posts_data = array();

foreach ($posts as $post) {
    $id = $post->ID;
    $post_date = get_the_date('jS F, Y', $id); // Get post date using post ID

    $posts_data[] = (object)array(
        'id' => $id,
        'image' => wp_get_attachment_image_url(get_post_thumbnail_id($post->ID), 'full'),
        'title' => $post->post_title,
        'content' => $post->post_content,
        'date' => $post_date, // Use the fetched post date here
        'duration' => get_field('read_duration', $post->ID)
    );
}

return $posts_data;
}


function add_custom_rest_routes()
{
	register_rest_route('v2', '/custom-filter', array(
		'methods' => 'GET',
		'callback' => 'custom_filters_callback'
	));
}

add_action('rest_api_init', 'add_custom_rest_routes');