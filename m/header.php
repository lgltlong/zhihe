<!DOCTYPE html>
<html>
<head>
	<?php 
		if( is_home() || is_page() ):?>
		<title><?php echo get_bloginfo('name');?></title>
		<meta name="keywords" content="<?php echo __('致呵, 广药白云山黄埔莱达，母婴，广药白云山致呵');?>">
		<meta name="description" content="<?php echo get_bloginfo('description');?>">
	<?php elseif( is_category() ): $cat = get_the_category(); ?>
		<title><?php echo $cat[0]->cat_name . ' | 致呵 | 广药白云山黄埔莱达'; ?></title>
		<meta name="description" content="<?php echo strip_tags(category_description()); ?>">
		<meta name="keywords" content="<?php echo __('广药白云山，致呵，黄埔莱达，母婴，广药白云山致呵');?>">

	<?php elseif( is_single() ):?>
		<title><?php echo get_the_title() . ' | 致呵 | 广药白云山黄埔莱达'; ?></title>
		<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>">
		<meta name="keywords" content="<?php echo get_the_title() . '广药白云山，致呵，黄埔莱达，母婴，广药白云山致呵'; ?>">

	<?php endif;?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/bootstrap.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/bootstrap.min.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/m/style.css';?>">
	<script type='text/javascript' src='https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js?ver=1.0'></script>
	<script type='text/javascript' src='https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js?ver=1.0'></script>
	<script type='text/javascript' src='https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js?ver=1.0'></script>
</head>
<body>

<!-- nav -->
<div id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="<?php echo site_url();?>">
		<img class="d-block w-50" src="<?php echo get_template_directory_uri().'/images/logo.png';?>">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#m-navbar" aria-controls="m-navbar">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div id="m-navbar" class="collapse navbar-collapse">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo site_url().'/?cat=2';?>">产品中心</a>
			</li>

			<li class="nav-item"> 
				<a class="nav-link" href="<?php echo site_url().'/?cat=3';?>">新闻资讯</a>
			</li>

			<li class="nav-item"> 
				<a class="nav-link" href="<?php echo site_url().'/?page_id=41';?>">公司简介</a>
			</li>

			<li class="nav-item"> 
				<a class="nav-link" href="<?php echo site_url().'/?page_id=43';?>">招商加盟</a>
			</li>

			<li class="nav-item"> 
				<a class="nav-link" href="<?php echo site_url().'/?page_id=48';?>">联系我们</a>
			</li>
		</ul>
	</div>
</div>

<!-- banner slide -->
<div class="container carousel slide p-0" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active p-0">
			<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/m-banner-1.jpg';?>" alt="致呵 | 广药白云山和记黄埔莱达" title="致呵 | 广药白云山和记黄埔莱达">
		</div>
		<div class="carousel-item p-0">
			<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/m-banner-3.jpg';?>" alt="致呵 | 广药白云山和记黄埔莱达" title="致呵 | 广药白云山和记黄埔莱达">
		</div>

		<div class="carousel-item p-0">
			<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/m-banner-4.jpg';?>" alt="致呵 | 广药白云山和记黄埔莱达" title="致呵 | 广药白云山和记黄埔莱达">
		</div>
	</div>
</div>