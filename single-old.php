<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Sela
 */
if( wp_is_mobile() ):
	get_template_part( 'm/single' );
else:
get_header(); ?>
	
	<!-- single body -->
	<div id="single" class="container mt-4">
		<div class="row">

			<!-- left article body & the products category -->
			<?php if( in_category( array('products','fhmyyyf','wjfxgtyl','yyb','yydbzf'), get_the_ID() ) ):?>
			<div class="single col-md-9">
				<div class="single-head p-4">
					<h1 class="text-dark"><?php echo the_title();?></h1>
				</div>

				<div class="single-body mt-4">
					<div class="single-content d-flex justify-content-between">
						<div class="single-thumbnail w-50 p-3">
							<img class="w-100" src="<?php echo get_the_post_thumbnail_url();?>">
						</div>

						<div class="single-info w-50 p-3">
							<ul class="list-group">
								<li class="list-group-item">
									<p>
										<span class="font-b">产品名称:</span>
										<?php echo get_post_meta(get_the_ID(),'pro_name', true);?>
									</p>
								</li>

								<li class="list-group-item">
									<p>
										<span class="font-b">产品品牌:</span>
										<?php echo get_post_meta(get_the_ID(),'pro_brand', true);?>
									</p>
								</li>

								<li class="list-group-item">
									<p>
										<span class="font-b">产品规格:</span>
										<?php echo get_post_meta(get_the_ID(),'pro_standard', true);?>
									</p>
								</li>

								<li class="list-group-item">
									<p>
										<span class="font-b">产品数量:</span>
										<?php echo get_post_meta(get_the_ID(),'pro_count', true);?>
									</p>
								</li>
							</ul>
						</div>
					</div>

					<div class="clear single-text border-top border-primary p-3">
						<pre>
							<?php
								echo get_post( get_the_ID() )->post_content;
							?>
						</pre>
					</div>
				</div>
			</div>

			<!-- news category -->
			<?php elseif( in_category( array('news'), get_the_ID() ) ):?>
			<div class="single col-md-9">
				<div class="single-head p-4">
					<h1 class="text-dark text-center"> <?php the_title();?> </h1>
				</div>

				<div class="single-body">
					<div class="single-excerpt">
						<p><?php echo get_the_excerpt();?></p>
					</div>

					<div class="clear single-text border-top border-primary p-3">
						<pre>
							<?php echo get_post( get_the_ID() )->post_content;?>
						</pre>
					</div>
				</div>
			</div>


			<?php endif;?>

			<!-- sidebar -->
			<div class="col-md-3">
				<?php get_sidebar(); ?>		
			</div>
		</div>
	</div>
<?php get_footer(); endif; ?>
