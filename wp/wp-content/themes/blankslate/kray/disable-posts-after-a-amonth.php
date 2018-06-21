<?php
/**
 * Template Name: Turn posts into drafts after 1 month
 */
 ?>

<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content">

<?php	echo 'ID of the page you\'re looking at <br><br><br><br>' . get_the_ID() . '<br><br><br><br><br><br>';

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
	wp_reset_postdata(); ?>

</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
