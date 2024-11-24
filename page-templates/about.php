<?php 

/*
Template Name: About Template
*/

get_header();?>

<?php 

    get_template_part('template-parts/about/section', 'breadcumb'); 
    get_template_part('template-parts/about/section', 'aboutme'); 
    get_template_part('template-parts/about/section', 'feature'); 
    get_template_part('template-parts/about/section', 'achievment'); 
    get_template_part('template-parts/about/section', 'team'); 
    get_template_part('template-parts/about/section', 'testimonial'); 

?>


<?php get_footer();?>