<?php 
get_header();

$doctor_metabox =  get_post_meta( get_the_ID(), 'doctor_metabox', true );

$doctor_img = $doctor_metabox['doctor_img'];
$doctor_designation = $doctor_metabox['doctor_designation'];
$doctor_socials = $doctor_metabox['doctor_socials'];

$doctor_intro_title = $doctor_metabox['doctor_intro_title'];
$doctor_intro_des = $doctor_metabox['doctor_intro_des'];
$doctor_appmnt_btn = $doctor_metabox['doctor_appmnt_btn'];

$doctor_edu_title = $doctor_metabox['doctor_edu_title'];
$doctor_edu_list = $doctor_metabox['doctor_edu_items'];

$doctor_skill_title = $doctor_metabox['doctor_skill_title'];
$doctor_skill_des = $doctor_metabox['doctor_skill_des'];

$doctor_exp_title = $doctor_metabox['doctor_exp_title'];
$doctor_exp_items = $doctor_metabox['doctor_exp_items'];

$doctor_apnt_title = $doctor_metabox['doctor_apnt_title'];
$doctor_apnt_time = $doctor_metabox['doctor_apnt_time'];

$apnt_urg_title = $doctor_metabox['apnt_urg_title'];
$apnt_urg_number = $doctor_metabox['apnt_urg_number'];

?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Doctor Details</span>
          <h1 class="text-capitalize mb-5 text-lg"><?php the_title(); ?></h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Doctor Details</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section doctor-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="doctor-img-block">
                    <img src="<?php echo $doctor_img['url']; ?>" alt="" class="img-fluid w-100">

					<div class="info-block mt-4">
						<h4 class="mb-0"><?php the_title(); ?></h4>
						<p><?php echo $doctor_designation; ?></p>

						<ul class="list-inline mt-4 doctor-social-links">
                            <?php 
                                if ($doctor_socials):
                                    foreach ($doctor_socials as $social_single):
                            ?>
                                <li class="list-inline-item"><a href="<?php echo $social_single['doctor_social_link']['url'];?>"><i class="<?php echo $social_single['doctor_social_icon'];?>"></i></a></li>
                            <?php
                                    endforeach;
                                endif;
                            ?>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-8 col-md-6">
				<div class="doctor-details mt-4 mt-lg-0">
					<h2 class="text-md"><?php echo $doctor_intro_title; ?></h2>
					<div class="divider my-4"></div>
					<p><?php echo $doctor_intro_des; ?></p>

					<a href="<?php echo $doctor_appmnt_btn['url']; ?>" class="btn btn-main-2 btn-round-full mt-3"><?php echo $doctor_appmnt_btn['text']; ?><i
							class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section doctor-qualification gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="section-title">
					<h3><?php echo $doctor_edu_title; ?></h3>
					<div class="divider my-4"></div>
				</div>
			</div>
		</div>

		<div class="row">
            <?php 
                if ($doctor_edu_list):
                    foreach ($doctor_edu_list as $doctor_edu_single):
            ?>
            <div class="col-lg-6">
				<div class="edu-block mb-5">
					<span class="h6 text-muted"><?php echo $doctor_edu_single['doctor_edu_year']; ?> </span>
					<h4 class="mb-3 title-color"><?php echo $doctor_edu_single['doctor_edu_degree']; ?></h4>
					<p><?php echo $doctor_edu_single['doctor_edu_des']; ?></p>
				</div>
			</div>
            <?php
                    endforeach;
                endif;
            ?>  
		</div>
	</div>
</section>


<section class="section doctor-skills">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h3><?php echo $doctor_skill_title; ?></h3>
				<div class="divider my-4"></div>
				<p><?php echo $doctor_skill_des; ?></p>
			</div>
			<div class="col-lg-4">
				<div class="skill-list">
					<h5 class="mb-4"><?php echo $doctor_exp_title; ?></h5>
					<ul class="list-unstyled department-service">
                        <?php 
                            if ($doctor_exp_items):
                                foreach ($doctor_exp_items as $doctor_exp_single):
                        ?>
                        <li><i class="icofont-check mr-2"></i><?php echo $doctor_exp_single['doctor_exp_item']?></li>
                        <?php
                                endforeach;
                            endif;
                        ?>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="sidebar-widget  gray-bg p-4">
					<h5 class="mb-4"><?php echo $doctor_apnt_title; ?></h5>

					<ul class="list-unstyled lh-35">
                        <?php 
                            if ($doctor_apnt_time):
                                foreach ($doctor_apnt_time as $doctor_apnt_single):
                        ?>
                        <li class="d-flex justify-content-between align-items-center">
							<span><?php echo $doctor_apnt_single['appnt_day']; ?></span>
							<span><?php echo $doctor_apnt_single['appnt_time']; ?></span>
						</li>
                        <?php
                                endforeach;
                            endif;
                        ?>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0"><?php echo $apnt_urg_title; ?></p>
						<h3 class="text-color-2"><?php echo $apnt_urg_number;?></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>