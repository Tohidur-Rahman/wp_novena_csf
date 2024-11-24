<?php 
    $options = get_option( 'novena_options' );
    $service_cta_box = $options['service_cta_box'];
?>
<section class="section cta-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg"><?php echo $service_cta_box['service_cta_title1']; ?> <span class="title-color"><?php echo $service_cta_box['service_cta_title2']; ?></span></h2>
					<a href="<?php echo $service_cta_box['service_cta_btn']['url']; ?>" class="btn btn-main-2 btn-round-full"><?php echo $service_cta_box['service_cta_btn']['text']; ?><i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>