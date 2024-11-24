<?php
	$options = get_option( 'novena_options' );
	$about_testimonial_box = $options['about_testimonial_box'];
	$about_testimonial_img = $about_testimonial_box['about_testimonial_img'];
	$about_testimonial_title = $about_testimonial_box['about_testimonial_title'];
	$about_testimonial_items = $about_testimonial_box['about_testimonial_item'];
?>
<section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6">
				<div class="section-title">
					<h2 class="mb-4"><?php echo $about_testimonial_title; ?></h2>
					<div class="divider  my-4"></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 testimonial-wrap offset-lg-6">
                <?php 
                    if ($about_testimonial_items) {
                        foreach ($about_testimonial_items as $about_testimonial_item) {
                ?>
                <div class="testimonial-block">
					<div class="client-info ">
						<h4><?php echo $about_testimonial_item['about_item_name']; ?></h4>
						<span><?php echo $about_testimonial_item['about_item_designation']; ?></span>
					</div>
					<p>
                    <?php echo $about_testimonial_item['about_item_des']; ?>
					</p>
					<i class="icofont-quote-right"></i>
					
				</div>
                <?php
                        }
                    }
                ?>
				
			</div>
		</div>
	</div>
</section>