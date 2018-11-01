<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<!-- footer -->
	<footer class="container-fluid d-flex justify-content-center mt-4">
		<div class="container p-4 row">
			<div class="col-8 p-0">
				<ul class="nav nav-pills mb-4">
					<li class="nav-item">
						<a class="nav-link active" href="<?php echo site_url();?>">网站首页</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url().'/?page_id=41';?>">企业简介</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url().'/?cat=2';?>">产品中心</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url().'/?cat=3';?>">新闻资讯</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url().'/uploads/album.pdf';?>">企业画册</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url().'/?page_id=43';?>">招商加盟</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url().'/?page_id=48';?>"> 联系我们</a>
					</li>
				</ul>
				<p class="text-light">Copyright © 2018 致呵-广药白云山和记黄埔莱达 All rights reserved. </p>
				<p class="text-light">汕头市潮阳区广汕公路西岩山西侧</p>
				<p  class="text-secondary">致呵，专注母婴健康生活</p>
			</div>

			<div class="footer-erweima col-4 d-flex justify-content-between">
				<div>
					<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/website.png';?>">	
					<p class="text-light">公司官网</p>
				</div>

				<div>
					<img class="w-100" src="<?php echo get_template_directory_uri().'/images/hfs.jpg';?>">
					<p class="text-light">在线客服：胡经理</p>
				</div>
			</div>
			
		</div>
	</footer>

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
