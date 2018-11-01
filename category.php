<?php //category
	if( wp_is_mobile() ):
		get_template_part('m/category');
	else:
		get_header();
?>

<div class="container mt-4">
	<div class="cate-head">
		
	</div>

	<div class="cate-body row">
		<div class="col-md-9">
			<!-- the articles list -->
			<?php 
				if( have_posts() ){
					the_archive_title('<h1 class="text-dark">', '</h1>');
				}

				while( have_posts() ):
					the_post();
			?>

			<div class="cate-item d-flex justify-content-between mt-4">
				<div class="cate-thumbnail w-25 m-0">
					<img class="w-100 mr-2" src="<?php echo get_the_post_thumbnail_url();?>">
				</div>
				
				<div class="cate-text w-75 m-0 p-4">
					<h5 class="text-dark">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</h5>
					<p class="text-secondary"><?php the_excerpt();?></p>
				</div>
			</div>

			<?php endwhile;?>

			<!-- page list -->
			<?php 
				$category = get_the_category();
				if( $category[0]->category_count >1 ):
			?>
			<div class="cate-page-list">
				<?php
					if( function_exists( 'show_paginate' ) ){
						show_paginate();
					}
				?>
			</div>
			<?php endif;?>
		</div>

		<div class="col-md-3">
			<?php get_template_part('sidebar');?>
		</div>
	</div>
</div>

<?php get_footer(); endif;?>

