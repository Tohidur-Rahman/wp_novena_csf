<?php 

// Register Custom Post Type
function department_cpt() {

	$labels = array(
		'name'                  => _x( 'Add Department', 'novena' ),
		'singular_name'         => _x( 'Add Department', 'novena' ),
		'menu_name'             => __( 'Departments', 'novena' ),
		'name_admin_bar'        => __( 'Departments', 'novena' ),
		'all_items'             => __( 'All Departments', 'novena' ),
		'add_new_item'          => __( 'Add Department', 'novena' ),
		'featured_image'          => __( 'Department image', 'novena' ),
		'set_featured_image'          => __( 'Set department image', 'novena' ),
		'remove_featured_image'          => __( 'Remove department image', 'novena' ),
	);
	$args = array(
		'label'                 => __( 'Department Add', 'novena' ),
		'description'           => __( 'Description', 'novena' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'         => true,
	);
	register_post_type( 'departments', $args );

}
add_action( 'init', 'department_cpt');

function doctor_cpt() {

	$labels = array(
		'name'                  => _x( 'Add Doctor', 'novena' ),
		'singular_name'         => _x( 'Add Doctor', 'novena' ),
		'menu_name'             => __( 'Doctors', 'novena' ),
		'name_admin_bar'        => __( 'Doctors', 'novena' ),
		'all_items'             => __( 'All Doctors', 'novena' ),
		'add_new_item'          => __( 'Add New Doctor', 'novena' ),
	);
	$args = array(
		'label'                 => __( 'Doctor Add', 'novena' ),
		'description'           => __( 'Description', 'novena' ),
		'labels'                => $labels,
		'supports'              => array('title'),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
	);
	register_post_type( 'doctors', $args );

	register_taxonomy('doctors-cat', 'doctors', array(
        'lables' => array(
            'name' => __('Categories', 'novena'),
            'singular_name' => __('Category', 'novena')
        ),
        'hierarchical' => true,
        'show_admin_column' => true
    ));

}
add_action( 'init', 'doctor_cpt');