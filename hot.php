<div id="hot" class="container mt-4">
	<div class="row d-flex justify-content-between">
		<!-- thumbnails -->
		<div id="hot-thumbnails" class="col-md-3 p-0">
			<div class="hot-head d-flex justify-content-between mb-4">
				<h5 class="d-block hot-title text-primary">最新产品<span class="text-secondary"> / LATEST</span></h5>
				<a href="http://www.byshhyt.com/?cat=2">
					<img src="<?php echo get_template_directory_uri().'/images/more.jpg';?>">
				</a>
			</div>

			<div id="products_carousel" class="carousel slide p-0" data-ride="carousel">
				<div class="carousel-inner">
					<?php
						$args = array(
							'cat' => 'products',
							'posts_per_page' => 10
						);
						query_posts( $args );
						if( have_posts() ) :
							$count = 1;
							while( have_posts() ):
								the_post();
								if( $count == 1 ):
									$count++;
					?>
					<div class="carousel-item active">
						<a href="<?php the_permalink();?>">
							<img class="w-100 mb-4" src="<?php echo get_the_post_thumbnail_url();?>">
							<span class="text-secondary"><?php the_title();?></span>
						</a>
					</div>

					<?php else: ?>
					<div class="carousel-item">
						<a href="<?php the_permalink();?>">
							<img class="w-100 mb-4" src="<?php echo get_the_post_thumbnail_url();?>">
							<span class="text-secondary"><?php the_title();?></span>
						</a>
					</div>
				
					<?php endif; endwhile; endif; ?>
				</div>
				<a class="carousel-control-prev" href="#products_carousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Preview</span>
				</a>

				<a class="carousel-control-next" href="#products_carousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div><!-- end thubmnails -->

		<!-- articles list -->
		<div id="hot-articles" class="col-md-4  p-0">
			<div class="hot-head d-flex justify-content-between mb-4">
				<h5 class="d-block hot-title text-primary">最新资讯<span class="text-secondary"> / NEWS</span></h5>
				<a href="http://www.byshhyt.com/?cat=3">
					<img src="<?php echo get_template_directory_uri().'/images/more.jpg';?>">
				</a>
			</div>

			<?php 
				$args_articles = array( 'cat'=>'news', 'posts_per_page'=>6 );
				query_posts( $args_articles );
				if(have_posts()): while( have_posts() ) : the_post(); 
			?>

			<div class="row col border-bottom pt-2">
				<p class="d-block too-long">
					<span class="text-secondary"> <?php the_date(); ?> | </span>
					<a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title();?> </a>
				</p>
			</div>

			<?php endwhile; endif;?>
		</div><!-- end articles list -->

		<!-- introduce -->
		<div class="col-md-4">
			<div class="hot-head d-flex justify-content-between mb-4">
				<h5 class="d-block hot-title text-primary">关于我们<span class="text-secondary"> / ABOUT</span></h5>
				<a href="http://www.byshhyt.com/?page_id=41">
					<img src="<?php echo get_template_directory_uri().'/images/more.jpg';?>">
				</a>
			</div>

			<div class="hot-body">
				<img class="d-block w-100 mb-2" src="<?php echo get_template_directory_uri().'/images/ab_img.jpg';?>">	
				<p class="text-secondary">白云山和记黄埔莱达制药（汕头）有限公司，（以下简称“白云山和黄莱达”），是由广药白云山和李嘉诚先生共同合资的广州白云山和记黄埔中药有限公司投资5000多万元与广东莱达制药有限公司共同成立的。
					<a class="text-danger" href="http://www.byshhyt.com/?page_id=41">[详情]</a>
				</p>
			</div>
		</div>
	</div>
</div>