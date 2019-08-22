<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package  basepress
 */
get_header();
 
 $queried_object = get_queried_object();
 //var_dump( $queried_object );
?>
<center>
	<?php 
	echo "<h1>".$queried_object -> name . "</h1>";
	$children = get_term_children($queried_object -> term_id, $queried_object -> taxonomy);

	if($children) {
		
	$descPost = new WP_Query( array( 'category__in' => $queried_object->term_id ) );
	//$descPost = get_post();
		if ( $descPost->have_posts() ) {
			while ( $descPost->have_posts() ) {
				$descPost->the_post();
				echo "<h3 style=\"font-weight: 100;\">".get_the_content()."</h3>";
			}
			/* Restore original Post Data */
			wp_reset_postdata();
		}
		
	}
	?>
</center>
<div class="row">
	<?php
	$parentCategories = get_categories( array(
	    'orderby' => 'name',
	    'parent'  => $queried_object->term_id,
	    'hide_empty' => 0
	) );

	 if ( empty($parentCategories) ){
	    
			if ( have_posts() ) :

				get_template_part( 'loop' );
				
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
			<?php
	 
	 	
	 } else{
	 
		foreach ( $parentCategories as $parentCategory ) {
		?>
		
			<div class="col col-lg-6">
				<div class="row">
					<div class="col-12 box-big bordered hover-container centervert text-center">
						<h2> <?php echo $parentCategory->name;?> </h2>
						<span class="first-text">
							<?php echo $parentCategory->description;?>
						</span>
					</div>
				</div>
				<div class="row">
				<?php
					$childCategories = get_categories( array(
					'orderby' => 'name',
					'parent'  => $parentCategory->term_id,
					'hide_empty' => 0
					));
					
					foreach ( $childCategories as $childCategory){
		
					?>
						<div class="col col-lg-6 box-small bordered text-center centervert-mini hover-container">
							<a href="<?php echo esc_url( get_category_link( $childCategory->term_id ) );?>"> 
								<h3>
										<?php echo $childCategory->name;?>
								</h3>
								<span class="text-center centervert-mini first-text">
									<?php echo $childCategory->description;?>
								</span>
							</a> 
						</div>	
						<?php
					}
					?> 
				</div>
			</div>
				<?php
			}
			?>
			<?php 
		} 
		?>
</div>
<?php get_footer();?>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();