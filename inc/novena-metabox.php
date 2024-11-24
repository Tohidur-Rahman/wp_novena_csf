<?php

if (class_exists('CSF')) {


    // Set a unique slug-like ID
    $prefix = 'department_metabox';

    // Create a metabox
    CSF::createMetabox($prefix, array(
        'title'     => __('Department Details', 'novena'),
        'post_type' => 'departments',
        'theme'     => 'light',
    ));

    // Create a section
    CSF::createSection($prefix, array(
        'title'  => __('Department Big Image', 'novena'),
        'fields' => array(
            array(
                'id'    => 'department_img',
                'type'  => 'media',
                'title' =>  __('Big Image', 'novena'),
            ),
        )
    ));

    CSF::createSection($prefix, array(
        'title'  => __('Department Service', 'novena'),
        'fields' => array(
            array(
                'id'    => 'dpt_service_title',
                'type'  => 'text',
                'title' =>  __('Service Title', 'novena'),
            ),
            array(
                'id'    => 'dpt_service_list',
                'type'  => 'repeater',
                'title' =>  __('Service List', 'novena'),
                'max'   => '6',
                'fields' => array(
                    array(
                        'id'    => 'dpt_service_list_title',
                        'type'  => 'text',
                        'title' => __('List Title', 'novena'),
                    ),
                )
            ),
            array(
                'id'    => 'dpt_service_btn',
                'type'  => 'link',
                'title' =>  __('Service Button', 'novena'),
            ),
        )
    ));

    CSF::createSection($prefix, array(
        'title'  => __('Department Schedule', 'novena'),
        'fields' => array(
            array(
                'id'    => 'dept_schedule_title',
                'type'  => 'text',
                'title' =>  __('Schedule Title', 'novena'),
            ),
            array(
                'id'    => 'dept_schedule_list',
                'type'  => 'repeater',
                'title' =>  __('Schedule & Time', 'novena'),
                'max'   => '3',
                'fields' => array(
                    array(
                        'id'    => 'dept_schedule_day',
                        'type'  => 'text',
                        'title' => __('Day', 'novena'),
                    ),
                    array(
                        'id'    => 'dept_schedule_time',
                        'type'  => 'text',
                        'title' => __('Time', 'novena'),
                    ),
                )
            ),
            array(
                'id'    => 'dept_urg_title',
                'type'  => 'text',
                'title' =>  __('Urgent Help Title', 'novena'),
            ),
            array(
                'id'    => 'dept_urg_number',
                'type'  => 'text',
                'title' =>  __('Urgent Number', 'novena'),
            ),

        )
    ));
    

}

if (class_exists('CSF')) {


    // Set a unique slug-like ID
    $prefix = 'doctor_metabox';

    // Create a metabox
    CSF::createMetabox($prefix, array(
        'title'     => __('Doctor Details', 'novena'),
        'post_type' => 'doctors',
        'theme'     => 'light',
    ));

    // Create a section
    CSF::createSection($prefix, array(
        'title'  => __('Doctor Profile', 'novena'),
        'fields' => array(
            array(
                'id'    => 'doctor_img',
                'type'  => 'media',
                'title' =>  __('Doctor Image', 'novena'),
                'preview_size' => 'full',
                'library' => 'image',
            ),
            array(
                'id'    => 'doctor_designation',
                'type'  => 'text',
                'title' =>  __('Doctor Designation', 'novena'),
            ),
            array(
                'id'    => 'doctor_socials',
                'type'  => 'repeater',
                'title' =>  __('Doctor Socials', 'novena'),
                'max'   => '5',
                'fields' => array(
                    array(
                        'id'    => 'doctor_social_icon',
                        'type'  => 'icon',
                        'title' => __('Social icon', 'novena'),
                    ), 
                    array(
                        'id'    => 'doctor_social_link',
                        'type'  => 'link',
                        'title' => __('Social link', 'novena'),
                    ),
                )
            ),
            array(
                'id'    => 'doctor_intro_title',
                'type'  => 'text',
                'title' =>  __('Intro Title ', 'novena'),
            ),
            array(
                'id'    => 'doctor_intro_des',
                'type'  => 'wp_editor',
                'title' =>  __('Intro Description ', 'novena'),
            ),
            array(
                'id'    => 'doctor_appmnt_btn',
                'type'  => 'link',
                'title' =>  __('Appointment Link', 'novena'),
            ),
        )
    ));


    CSF::createSection($prefix, array(
        'title'  => __('Education', 'novena'),
        'fields' => array(
            array(
                'id'    => 'doctor_edu_title',
                'type'  => 'text',
                'title' =>  __('Education Title', 'novena'),
            ),
            array(
                'id'    => 'doctor_edu_items',
                'type'  => 'repeater',
                'title' =>  __('Education Blocks', 'novena'),
                'max'   => '4',
                'fields' => array(
                    array(
                        'id'    => 'doctor_edu_year',
                        'type'  => 'text',
                        'title' => __('Passing Year', 'novena'),
                    ), 
                    array(
                        'id'    => 'doctor_edu_degree',
                        'type'  => 'text',
                        'title' => __('Graduate & Versity', 'novena'),
                    ),
                    array(
                        'id'    => 'doctor_edu_des',
                        'type'  => 'textarea',
                        'title' => __('Education Description', 'novena'),
                    ),
                )
            ),

        )
    ));

    CSF::createSection($prefix, array(
        'title'  => __('Skills', 'novena'),
        'fields' => array(
            array(
                'id'    => 'doctor_skill_title',
                'type'  => 'text',
                'title' =>  __('Skill Title', 'novena'),
            ),
            array(
                'id'    => 'doctor_skill_des',
                'type'  => 'textarea',
                'title' =>  __('Skill Description', 'novena'),
            ),

        )
    ));

    CSF::createSection($prefix, array(
        'title'  => __('Expertise Area', 'novena'),
        'fields' => array(
            array(
                'id'    => 'doctor_exp_title',
                'type'  => 'text',
                'title' =>  __('Expertise Title', 'novena'),
            ),
            array(
                'id'    => 'doctor_exp_items',
                'type'  => 'repeater',
                'title' =>  __('Expertise Items', 'novena'),
                'max'   => '6',
                'fields' => array(
                    array(
                        'id'    => 'doctor_exp_item',
                        'type'  => 'text',
                        'title' => __('Item', 'novena'),
                    ),
                )
            ),

        )
    ));

    CSF::createSection($prefix, array(
        'title'  => __('Time Schedule', 'novena'),
        'fields' => array(
            array(
                'id'    => 'doctor_apnt_title',
                'type'  => 'text',
                'title' =>  __('Schedule Title', 'novena'),
            ),
            array(
                'id'    => 'doctor_apnt_time',
                'type'  => 'repeater',
                'title' =>  __('Schedule Time', 'novena'),
                'max'   => '3',
                'fields' => array(
                    array(
                        'id'    => 'appnt_day',
                        'type'  => 'text',
                        'title' => __('Day', 'novena'),
                    ),
                    array(
                        'id'    => 'appnt_time',
                        'type'  => 'text',
                        'title' => __('Time', 'novena'),
                    ),
                )
            ),
            array(
                'id'    => 'apnt_urg_title',
                'type'  => 'text',
                'title' =>  __('Urgent Help Title', 'novena'),
            ),
            array(
                'id'    => 'apnt_urg_number',
                'type'  => 'text',
                'title' =>  __('Urgent Number', 'novena'),
            ),

        )
    ));
    

}

