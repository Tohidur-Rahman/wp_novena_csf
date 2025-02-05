<?php 

	$options = get_option( 'novena_options' );
	$appoinment_img = $options['appoinment_img'];
	$appoinment_phone = $options['appoinment_phone'];
	$appoinment_title = $options['appoinment_title'];
	$appoinment_subtitle = $options['appoinment_subtitle'];
?>

<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="<?php echo $appoinment_img['url'];?>" alt="<?php echo $appoinment_img['alt'];?>" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i><?php echo $appoinment_phone;?></h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color"><?php echo $appoinment_title;?></h2>
					<p class="mb-4"><?php echo $appoinment_subtitle;?></p>
					<form id="#" class="appoinment-form" method="post" action="#">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<select class="form-control" id="exampleFormControlSelect1">
										<option>Choose Department</option>
										<option>Software Design</option>
										<option>Development cycle</option>
										<option>Software Development</option>
										<option>Maintenance</option>
										<option>Process Query</option>
										<option>Cost and Duration</option>
										<option>Modal Delivery</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<select class="form-control" id="exampleFormControlSelect2">
										<option>Select Doctors</option>
										<option>Software Design</option>
										<option>Development cycle</option>
										<option>Software Development</option>
										<option>Maintenance</option>
										<option>Process Query</option>
										<option>Cost and Duration</option>
										<option>Modal Delivery</option>
									</select>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<input name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<input name="time" id="time" type="text" class="form-control" placeholder="Time">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number">
								</div>
							</div>
						</div>
						<div class="form-group-2 mb-4">
							<textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
						</div>

						<a class="btn btn-main btn-round-full" href="appoinment.html">Make Appoinment <i class="icofont-simple-right ml-2  "></i></a>
					</form>   
            	</div>
			</div>
		</div>
	</div>
</section>