<?php 
	//Template Name: 代理留言 
	if( wp_is_mobile() ):
		get_template_part('m/agent');
	else:
		get_header();
?>

	<div class="container mt-4">
		<!-- cate body -->
		<div class="agent-body row">
			<div class="col-md-9 p-0">
				<div class="agent-title">
					<h1><?php echo __('尊敬的用户，欢迎您访问我们的网站，更多商机只要填写信息即可获取');?></h1>
				</div>

				<div class="agent-info mt-4 p-4">
					<form>
						<!-- row 1-->
						<div class="row d-flex justify-content-between">
							<div class="input-group col-6">
								<div class="input-group-prepend">
									<span class="input-group-text">姓&nbsp;&nbsp;名</span>
								</div>
								<input class="form-control" type="text" name="agent-name" placeholder="例：张三">
							</div>

							<div class="input-group col-6">
								<div class="input-group-prepend">
									<span class="input-group-text">电&nbsp;&nbsp;话</span>
								</div>
								<input class="form-control" type="text" name="agent-phone" placeholder="例：13888888888">
							</div>
						</div>

						<!-- row 2-->
						<div class="input-group mt-4">
							<div class="input-group-prepend">
								<span class="input-group-text">地&nbsp;&nbsp;址</span>
							</div>
							<input class="form-control" type="text" name="agent-address" placeholder="例：北京市朝阳区……">
						</div>

						<!-- row 3 -->
						<div class="row mt-4">
							<div class="col-6 input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">性&nbsp;&nbsp;质</span>
								</div>

								<select class="custom-select">
									<option selected>choose....</option>
									<option>个人</option>
									<option>公司</option>
								</select>
							</div>
						</div>
						
						<!-- row 4 -->
						<div class="row mt-4">
							<div class="input-group" style="padding: 0 15px;">
								<div class="input-group-prepend">
									<span class="input-group-text">留&nbsp;&nbsp;言</span>
								</div>
								<textarea class="form-control" rows="3"></textarea>
							</div>
						</div>

						<div class="row mt-4">
							<div class="col-6">
								<input class="btn btn-primary w-100" type="submit" name="agent-smt" placeholder="submit">
							</div>
						</div>
					</form>
				</div>
			</div>

			<!-- sidebar -->
			<div class="col-md-3">
				<?php
					get_template_part('sidebar');
				?>
			</div>
		</div>
	</div>

<?php get_footer(); endif; ?>
