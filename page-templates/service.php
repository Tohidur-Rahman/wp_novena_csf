<?php 

/*
Template Name: Services Template
*/

get_header();?>
<?php 

    get_template_part('template-parts/service/section', 'breadcumb');
    get_template_part('template-parts/service/section', 'service');
    get_template_part('template-parts/service/section', 'cta');

?>
<?php get_footer();?>