<?php
/**
 * components functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package minimalisticky
 */

if ( ! function_exists( 'minimalisticky_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the aftercomponentsetup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */



function minimalisticky_setup() {


	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on components, use a find and replace
	 * to change 'minimalisticky' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'minimalisticky', get_template_directory() . '/languages' );

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

	add_image_size( 'minimalisticky-featured-image', 800, 9999 );
	add_image_size( 'minimalisticky-portfolio-featured-image', 800, 9999 );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'minimalisticky' ),
     ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
     ) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
        'gallery',
        ) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'minimalisticky_custom_background_args', array(
		'default-color' => 'eeeeee',
		'default-image' => '',
     ) ) );


}
endif;
add_action( 'after_setup_theme', 'minimalisticky_setup' );


function minimalisticky_logo() {
    add_theme_support('custom-logo', array(
        'size' => 'minimalisticky-logo',
        'flex-height'            => true,
        'flex-width'            => true,
        ));
}

add_action('after_setup_theme', 'minimalisticky_logo');


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function minimalisticky_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'minimalisticky' ),
        'description'   => esc_html__( 'Widgets in this sidebar will appear throughout the site. It is the default sidebar if no others are in use.', 'minimalisticky' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s ">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widgets', 'minimalisticky' ),
        'description'   => esc_html__( 'Widgets appearing above the footer of the site.', 'minimalisticky' ),
        'id'            => 'sidebar-footer',
        'before_widget' => '<div id="%1$s" class="widget small-6 medium-4 large-3 columns %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );


    register_sidebar( array(
        'name'          => esc_html__( 'Top Widget (Left)', 'minimalisticky' ),
        'description'   => esc_html__( 'Widgets will appear above the under the header.', 'minimalisticky' ),
        'id'            => 'top-widget-left',
        'before_widget' => '<div class="top-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
        ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Top Widget (Middle)', 'minimalisticky' ),
        'description'   => esc_html__( 'Widgets will appear above the under the header.', 'minimalisticky' ),
        'id'            => 'top-widget-middle',
        'before_widget' => '<div class="top-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
        ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Top Widget (Right)', 'minimalisticky' ),
        'description'   => esc_html__( 'Widgets will appear above the under the header.', 'minimalisticky' ),
        'id'            => 'top-widget-right',
        'before_widget' => '<div class="top-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
        ) );

}
add_action( 'widgets_init', 'minimalisticky_widgets_init' );

/**
 * Enqueue Foundation scripts and styles.
 *
 * @link: http://wordpress.tv/2014/06/11/steve-zehngut-build-a-wordpress-theme-with-foundation-and-underscores/
 * @link: http://wordpress.tv/2014/03/31/steve-zehngut-theme-development-with-foundation-framework/
 * @link: http://www.justinfriebel.com/wordpress-underscores-with-the-foundation-framework-09-23-2014/
 *
 */
function minimalisticky_foundation_enqueue() {
        wp_enqueue_style( 'foundation', get_stylesheet_directory_uri() . '/assets/foundation/css/foundation.min.css' );    // This is the Foundation CSS
        wp_enqueue_script( 'foundation-js-jquery', get_template_directory_uri() . '/assets/foundation/js/foundation.min.js', array( 'jquery' ), true );
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome.css' );
    }
    add_action( 'wp_enqueue_scripts', 'minimalisticky_foundation_enqueue' );

/**
 * Enqueue scripts and styles.
 */
function minimalisticky_scripts() {
	wp_enqueue_style( 'minimalisticky-style', get_stylesheet_uri() );

    /* Include Dashicons for the front-end too */
    wp_enqueue_style( 'dashicons' );

    /* Custom navigation script */
    wp_enqueue_script( 'minimalisticky-navigation', get_template_directory_uri() . '/assets/js/navigation-custom.js', array(), '20120206', true );

    /* Toggle Main Search script */
    wp_enqueue_script( 'minimalisticky-toggle-search-jquery', get_template_directory_uri() . '/assets/js/toggle-search.js', array( 'jquery' ), '20150925', true );

    /* Masonry for Footer widgets */
    wp_enqueue_script( 'minimalisticky-masonry', get_template_directory_uri() . '/assets/js/masonry-settings.js', array( 'masonry' ), '20150925', true );

    /* Add dynamic back to top button */
    wp_enqueue_script( 'minimalisticky-topbutton-jquery', get_template_directory_uri(). '/assets/js/topbutton.js', array( 'jquery' ), '20150926', true );

    wp_enqueue_script( 'minimalisticky-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'minimalisticky_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * -----------------------------------------------------------------------------
 * minimalisticky custom functions below
 * -----------------------------------------------------------------------------
 */


function minimalisticky_google_fonts() {
    $query_args = array(

        'family' => 'Roboto:300,400,500,700,900'
        );
    wp_enqueue_style( 'minimalisticky-googlefonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
}

add_action('wp_enqueue_scripts', 'minimalisticky_google_fonts');


/*
 * Add Excerpts to Pages
 */
function minimalisticky_add_excerpt_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'minimalisticky_add_excerpt_to_pages' );

/**
 * Modify Underscores nav menus to work with Foundation
 */
function minimalisticky_nav_menu( $menu ) {

    $menu = str_replace( 'menu-item-has-children', 'menu-item-has-children has-dropdown', $menu );
    $menu = str_replace( 'sub-menu', 'sub-menu dropdown', $menu );
    return $menu;

}
add_filter( 'wp_nav_menu', 'minimalisticky_nav_menu' );

/**
 * Walker Menu for Front Page nav
 */
class minimalisticky_front_page_walker extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function minimalisticky_start_lvl( &$output, $depth = 0, $args = array() ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
            );
        $class_names = implode( ' ', $classes );

        // build html
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    // add main/sub classes to li's and links
    function minimalisticky_start_el(  &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
            );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // passed classes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $li_class_names = esc_attr( implode( ' ', apply_filters( '', array_filter( $classes ), $item ) ) );
        $fa_class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

        // build html
        /*
         * Card Front
         */
        $foundationTouch = 'ontouchstart="this.classList.toggle(\'hover\');"';
        $output .= $indent . '<li ' . $foundationTouch . ' id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . /* $class_names . */ '">';
        $output .= '<div class="large button card-front">';

        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after . '<i class="fa ' . $li_class_names . ' card-icon"></i>',
            $args->after
            );

        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        $output .= '</div>';

        /**
         * Card Back
         */
        $output .= '<div class="panel card-back">';
        $output .= '<i class="fa ' . $fa_class_names . ' card-icon"></i>';
        $output .= '<div class="hub-info">';

        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->attr_title, $item->ID ),
            $args->link_after,
            $args->after
            );

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

        $output .= '<p>';
        $output .= isset( $item->description ) ? $item->description : '';
        $output .= '</p></div><!-- .hub-info -->';
        $output .= '<small class="clear">';
        $output .= isset( $item->xfn ) ? $item->xfn : '';
        $output .= '</small>';
        $output .= '</div><!-- .card-back -->';
    }
}



/**
 * minimalisticky Related Theme Subpage
 */

add_action( 'admin_menu', 'minimalisticky_helpandinformation_sp' );
function minimalisticky_helpandinformation_sp() {
    add_theme_page( __('Minimalisticky Support', 'minimalisticky'), __('Minimalisticky Support', 'minimalisticky'), 'edit_theme_options', 'minimalisticky-helpandinformation.php', 'minimalisticky_helpandinformation_text');
}

function minimalisticky_helpandinformation_text(){ ?>

<div class="information-cards">
<h1><?php echo __('Minimalisticky Information and Links', 'minimalisticky') ?></h1>
<div class="information-card">
    <div class="information-card-box information-card-left">
        <a href="http://themeastronaut.com/contact-us/" target="_blank">
         <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/support.png">
        </a>
        <h2><?php echo __('Help and Information', 'minimalisticky') ?></h2>
        <p><?php echo __('Need Help setting up Minimalisticky? We have an awesome customer support who stand ready to assist you with your questions related to the theme.', 'minimalisticky') ?></p>
        <a class="information-button" href="http://themeastronaut.com/contact-us/" target="_blank"><?php echo __('Theme Support', 'minimalisticky') ?></a>
    </div>
</div>
<div class="information-card">
    <div class="information-card-box information-card-top">
        <a href="http://themeastronaut.com/" target="_blank">
         <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/features.png">
        </a>
        <h2><?php echo __('Get more features', 'minimalisticky') ?></h2>
        <p><?php echo __('If you are getting serious about using Minimalisticky, consider upgrading to the premium version for $24 to unlock lots of great new features!', 'minimalisticky') ?></p>
        <a class="information-button" href="http://themeastronaut.com/minimalisticky/" target="_blank"><?php echo __('Read More', 'minimalisticky') ?></a>
    </div>
</div>
<div class="information-card">
    <div class="information-card-box information-card-right">
        <a href="https://wordpress.org/support/theme/minimalisticky/reviews/?filter=5" target="_blank">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/review.png">
        </a>
        <h2><?php echo __('Review Minimalisticky', 'minimalisticky') ?></h2>
        <p><?php echo __('Enjoy using Minimalisticky? Leave thoughtful feedback for us, that makes everyone very happy, let us know what you think!', 'minimalisticky') ?></p>
        <a class="information-button" href="https://wordpress.org/support/theme/minimalisticky/reviews/?filter=5" target="_blank"><?php echo __('Review Minimalisticky', 'minimalisticky') ?></a>
    </div>
</div>
</div>
<?php }

/**
 * minimalisticky Related Theme Subpage CSS
 */

function minimalisticky_helpandinformation( $hook ) {
    if ( 'appearance_page_minimalisticky-helpandinformation' !== $hook ) {
        return;
    }
    wp_enqueue_style( 'minimalisticky-helpandinformation-css', get_template_directory_uri() . '/assets/styles/helpandinformation.css');
}
add_action( 'admin_enqueue_scripts', 'minimalisticky_helpandinformation' );

/*******************************************************************************
*
*
*
* My functions
*
*
*
*******************************************************************************/

function draft_expiry_events() {

	echo 'ID of the page you\'re looking at <br><br><br><br>' . get_the_ID() . '<br><br><br><br><br><br>';

	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'post_status' => 'publish',
	);

	$expiry = new WP_Query($args);
	if( $expiry->have_posts() ) {
		echo 'current date: ' . date("Y-m-d") . '<br><br><br>';
		while ( $expiry->have_posts() ) {
			$expiry->the_post();

			//echo get_the_ID();

				$draft = date("Y-m-d", strtotime("-1 months"));
				$post_date = get_the_date("Y-m-d"); echo '<br />';



				if ( $draft < $post_date) {

					$da_post = array(
					      'ID'           => get_the_ID(),
					      'post_title'   => get_the_title(),
								'post_status'  => 'draft',
					  );

			wp_update_post( $da_post );

}

 				echo get_the_title();
				echo '<br>';
				echo get_the_date();
				echo '<br>' . get_the_ID() . '<br><br>';

}
}
	wp_reset_postdata();
}



add_action('the_content', 'draft_expiry_events');
