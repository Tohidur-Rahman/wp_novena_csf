<?php 
	$options = get_option( 'novena_options' );
	$counter_img = $options['counter_img']['background-image']['url'];
?>
<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<?php
				$counters = $options['counters'];
				if($counters):
				foreach($counters as $counter) {
					$counter_icon = $counter['counter_icon'];
					$counter_number = $counter['counter_number'];
					$counter_title = $counter['counter_title'];
					?>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-stat">
							<i class="<?php echo $counter_icon;?>"></i>
							<span class="h3 counter" data-count="<?php echo $counter_number;?>">0</span><?php echo $counter['counter_prefix'];?>
							<p><?php echo $counter_title;?></p>
						</div>
					</div>
					<?php
				}
			endif;
				?>
			</div>
		</div>
	</div>
</section>

