<?php 
  $options = get_option( 'novena_options' );
  $about_me_items = $options['about_title'];
  $about_me_title = $about_me_items['about_heading'];
  $about_me_des = $about_me_items['about_desc'];
  $about_me_signature = $about_me_items['about_signature'];
?>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="title-color">
          <?php echo esc_html( $about_me_title ); ?>
        </h2>
			</div>
			<div class="col-lg-8">
				<p><?php echo esc_html( $about_me_des ); ?></p>
				<img src="<?php echo esc_url( $about_me_signature['url'] ); ?>" alt="<?php echo $about_me_signature['alt'];?>" class="img-fluid">
			</div>
		</div>
	</div>
</section>