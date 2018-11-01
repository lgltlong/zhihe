<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<?php get_template_part('hot');?>

	<!-- row adv -->
	<div class="container p-0 w-0 mt-4">
		<img class="w-100" src="<?php echo get_template_directory_uri().'/images/adv.png';?>">
	</div>

	<!-- products -->
	<?php get_template_part('products_slide');?>

	<!-- products slide -->
	<div id="pros-slide" class="container">
		<div class="d-flex justify-content-between">
			<?php 
				$pros = array(
					'cat' => '2',
					'posts_per_page' => 5
				);
				query_posts($pros);
				if(have_posts()):
					while( have_posts() ):
						the_post();

			?>
				<div class="pros-item p-2">
					<img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" title="<?php the_title();?>">
					<p class="text-dark"><?php the_title();?></p>
				</div>

			<?php endwhile; endif;?>
		</div>
	</div>

<?php get_footer(); ?>
