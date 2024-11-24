<?php

/*
Template Name: Home Template
*/

get_header(); ?>

<?php get_template_part('template-parts/home/section', 'banner'); ?>
<?php get_template_part('template-parts/home/section', 'feature'); ?>
<?php get_template_part('template-parts/home/section', 'about'); ?>
<?php get_template_part('template-parts/home/section', 'counter'); ?>
<?php get_template_part('template-parts/home/section', 'service'); ?>
<?php get_template_part('template-parts/home/section', 'appoinment'); ?>
<?php get_template_part('template-parts/home/section', 'testimonial'); ?>
<?php get_template_part('template-parts/home/section', 'client'); ?>


<?php get_footer(); ?>