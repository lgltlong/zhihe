<!-- about us -->
<div id="index-intro" class="container-fluid mt-4 p-4">
	<div class="sect-head">
		<h2 class="text-primary">公司简介</h2>
		<p class="text-secondary">COMPANY PROFILE</p>
	</div>
	<div class="sect-body">
		<p>白云山和记黄埔莱达制药（汕头）有限公司（以下简称“白云山和黄莱达”），是由广药白云山与李嘉诚先生共同合资的广州白云山和记黄埔中药有限公司投资5600多万元与广东莱达制药有限公司共同成立的。注册时间是2015年6月份，其中广州白云山和记黄埔中药占股70%，广东莱达制药占股30%。注册资金1000万元。是一家集科研、生产、商贸为一体，中药、西药生产销售于一身的高科技现代制药企业。</p>
		<a class="btn btn-primary" href="<?php echo site_url().'/?page_id=41';?>">查看详情</a>
	</div>
</div>

<!-- products -->
<div id="index-pros" class="container-fluid mt-4">
	<div class="sect-head d-flex justify-content-between">
		<div class="sect-head-name">
			<h2 class="text-danger">最新产品</h2>		
			<p class="text-secondary">LASTEST PRODUCTS</p>
		</div>

		<div class="sect-head-more">
			<a class="text-secondary" href="http://www.byshhyt.com/?cat=2">MORE+</a>
		</div>
	</div>

	<div class="sect-body carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<?php 
				$argv = array(
					'cat' => 2,
					'posts_per_page' => 19
				);
				query_posts($argv);
				$count = 1;
				if( have_posts() ):
					while( have_posts() ):
						the_post();
			?>

				<?php if( $count == 1 ): $count++;?>
					<div class="carousel-item active">
				<?php else: $count++;?>
					<div class="carousel-item">
				<?php endif;?>
						<a href="<?php the_permalink();?>">
							<img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url();?>">
						</a>
						<div class="product-info">
							<h5 class="text-secondary"><?php the_title();?></h5>
							<p class="text-secondary"><?php the_excerpt();?></p>
						</div>
					</div>
			<?php endwhile; endif;?>
			</div>
		</div>
	</div>

	<div class="sect-footer p-3">
		<div class="">
			<p class="text-warning">更多产品分类</p>
		</div>

		<div class="d-flex justify-content-between">
			<a class="btn btn-primary" href="<?php echo site_url().'/?cat=6';?>">营养包</a>
			<a class="btn btn-outline-primary" href="<?php echo site_url().'/?cat=5';?>">免疫营养粉</a>
			<a class="btn btn-outline-primary" href="<?php echo site_url().'/?cat=8';?>">营养蛋白质粉</a>
		</div>
		<div class="d-flex justify-content-between">
			<a class="btn btn-outline-primary" href="<?php echo site_url().'/?cat=7';?>">微晶粉型固体饮料</a>
			<a class="btn btn-outline-primary" href="<?php echo site_url().'/?cat=4';?>">软胶囊/凝胶糖果</a>
		</div>
	</div>
</div>

<!-- album -->
<div class="container-fluid p-0 mt-3">
	<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/about-4.jpg';?>">
</div>

<!-- news -->
<div id="index-news" class="container-fluid mt-4">
	<div class="sect-head d-flex justify-content-between">
		<div class="sect-head-name">
			<h2 class="text-success">新闻资讯</h2>	
			<p class="text-secondary">INFOMATIONS</p>	
		</div>

		<div class="sect-head-more">
			<a class="text-secondary" href="http://www.byshhyt.com/?cat=3">MORE+</a>
		</div>
	</div>

	<div class="sect-body">
		<?php
			$news_args = array(
				'cat' => '3',
				'posts_per_page' =>6 
			);
			query_posts($news_args);
			if( have_posts() ):
				while( have_posts() ):
					the_post();
		?>

			<div class="sect-item d-flex justify-content-between mt-2">
				<div class="w-75">
					<p><a class="" href="<?php the_permalink();?>"><?php the_title();?></a></p>
				</div>
				<div class="w-25">
					<span class="text-secondary">[<?php the_date();?>]</span>				
				</div>
			</div>

		<?php endwhile; endif;?>
	</div>
</div>

<!-- album -->
<div id="index-album" class="mt-4">
	<a class="btn btn-outline-success w-75" href="<?php echo site_url().'/uploads/album.pdf'?>">
		更多信息请查看企业画册
	</a>
</div>