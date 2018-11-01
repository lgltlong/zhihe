<?php 
	//Template Name: 公司简介
	get_header();
?>

<div id="p-introduce" class="container mt-4">
	<div class="row">
		<?php 
			while( have_posts() ): the_post();
		?>

		<div class="col-md-9">
			<div class="page_head p-4 pl-0 border-bottom border-dark">
				<h1 class="text-dark"><?php the_title();?></h1>			
			</div>

			<div class="page_middle mt-4 d-flex justify-content-center">
				<img class="w-50" src="<?php echo get_template_directory_uri().'/images/ab_img.jpg';?>">
			</div>

			<style type="text/css">
				.page_body p{ font-size: 14px; line-height: 250%;}
			</style>
			<div class="page_body p-4">
				<?php the_content();?>
			</div>
		</div>


		<?php endwhile;?>
		<div class="col-md-3">
			<?php get_template_part('sidebar');?>
		</div>
	</div>
</div>

<?php get_footer();?>
