<?php 
	$options = get_option( 'novena_options' );
	$banner_subtitle = $options['banner_subtitle'];
	$banner_title = $options['banner_title'];
	$banner_desc = $options['banner_desc'];
	$banner_btn_url = $options['banner_btn']['url'];
	$banner_btn_text = $options['banner_btn']['text'];
?>

<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<?php
						if($banner_subtitle) {
							?>
								<span class="text-uppercase text-sm letter-spacing "><?php echo $banner_subtitle;?></span>
							<?php
						}
					?>

					<?php
						if($banner_title) {
							?>
								<h1 class="mb-3 mt-3"><?php echo $banner_title;?></h1>
							<?php
						}
					?>

					<?php
						if($banner_desc) {
							?>
								<p class="mb-4 pr-5"><?php echo $banner_desc;?></p>
							<?php
						}
					?>

					<?php 
						if($banner_btn_url) {
							?>
							<div class="btn-container ">
								<a href="<?php echo $banner_btn_url;?>" target="_blank" class="btn btn-main-2 btn-icon btn-round-full"><?php echo $banner_btn_text;?> <i class="icofont-simple-right ml-2  "></i></a>
							</div>
							<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
</section>