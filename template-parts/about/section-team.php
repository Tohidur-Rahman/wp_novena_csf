<?php
	$options = get_option( 'novena_options' );
	$about_team_box = $options['about_team_box'];
	$about_team_title = $about_team_box['about_team_title'];
	$about_team_des = $about_team_box['about_team_des'];
	$about_team_items = $about_team_box['about_team_member'];
?>
<section class="section team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4"><?php echo $about_team_title; ?></h2>
					<div class="divider mx-auto my-4"></div>
					<p><?php echo $about_team_des; ?></p>
				</div>
			</div>
		</div>

		<div class="row">
            <?php 
            if($about_team_items){
                foreach ($about_team_items as $key => $about_team_single) {
                    $about_team_img = $about_team_single['about_team_img']['url'];
                    $about_team_name = $about_team_single['about_team_name'];
                    $about_team_degn = $about_team_single['about_team_degn'];
            ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="<?php echo $about_team_img; ?>" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html"><?php echo $about_team_name; ?></a></h4>
						<p><?php echo $about_team_degn; ?></p>
					</div>
				</div>
			</div>
            <?php        
                }
            }
            ?>
			
		</div>
	</div>
</section>