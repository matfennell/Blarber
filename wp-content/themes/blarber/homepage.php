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

<div class="clearfix"></div>

<div class="container">
	<div class="row">
	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		echo do_shortcode("[post_grid id='12' ]"); 
		
	// End the loop.
	endwhile;
	?>
	</div>
</div>

<div class="clearfix">
	
<?php
get_footer(); ?>
