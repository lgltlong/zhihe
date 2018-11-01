<?php 
	//Template Name: 公司简介-2
	if( wp_is_mobile() ):
		get_template_part('m/introduce');
	else:
		get_header();
?>

<div id="intro-head" class="container mt-4">
	<div class="row sect-head">
		<h1 class="text-primary text-center">广药白云山和记黄埔莱达--<span class="text-danger">致呵</span></h1>
	</div>
</div>

<div id="intro-body" class="container mt-4">
	<div class="intro-item row">
		<div class="col-5">
			<p> <span class="highlight">白云山和记黄埔莱达制药（汕头）有限公司</span>（以下简称“白云山和黄莱达”），是由广药白云山与李嘉诚先生共同合资的广州白云山和记黄埔中药有限公司投资5600多万元与广东莱达制药有限公司共同成立的。注册时间是2015年6月份，其中广州白云山和记黄埔中药占股70%，广东莱达制药占股30%。注册资金1000万元。是一家集科研、生产、商贸为一体，中药、西药生产销售于一身的高科技现代制药企业。</p>
		</div>

		<div class="col-7">
			<img class="w-100" src="<?php echo get_template_directory_uri().'/images/factory.jpg';?>">
		</div>
	</div>

	<!-- carousel -->
	<div id="intro-carousel" class="carousel slide mt-4" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/wenhua-1.jpg';?>" alt="广药白云山和记黄埔莱达致呵">
			</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/wenhua-2.jpg'?>" alt="广药白云山和记黄埔莱达致呵">
			</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo get_template_directory_uri().'/images/wenhua-3.jpg';?>" alt="广药白云山和记黄埔莱达致呵">
			</div>
		</div>
		<a class="carousel-control-prev" href="#intro-carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
			<span class="sr-onlu">Previous</span>
		</a>

		<a class="carousel-control-next" href="#intro-carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<script type="text/javascript">
		$('#intro-carousel').carousel({
			interval:2000
		});

		$('.carousel').carousel('cycle');

	</script>

	<!-- intro item -2 -->
	<div class="intro-item mt-4">
		<p><span class="highlight">白云山和记黄埔莱达公司</span>始终秉承“广药白云山，爱心满人间”理念，以及“<span class="highlight">厚德制药，质量为本</span>”的宗旨，潜心致力于企业核心能力的提升和卓越团队的打造，倡导绿色制药，服务百姓健康。</p>

		<p>公司拥有员工近 200人，其中科技人员占60%以上，拥有硕士、学士、高/中级技术职称的高级技术人才占30%。公司拥有符合国家新版GMP规范要求的<span class="highcolor highlight">片剂、胶囊剂、颗粒剂和散剂</span>先进的生产线，一期年产可达2亿元。产品包括全国独家品种心脉安片和肠胃适胶囊在内的30余个中、西药品批文，品种涵盖心脑血管科、消化科、呼吸科、儿科、妇科、感染科等多个治疗领域，具备丰富的产品群。</p>

		<p>在高速成长的过程中，公司已经具有面向医院临床、商业流通、零售终端的多元化的市场开拓能力，销售网络遍布全国各省的主要城市和地区。今后，白云山和黄莱达将充分依托白云山、和记黄埔的品牌和市场资源，坚持“工商并举，中西并重”的基本方针，以市场为导向，以科技为依托，以管理为保证，大力实施“创新发展、责任营销”战略，努力将公司打造成为“<span class="highcolor highlight">技术一流、品质一流、服务一流、效益一流</span>”的现代制药企业，为百姓的健康事业做出更大的贡献！</p>
	</div>

	<div class="intro-item d-flex justify-content-between mt-4">
		<img class="d-block" src="<?php echo get_template_directory_uri().'/images/ljc-1.jpg';?>" alt="李嘉诚 致呵" title="李嘉诚 致呵">
		<img class="d-block" src="<?php echo get_template_directory_uri().'/images/ljc-3.jpg';?>" alt="李嘉诚 致呵" title="李嘉诚 致呵">
		<img class="d-block" src="<?php echo get_template_directory_uri().'/images/ljc-4.jpg';?>" alt="李嘉诚 致呵" title="李嘉诚 致呵">
	</div>
</div>

<?php get_footer(); endif;?>