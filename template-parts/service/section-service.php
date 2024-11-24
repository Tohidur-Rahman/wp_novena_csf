<?php 
  $options = get_option( 'novena_options' );
  $service_items_box = $options['service_items_box'];
  $service_items = $service_items_box['service_items'];
?>

<section class="section service-2">
	<div class="container">
		<div class="row">
            <?php 
            if ($service_items) {
                foreach ($service_items as $key => $service_item) {
                    $service_item_img = $service_item['service_items_img']['url'];
                    $service_item_title = $service_item['service_item_title'];
                    $service_item_desc = $service_item['service_item_desc'];
            ?>        
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="<?php echo $service_item_img; ?>" alt="" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color"><?php echo $service_item_title; ?></h4>
                            <p class="mb-4"><?php echo $service_item_desc; ?></p>
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