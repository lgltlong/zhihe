<?php
	// ltd category
	get_template_part('m/header');
?>

<div id="cate" class="container p-0">
	<div class="cate-head">
		<?php if( in_category( array(
					'products' , 'fhmyyyf' , 'wjfxgtyl' , 'yyb' , 'yydbzf' , 'pills'
				) , get_the_ID() ) ):?>
			<h2 class="cate-title p-4 text-danger">产品中心</h2>
		<?php elseif( in_category( array( 'news') , get_the_ID() ) ):?>
			<h2 class="cate-title p-4 text-danger">新闻资讯</h2>
		<?php endif;?>
	</div>

	<!-- categories -->
	<div class="sect-footer p-3">
		<div class=""></div>

		<div class="d-flex justify-content-between">
			<a class="btn btn-success" href="<?php echo site_url().'/?cat=6';?>">营养包</a>
			<a class="btn btn-outline-success" href="<?php echo site_url().'/?cat=5';?>">免疫营养粉</a>
			<a class="btn btn-outline-success" href="<?php echo site_url().'/?cat=8';?>">营养蛋白质粉</a>
		</div>
		<div class="d-flex justify-content-between">
			<a class="btn btn-outline-success" href="<?php echo site_url().'/?cat=7';?>">微晶粉型固体饮料</a>
			<a class="btn btn-outline-success" href="<?php echo site_url().'/?cat=4';?>">软胶囊/凝胶糖果</a>
		</div>
	</div>

	<!-- articles list -->
	<div class="cate-body">
		<?php 
			if( have_posts() ):
				while( have_posts() ):
					the_post();
		?>

		<div class="cate-item mt-4 p-1 d-flex justify-content-between">
			<div class="cate-thumbnail p-0">
				<img class="w-100" src="<?php echo get_the_post_thumbnail_url();?>" alt="致呵" title="致呵">
			</div>

			<div class="cate-excerpt p-2">
				<a class="cate-item-title" href="<?php the_permalink();?>"><span><?php the_title();?></span></a>
				<p class="cate-item-excerpt text-secondary"><?php echo get_the_excerpt();?></p>
			</div>
		</div>
		<?php endwhile; endif;?>
	</div>

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

<?php get_template_part('m/footer');?>