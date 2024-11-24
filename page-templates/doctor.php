<?php

/*
Template Name: Doctors Template
*/

get_header(); 

?>

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">All Doctors</span>
                    <h1 class="text-capitalize mb-5 text-lg">Specalized doctors</h1>

                    <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">All Doctors</a></li>
          </ul> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section doctors">
  <div class="container">
  	  <div class="row justify-content-center">
             <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Doctors</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque </p>
                </div>
            </div>
        </div>

        <div class="col-12 text-center  mb-5">
                <div class="btn-group btn-group-toggle " data-toggle="buttons">
                <label class="btn active ">
                    <input type="radio" name="shuffle-filter" value="all" checked="checked" />All Department
                </label>
                <?php
                        $cats = get_terms('doctors-cat');
                        foreach($cats as $cat) {
                    ?>
                    <label class="btn ">
                        <input type="radio" name="shuffle-filter" value="<?php echo $cat->slug;?>" /><?php echo $cat->name;?>
                    </label>
                    <?php
                        }
                    ?>
                </div>
        </div>

    <div class="row shuffle-wrapper portfolio-gallery">

    <?php
            $args =  array(
                'post_type' => 'doctors',
                'posts_per_page' => 10
            );
            $query = new WP_Query($args);
            while($query->have_posts()) {
                $query->the_post();

            $doc_metabox = get_post_meta( get_the_ID(), 'doctor_metabox', true );
                
        ?>            


        <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[<?php
$doc_cat = get_the_terms(get_the_ID(), 'doctors-cat');
if ($doc_cat) {
    $slugs = array_map(function($cat) {
        return '&quot;' . $cat->slug . '&quot;';
    }, $doc_cat);
    echo implode(', ', $slugs);
}
?>]">
            <div class="position-relative doctor-inner-box">
                <div class="doctor-profile">
                    <div class="doctor-img">
                        <img src="<?php echo $doc_metabox['doctor_img']['url']; ?>" alt="doctor-image" class="img-fluid w-100">
                    </div>
                </div>
                <div class="content mt-3">
                    <h4 class="mb-0"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    <p><?php echo $doc_metabox['doctor_designation']; ?></p>
                </div> 
            </div>
        </div>

        <?php
            }
            wp_reset_postdata();
        ?>

    </div>
  </div>
</section>


<?php get_template_part('template-parts/service/section', 'cta'); ?>
<?php get_footer(); ?>