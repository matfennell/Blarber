<?php
/*
Template Name: Homepage
*/

get_header(); ?>

<div class="container-fluid homepage-images">
	<div class="row">
		<div class="col-xs-4 homepage-image">
			<div class="row">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/main-image1.jpg" alt="" title="" class="img-responsive" />
			</div>
		</div>
		<div class="col-xs-4 homepage-image">
			<div class="row">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/main-image2.jpg" alt="" title="" class="img-responsive" />
				
				<h1>Hair.</h1>
			</div>
		</div>
		<div class="col-xs-4 homepage-image">
			<div class="row">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/main-image3.jpg" alt="" title="" class="img-responsive" />
			</div>
		</div>
	</div>
</div>

<div class="search-bar">
	<div class="container">
		<form method="" action="">
			<div class="col-xs-6 col-sm-3">
				<div class="row">
					<select>
						<option>Style.</option>
					</select>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="row">
					<select>
						<option>Weight.</option>
					</select>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="row">
					<select>
						<option>Length.</option>
					</select>	
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="row">
					<input type="submit" value="Search." />					
				</div>
			</div>
		</form>
	</div>
</div>

<?php
// Start the loop.
while ( have_posts() ) : the_post();

	// Include the page content template.
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
			// Post thumbnail.
			twentyfifteen_post_thumbnail();
		?>

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			?>
		</div><!-- .entry-content -->

		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

	</article><!-- #post-## -->
	<?php

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

// End the loop.
endwhile;
?>

<?php get_footer(); ?>
