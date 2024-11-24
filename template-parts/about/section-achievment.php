<?php
	$options = get_option( 'novena_options' );
	$about_achievements_box = $options['about_achievements_box'];
	$about_achievements_title = $about_achievements_box['about_achievements_title'];
	$about_achievements_imgs = $about_achievements_box['about_achievements'];
?>

<section class="section awards">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4">
				<h2 class="title-color"><?php echo $about_achievements_title;?></h2>
				<div class="divider mt-4 mb-5 mb-lg-0"></div>
			</div>
			<div class="col-lg-8">
				<div class="row">

				<?php 					
                    if($about_achievements_imgs) {
                        foreach ($about_achievements_imgs as $key => $single_achievement) {
                            
                            $about_achievement_img = $single_achievement['about_achievements_img']['url'];
                                ?>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="award-img">
                                            <img src="<?php echo $about_achievement_img;?>" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                <?php 
                            }
                    }
						
					
				?>
				</div>
			</div>
		</div>
	</div>
</section>