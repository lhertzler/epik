<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

// Register Custom Post Type
function fire() {

	$labels = array(
		'name'                  => _x( 'Fires', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'fire', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Fire Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Fire Type', 'text_domain' ),
		'archives'              => __( 'Fire Archives', 'text_domain' ),
		'attributes'            => __( 'Fire Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Fire:', 'text_domain' ),
		'all_items'             => __( 'All Fires', 'text_domain' ),
		'add_new_item'          => __( 'Add New Fire', 'text_domain' ),
		'add_new'               => __( 'Add Fire', 'text_domain' ),
		'new_item'              => __( 'New Fire', 'text_domain' ),
		'edit_item'             => __( 'Edit Fire', 'text_domain' ),
		'update_item'           => __( 'Update Fire', 'text_domain' ),
		'view_item'             => __( 'View Fire', 'text_domain' ),
		'view_items'            => __( 'View Fires', 'text_domain' ),
		'search_items'          => __( 'Search Fires', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Fires list', 'text_domain' ),
		'items_list_navigation' => __( 'Fires list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter fires list', 'text_domain' ),
	);
	$capabilities = array(
		'edit_post'             => 'edit_fire',
		'read_post'             => 'read_fire',
		'delete_post'           => 'delete_fire',
		'edit_posts'            => 'edit_fires',
		'edit_others_posts'     => 'edit_others_fires',
		'publish_posts'         => 'publish_fire',
		'read_private_posts'    => 'read_private_fire',
	);
	$args = array(
		'label'                 => __( 'fire', 'text_domain' ),
		'description'           => __( 'Sick Shit', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-smiley',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capabilities'          => $capabilities,
		'show_in_rest'          => true,
	);
	register_post_type( 'fire', $args );

}
add_action( 'init', 'fire', 0 );
