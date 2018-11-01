<?php 
	//Template Name: 联系我们
	if( wp_is_mobile() ):
		get_template_part('m/contact');
	else:
	get_header();
?>

	<div class="container mt-4">
		<div class="contact-head">
			<!-- contact head -->
		</div>

		<div class="contact-body row">
			<div class="col-9">
				<div class="contact-title p-4">
					<h1 class="text-dark"><?php echo __('>>联系我们');?></h1>
				</div>

				<div class="contact-info mt-4 p-4">
					<div class="card">
						<img class="card-img-top" src="<?php echo get_template_directory_uri().'/images/map.png';?>">
						<div class="card-body">
							<p class="card-text"><span>地址：</span>&nbsp;&nbsp;汕头市潮阳区广汕公路西岩山西侧</p>
							<p class="card-text"><span>常先生：</span>&nbsp;&nbsp;13922304100</p>
							<p class="card-text"><span>刘女士：</span>&nbsp;&nbsp;13856576230</p>
							<p class="card-text"><span>邮箱：</span>&nbsp;&nbsp;283905983@qq.com</p>
						</div>

						<div class="card-footer">
							<a class="card-link text-right" href="#">more......</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-3">
				<?php get_template_part('sidebar');?>
			</div>
		</div>
	</div>

<?php get_footer(); endif;?>