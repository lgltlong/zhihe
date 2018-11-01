<?php get_template_part('m/header'); ?>

	

	<!-- products style -->
	<div class="single , contianer mt-4 p-0">
		<div class="single-head">
			<h2 class="text-success text-center"><?php the_title();?></h2>
		</div>

		<div class="single-body p-2">
			<!-- excerpt -->
			<?php if( has_excerpt( get_the_ID() ) ):?>
				<div class="single-excerpt p-3 mt-2">
					<p><?php echo get_the_excerpt();?></p>
				</div>
			<?php endif;?>

			<!-- thumbnail -->
			<?php if( has_post_thumbnail( get_the_ID() ) ): ?>
				<div class="mt-3 d-flex justify-content-center">
					<img class="w-75" src="<?php echo get_the_post_thumbnail_url();?>" 
					alt="<?php the_title();?>" title="<?php the_title();?>">
				</div>
			<?php endif;?>

			<!-- infos - products style -->
			<?php 
				if( in_category( array(
					'products' , 'fhmyyyf' , 'wjfxgtyl' , 'yyb' , 'yydbzf' , 'pills'
				) , get_the_ID() ) ):
			?>
			<!-- product infos -->
			<div class="single-info p-2 mt-3">
				<ul class="list-group">
					<li class="list-group-item">
						<span class="single-info-prepend">产品名称:</span>
						<span><?php echo get_post_meta( get_the_ID() , 'pro_name' , true );?></span>
					</li>

					<li class="list-group-item">
						<span class="single-info-prepend">产品品牌:</span>
						<span><?php echo get_post_meta( get_the_ID() , 'pro_brand' , true );?></span>
					</li>

					<li class="list-group-item">
						<span class="single-info-prepend">产品规格: </span>
						<span><?php echo get_post_meta( get_the_ID() , 'pro_standard' , true );?></span>
					</li>

					<li class="list-group-item">
						<span class="single-info-prepend">产品数量: </span>
						<span><?php echo get_post_meta( get_the_ID() , 'pro_count' , true );?></span>
					</li>

					<li class="list-group-item">
						<span class="single-info-prepend">产品价格: </span>
						<span><?php echo get_post_meta( get_the_ID() , 'pro_price' , true );?></span>
					</li>
				</ul>
			</div>

			<?php
				elseif( in_category( array( 'news' ) , get_the_ID() ) ):
			?>

			<?php endif;?>

			<!-- content -->
			<div class="single-content mt-3">
				<pre>
					<?php echo get_post( get_the_ID() )->post_content;?>
				</pre>
			</div>

			<!-- nighbors -->
			<div class="single-nighbor p-2 border-top border-secondary">
				<p class="single-nighbor-prev"><?php previous_post_link('上一篇: %link');?></p>
				<p class="single-nighbor-next"><?php next_post_link('下一篇: %link');?></p>
			</div>
		</div>

		
	</div>

	

<?php get_template_part('m/footer'); ?>