<?php get_header(); ?>
<div class="row">
	<div id="big_col_1" class="col-12 col-lg-6">
		<div class="row">
			<div class="col-12 box-big bordered hover-container centervert text-center">
				<h2>Prototype</h2>
				<span class="first-text">
				Conlangs that do not qualify as "usable"
				</span>
			</div>
		</div>
		<div class="row">
		<?php
			$categories = get_categories( array(
			    'orderby' => 'name',
			    'parent'  => 4,
			    'hid_empty' => 0
			) );
			 
			foreach ( $categories as $category ) {
				?>
				<div class="col col-lg-6 box-small bordered text-center centervert-mini hover-container">
					<a href="<?php echo esc_url( get_category_link( $category->term_id ) );?>"> 
						<h3>
								<?php echo $category->name;?>
						</h3>
						<span class="text-center centervert-mini first-text">
							<?php echo $category->description;?>
						</span>
					</a> 
				</div>	
				<?php
			    /*printf( '<a href="%1$s">%2$s</a><br />',
			        esc_url( get_category_link( $category->term_id ) ),
			        esc_html( $category->name )
			    );*/
			}
			?>
		</div>
	</div>
	<div id="big_col_2" class="col-12 col-lg-6">
		<div class="row">
			<div class="col-12 box-big bordered text-center centervert hover-container">
				<h2>
					Usable
				</h2>
				<span class="first-text">
				<center>
				Conlangs that qualify as "usable"
				</center>
				</span>
			</div>
		</div>
		<div class="row">
			<?php
			$categories = get_categories( array(
			    'orderby' => 'name',
			    'parent'  => 3
			) );
			 
			foreach ( $categories as $category ) {
				?>
				<div class="col col-lg-6 box-small bordered text-center centervert-mini hover-container">
					<a href="<?php echo esc_url( get_category_link( $category->term_id ) );?>"> 
						<h3>
								<?php echo $category->name;?>
						</h3>
						<span class="text-center centervert-mini first-text">
							<?php echo $category->description;?>
						</span>
					</a> 
				</div>	
				<?php
			    /*printf( '<a href="%1$s">%2$s</a><br />',
			        esc_url( get_category_link( $category->term_id ) ),
			        esc_html( $category->name )
			    );*/
			}
			?>
		</div>
	</div>
</div>
<?php get_footer();?>