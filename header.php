<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="http://www.byshhyt.com/xmlrpc.php">

	
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

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!--show nav banner and sidebar -->
	<div id="navbar" class="container-fluid">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-2">
				<img class="navbar-brand w-100" src="<?php echo get_template_directory_uri().'/images/logo.png' ?>">
			</div>

			<div class="col-9 d-flex align-items-center justify-content-center">
				<nav class="nav nav-fill">
					<li class="nav-item p-3">
						<a class="nav-link text-dark" href="<?php echo site_url().'/?r=1';?>">首页</a>
						<p class="text-primary">HOME</p>
					</li>

					<li class="nav-item p-3">
						<!-- <a class="nav-link" href="http://localhost/39/?page_id=4">公司简介</a> -->
						<a class="nav-link text-dark" href="<?php echo site_url().'/?page_id=41';?>">公司简介</a>
						<p class="text-danger">Company profile</p>
					</li>

					<li class="nav-item p-3">
						<a class="nav-link text-dark" href="<?php echo site_url().'/?cat=2';?>">产品中心</a>
						<p class="text-warning">Product Center</p>
					</li>

					<li class="nav-item p-3">
						<a class="nav-link text-dark" href="<?php echo site_url().'/?cat=3';?>">新闻资讯</a>
						<p class="text-secondary">News info</p>
					</li>

					<li class="nav-item p-3">
						<a class="nav-link text-dark" href="<?php echo site_url().'/?page_id=43';?>">招商加盟</a>
						<p class="text-success">Investment join</p>
					</li>

					<!-- <li class="nav-item p-3">
						<a class="nav-link text-dark" href="#">防伪查询</a>
						<p class="text-dark">Security code</p>
					</li> -->

					<li class="nav-item p-3">
						<a class="nav-link text-dark" href="<?php echo site_url().'/?page_id=45';?>">代理留言</a>
						<p class="text-muted">Ieave comments</p>
					</li>

					<li class="nav-item p-3">
						<a class="nav-link text-dark" href="<?php echo site_url().'/?page_id=48';?>">联系我们</a>
						<p class="text-danger">Contact us</p>
					</li>
				</nav>
			</div>
		</div>
	</div>

	<!-- banner -->
	<?php if( is_home() || is_front_page() ):?>
	<div class="container-fluid p-0">
		<div id="banner-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/banner-2.jpg';?>" alt="">
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/banner-3.jpg';?>" alt="">
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/banner-4.jpg';?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$('#banner-carousel').carousel({
			interval: 6000
		});
	</script>
	<?php else:?>
	<div class="container-fluid p-0">
		<img class="w-100 p-0" src="<?php echo get_template_directory_uri().'/images/banner-inner.jpg';?>">
	</div>

	<?php endif;?>

	<div id="content" class="site-content">
