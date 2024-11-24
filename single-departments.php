<?php 

$department_metabox =  get_post_meta( get_the_ID(), 'department_metabox', true );
$service_big_img =  $department_metabox['department_img']['url'];

$service_title = $department_metabox['dpt_service_title'];
$service_list = $department_metabox['dpt_service_list'];
$service_btn = $department_metabox['dpt_service_btn'];

$dept_schedule_title = $department_metabox['dept_schedule_title'];
$dept_schedule_list = $department_metabox['dept_schedule_list'];
$dept_schedule_urg_title = $department_metabox['dept_urg_title'];
$dept_schedule_urg_number = $department_metabox['dept_urg_number'];

get_header();

?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Department Details</span>
          <h1 class="text-capitalize mb-5 text-lg">Single Department</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Department Details</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<img src="<?php echo $service_big_img; ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					<h3 class="text-md"><?php the_title(); ?></h3>
					<div class="divider my-4"></div>
					<?php the_content(); ?>
					<h3 class="mt-5 mb-4"><?php echo $service_title; ?></h3>
					<div class="divider my-4"></div>
					<ul class="list-unstyled department-service">
						<?php
						if ($service_list) {
							foreach ($service_list as $service_list_single) {
						?>	
							<li><i class="icofont-check mr-2"></i><?php echo $service_list_single['dpt_service_list_title']; ?></li>
						<?php	
							}
						} 	
						?>
					</ul>

					<a href="<?php echo $service_btn['url']; ?>" class="btn btn-main-2 btn-round-full"><?php echo $service_btn['text']; ?><i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4"><?php $dept_schedule_title; ?></h5>
					<ul class="list-unstyled">
						<?php 
							if ($dept_schedule_list):
								foreach ($dept_schedule_list as $dept_schedule_single):
									
						?>
						<li class="d-flex justify-content-between align-items-center">
							<span><?php echo $dept_schedule_single['dept_schedule_day']; ?></span>
							<span><?php echo $dept_schedule_single['dept_schedule_time']; ?></span>
						</li>
						<?php		
							endforeach;
							endif;
						?>
						
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0"><?php echo $dept_schedule_urg_title; ?></p>
						<h3><?php echo $dept_schedule_urg_number; ?></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>