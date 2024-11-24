<?php


if (class_exists('CSF')) {

    $prefix = 'novena_options';

    // Create options
    CSF::createOptions($prefix, array(
        'menu_title' => __('Novena Options', 'novena'),
        'menu_slug'  => 'novena-options',
        'framework_title' => __('Novena Options'),
        'footer_text'             => '',
    ));

    // Header Section
    CSF::createSection($prefix, array(
        'id' => 'header_section',
        'title' => __('Header Section', 'novena'),
        'icon'   => 'fas fa-rocket'
    ));
    // Feature Show / Hide

    CSF::createSection($prefix, array(
        'parent' => 'header_section',
        'title' => __('Header Info', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'header_info_active',
                'title' => __('Active Header Info?', 'novena'),
                'type' => 'switcher',
                'label'   => __('Do you want activate header top ?', 'novena'),
                'default' => true
            ),
            array(
                'id' => 'header_email',
                'title' => __('Header Email', 'novena'),
                'type' => 'text',
                'placeholder' => __('Please write email address', 'novena'),
                'dependency' => array('header_info_active', '==', 'true')
            ),
            array(
                'id' => 'header_address',
                'title' => __('Header Address', 'novena'),
                'type' => 'text',
                'dependency' => array('header_info_active', '==', 'true')
            ),
            array(
                'id' => 'header_right_text',
                'title' => __('Header Right Text', 'novena'),
                'type' => 'text',
                'dependency' => array('header_info_active', '==', 'true')
            ),
            array(
                'id' => 'header_right_number',
                'title' => __('Header Right Number', 'novena'),
                'type' => 'number',
                'dependency' => array('header_info_active', '==', 'true')
            )
        )
    ));

    // Banner Section
    CSF::createSection($prefix, array(
        'id' => 'banner_section',
        'title' => __('Banner Section', 'novena'),
        'icon'   => 'fas fa-rocket'
    ));

    CSF::createSection($prefix, array(
        'parent' => 'banner_section',
        'title' => __('Banner Info', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'banner_subtitle',
                'title' => __('Banner Subtitle', 'novena'),
                'type' => 'text',
                'default' => __('Total Health care solution', 'novena'),
            ),
            array(
                'id' => 'banner_title',
                'title' => __('Banner Title', 'novena'),
                'type' => 'text',
                'default' => __('Your most trusted health partner', 'novena'),
            ),
            array(
                'id' => 'banner_desc',
                'title' => __('Banner Description', 'novena'),
                'type' => 'textarea'
            ),
            array(
                'id' => 'banner_btn',
                'title' => __('Banner Button', 'novena'),
                'type' => 'link',
                'add_title' => __('Add Button', 'novena')
            ),
            array(
                'id' => 'banner_back',
                'title' => __('Banner Background', 'novena'),
                'type' => 'background',
                'background_color' => false,
                'output' => '.banner'
            )
        )
    ));

    CSF::createSection($prefix, array(
        'parent' => 'banner_section',
        'title' => __('Banner Style', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'banner_separator',
                'title' => __('Banner Separator', 'novena'),
                'type' => 'background',
                'default' => array(
                    'background-color' => '#e12454'
                ),
                'output' => '.divider',
                'background_image' => false,
                'background_position' => false,
                'background_repeat' => false,
                'background_size' => false,
                'background_attachment' => false,
            ),
            array(
                'id' => 'banner_substitle_color',
                'title' => __('Banner Subtitle', 'novena'),
                'type' => 'color',
                'output' => '.letter-spacing',
                'default' => '#6F8BA4'
            ),
            array(
                'id' => 'banner_title_color',
                'title' => __('Banner Title', 'novena'),
                'type' => 'color',
                'output' => '.banner .block h1',
                'default' => '#223a66'
            ),
            array(
                'id' => 'banner_desc_color',
                'title' => __('Banner Description', 'novena'),
                'type' => 'color',
                'output' => '.banner .block p',
                'default' => '#6F8BA4'
            ),
            array(
                'id' => 'button_background',
                'title' => __('Button Background', 'novena'),
                'type' => 'background',
                'default' => array(
                    'background-color' => '#e12454'
                ),
                'output' => '.btn-main-2',
                'background_image' => false,
                'background_position' => false,
                'background_repeat' => false,
                'background_size' => false,
                'background_attachment' => false,
            ),
            array(
                'id' => 'button_background_hover',
                'title' => __('Button Background Hover', 'novena'),
                'type' => 'background',
                'default' => array(
                    'background-color' => '#223a66'
                ),
                'output' => '.btn-main-2:hover',
                'background_image' => false,
                'background_position' => false,
                'background_repeat' => false,
                'background_size' => false,
                'background_attachment' => false,
            ),
        )
    ));


    // Features Section
    CSF::createSection($prefix, array(
        'id' => 'features_section',
        'title' => __('Features Section', 'novena'),
        'icon'   => 'fas fa-rocket'
    ));

    // Feature Show / Hide
    CSF::createSection($prefix, array(
        'parent' => 'features_section',
        'title' => __('Show Feature?', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'feature_switch',
                'title' => __('Show Feature?', 'novena'),
                'type' => 'switcher',
                'label'   => __('Do you want activate it ?', 'novena'),
                'default' => true
            ),
        )
    ));

    // Feature 1
    CSF::createSection($prefix, array(
        'parent' => 'features_section',
        'title' => __('Feature 1', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'feature1_icon',
                'title' => __('Feature 1 Icon', 'novena'),
                'type' => 'icon'
            ),
            array(
                'id' => 'feature1_subtitle',
                'title' => __('Feature 1 Subtitle', 'novena'),
                'type' => 'text'
            ),
            array(
                'id' => 'feature1_title',
                'title' => __('Feature 1 Title', 'novena'),
                'type' => 'text'
            ),
            array(
                'id' => 'feature1_desc',
                'title' => __('Feature 1 Description', 'novena'),
                'type' => 'textarea'
            ),
            array(
                'id' => 'feature1_btn',
                'title' => __('Feature 1 Button', 'novena'),
                'type' => 'link'
            ),
        )
    ));

    // Feature 2
    CSF::createSection($prefix, array(
        'parent' => 'features_section',
        'title' => __('Feature 2', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'feature2_icon',
                'title' => __('Feature 2 Icon', 'novena'),
                'type' => 'icon'
            ),
            array(
                'id' => 'feature2_subtitle',
                'title' => __('Feature 2 Subtitle', 'novena'),
                'type' => 'text'
            ),
            array(
                'id' => 'feature2_title',
                'title' => __('Feature 2 Title', 'novena'),
                'type' => 'text'
            ),
            array(
                'id'     => 'feature2_hours',
                'type'   => 'repeater',
                'title'  => __('Hours | Day', 'novena'),
                'button_title' => __('Add New', 'novena'),
                'max'  => '3',
                'fields' => array(
                    array(
                        'id'    => 'feature2_hours_day',
                        'type'  => 'text',
                        'title' => __('Feature 2 Day', 'novena'),
                        'placeholder' => __('Sun - Wed :', 'novena'),
                    ),
                    array(
                        'id'    => 'feature2_hours_time',
                        'type'  => 'text',
                        'title' => __('Feature 2 Time', 'novena'),
                        'placeholder' => __('8:00 - 17:00', 'novena'),
                    ),
                ),
            ),
        )
    ));

    // Feature 3
    CSF::createSection($prefix, array(
        'parent' => 'features_section',
        'title' => __('Feature 3', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'feature3_icon',
                'title' => __('Feature 3 Icon', 'novena'),
                'type' => 'icon'
            ),
            array(
                'id' => 'feature3_subtitle',
                'title' => __('Feature 3 Subtitle', 'novena'),
                'type' => 'text'
            ),
            array(
                'id' => 'feature3_title',
                'title' => __('Feature 3 Title', 'novena'),
                'type' => 'text'
            ),
            array(
                'id' => 'feature3_desc',
                'title' => __('Feature 3 Description', 'novena'),
                'type' => 'textarea'
            ),
        )
    ));

    // About Section
    CSF::createSection($prefix, array(
        'id' => 'about_section',
        'title' => __('About Section', 'novena'),
        'icon'   => 'fas fa-rocket'
    ));

    CSF::createSection($prefix, array(
        'parent' => 'about_section',
        'title' => __('About Section', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'about_switch',
                'title' => __('Show About?', 'novena'),
                'type' => 'switcher',
                'default' => true
            ),
            array(
                'id' => 'about_img1',
                'title' => __('About Image 1', 'novena'),
                'type' => 'media'
            ),
            array(
                'id' => 'about_img2',
                'title' => __('About Image 2', 'novena'),
                'type' => 'media'
            ),
            array(
                'id' => 'about_img3',
                'title' => __('About Image 3', 'novena'),
                'type' => 'media'
            ),
            array(
                'id' => 'home_about_title',
                'title' => __('About Title', 'novena'),
                'type' => 'text',
                
            ),
            array(
                'id' => 'about_desc',
                'title' => __('About Description', 'novena'),
                'type' => 'text'
            ),
            array(
                'id' => 'about_btn',
                'title' => __('About Button', 'novena'),
                'type' => 'link'
            ),
        )
    ));

    // Counter Section
    CSF::createSection($prefix, array(
        'id' => 'counter_section',
        'title' => __('Counter Section', 'novena'),
        'icon'   => 'fas fa-rocket'
    ));

    CSF::createSection($prefix, array(
        'parent' => 'counter_section',
        'title' => __('Counter Section', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'counter_img',
                'title' => __('Counter Image', 'novena'),
                'type' => 'background',
                'output' => '.cta',
                'background_color' => false,
            ),
            array(
                'id'    => 'counter_img_overly',
                'type'  => 'background',
                'title' =>  __('Counter Image Overly', 'novena'),
                'background_attachment' => false,
                'background_size' => false,
                'background_repeat' => false,
                'background_image' => false,
                'background_position' => false,
                'default' => array(
                    'background-color' => 'rgba(34, 58, 102, 0.95)'
                ),
                'output' => '.cta:before',
            ),
            array(
                'id'     => 'counters',
                'type'   => 'repeater',
                'title'  => __('Counters', 'novena'),
                'max'    => 4,
                'button_title' => __('Add New Counter', 'novena'),
                'fields' => array(
                    array(
                        'id'    => 'counter_icon',
                        'type'  => 'icon',
                        'title' => __('Counter Icon', 'novena')
                    ),
                    array(
                        'id'    => 'counter_number',
                        'type'  => 'number',
                        'title' => __('Counter Number', 'novena')
                    ),
                    array(
                        'id'    => 'counter_prefix',
                        'type'  => 'text',
                        'title' => __('Counter Prefix', 'novena')
                    ),
                    array(
                        'id'    => 'counter_title',
                        'type'  => 'text',
                        'title' => __('Counter Title', 'novena')
                    ),
                ),
            ),
        )
    ));

    // Services Section
    CSF::createSection($prefix, array(
        'id' => 'services_section',
        'title' => __('Services Section', 'novena'),
        'icon'   => 'fas fa-rocket'
    ));

    CSF::createSection($prefix, array(
        'parent' => 'services_section',
        'title' => __('Services Section', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'service_title',
                'title' => __('Services Title', 'novena'),
                'type' => 'text'
            ),
            array(
                'id' => 'service_subtitle',
                'title' => __('Services Subtitle', 'novena'),
                'type' => 'textarea'
            ),
            array(
                'id'     => 'services',
                'type'   => 'repeater',
                'title'  => __('Services', 'novena'),
                'max'    => 6,
                'button_title' => __('Add New Service', 'novena'),
                'fields' => array(
                    array(
                        'id'    => 'service_icon',
                        'type'  => 'icon',
                        'title' => __('Service Icon', 'novena')
                    ),
                    array(
                        'id'    => 'service_title',
                        'type'  => 'text',
                        'title' => __('Service Title', 'novena')
                    ),
                    array(
                        'id'    => 'service_desc',
                        'type'  => 'textarea',
                        'title' => __('Service Description', 'novena')
                    ),
                ),
            ),
        )
    ));


    // Appoinment Section
    CSF::createSection($prefix, array(
        'id' => 'appoinment_section',
        'title' => __('Appoinment Section', 'novena'),
        'icon'   => 'fas fa-rocket'
    ));

    CSF::createSection($prefix, array(
        'parent' => 'appoinment_section',
        'title' => __('Appoinment Section', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'appoinment_img',
                'title' => __('Appoinment Image', 'novena'),
                'type' => 'media'
            ),
            array(
                'id' => 'appoinment_phone',
                'title' => __('Appoinment Phone', 'novena'),
                'type' => 'text'
            ),
            array(
                'id' => 'appoinment_title',
                'title' => __('Appoinment Title', 'novena'),
                'type' => 'text'
            ),
            array(
                'id' => 'appoinment_subtitle',
                'title' => __('Appoinment Subtitle', 'novena'),
                'type' => 'textarea'
            ),
        )
    ));


    // Testimonials Section
    CSF::createSection($prefix, array(
        'id' => 'testimonials_section',
        'title' => __('Testimonials Section', 'novena'),
        'icon'   => 'fas fa-rocket'
    ));

    CSF::createSection($prefix, array(
        'parent' => 'testimonials_section',
        'title' => __('Testimonials Section', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'testimonial_title',
                'title' => __('Testimonial Title', 'novena'),
                'type' => 'text'
            ),
            array(
                'id' => 'testimonial_subtitle',
                'title' => __('Testimonial Subtitle', 'novena'),
                'type' => 'textarea'
            ),
            array(
                'id'     => 'testimonials',
                'type'   => 'repeater',
                'title'  => __('Testimonials', 'novena'),
                'max'    => 6,
                'button_title' => __('Add New Testimonial', 'novena'),
                'fields' => array(
                    array(
                        'id'    => 'testimonial_img',
                        'type'  => 'media',
                        'title' => __('Testimonial Image', 'novena')
                    ),
                    array(
                        'id'    => 'testimonial_name',
                        'type'  => 'text',
                        'title' => __('Testimonial Title', 'novena')
                    ),
                    array(
                        'id'    => 'testimonial_desg',
                        'type'  => 'text',
                        'title' => __('Testimonial Designation', 'novena')
                    ),
                    array(
                        'id'    => 'testimonial_desc',
                        'type'  => 'textarea',
                        'title' => __('Testimonial Description', 'novena')
                    ),
                ),
            ),
        )
    ));


    // Clients Section
    CSF::createSection($prefix, array(
        'id' => 'clients_section',
        'title' => __('Clients Section', 'novena'),
        'icon'   => 'fas fa-rocket'
    ));

    CSF::createSection($prefix, array(
        'parent' => 'clients_section',
        'title' => __('Clients Section', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'client_title',
                'title' => __('Client Title', 'novena'),
                'type' => 'text'
            ),
            array(
                'id' => 'client_subtitle',
                'title' => __('Client Subtitle', 'novena'),
                'type' => 'textarea'
            ),
            array(
                'id'     => 'clients',
                'type'   => 'repeater',
                'title'  => __('Clients', 'novena'),
                'max'    => 10,
                'button_title' => __('Add New Client', 'novena'),
                'fields' => array(
                    array(
                        'id'    => 'client_logo',
                        'type'  => 'media',
                        'title' => __('Client Logo', 'novena')
                    ),
                ),
            ),
        )
    ));




    // About Page
    CSF::createSection($prefix, array(
        'id' => 'about_page',
        'title' => __('About Page', 'novena'),
        'icon'   => 'fas fa-rocket'
    ));

    // About Content
    CSF::createSection($prefix, array(
        'parent' => 'about_page',
        'title' => __('About Page', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            // Breadcumb
            array(
                'id' => 'breadcumb_items',
                'title' => __('Breadcumb Items', 'novena'),
                'type' => 'fieldset',
                'fields' => array(
                    array(
                        'id' => 'breadcumb_subtitle',
                        'title' => __('Breadcumb Subtitle', 'novena'),
                        'type' => 'text'
                    ),
                    array(
                        'id' => 'breadcumb_title',
                        'title' => __('Breadcumb Title', 'novena'),
                        'type' => 'text'
                    ),
                    array(
                        'id' => 'breadcumb_img',
                        'title' => __('Breadcumb Image', 'novena'),
                        'type' => 'background',
                        'output' => '.page-title.bg-1'
                    ),
                )
            ),

            // About Me
            array(
                'id' => 'about_title',
                'title' => __('About Title', 'novena'),
                'type' => 'fieldset',
                'fields' => array(
                    array(
                        'id' => 'about_heading',
                        'title' => __('About Heading', 'novena'),
                        'type' => 'text'
                    ),
                    array(
                        'id' => 'about_desc',
                        'title' => __('About Description', 'novena'),
                        'type' => 'textarea'
                    ),
                    array(
                        'id' => 'about_signature',
                        'title' => __('About Signature', 'novena'),
                        'type' => 'media',
                    ),
                )
            ),

            // Features
            array(
                'id' => 'about_features_box',
                'title' => __('About Features', 'novena'),
                'type' => 'fieldset',
                'fields' => array(
                    array(
                        'id'     => 'about_features',
                        'type'   => 'repeater',
                        'title'  => __('About Features', 'novena'),
                        'max'    => 4,
                        'button_title' => __('Add New', 'novena'),
                        'fields' => array(
                            array(
                                'id'    => 'about_features_img',
                                'type'  => 'media',
                                'title' => __('About Feature Image', 'novena')
                            ),
                            array(
                                'id'    => 'about_features_title',
                                'type'  => 'text',
                                'title' => __('About Feature Title', 'novena')
                            ),
                            array(
                                'id'    => 'about_features_desc',
                                'type'  => 'textarea',
                                'title' => __('About Feature Description', 'novena')
                            ),
                        ),
                    ),
                )
            ),

            // Achievements
            array(
                'id' => 'about_achievements_box',
                'title' => __('About Achievements', 'novena'),
                'type' => 'fieldset',
                'fields' => array(
                    array(
                        'id'    => 'about_achievements_title',
                        'type'  => 'text',
                        'title' => __('About Achievements Title', 'novena')
                    ),
                    array(
                        'id'     => 'about_achievements',
                        'type'   => 'repeater',
                        'title'  => __('About Achievements Image', 'novena'),
                        'max'    => 6,
                        'button_title' => __('Add New', 'novena'),
                        'fields' => array(
                            array(
                                'id'    => 'about_achievements_img',
                                'type'  => 'media',
                                'title' => __('About Achievements Image', 'novena')
                            ),
                        ),
                    ),
                )
            ),

            // Team Member
            array(
                'id' => 'about_team_box',
                'title' => __('About Team', 'novena'),
                'type' => 'fieldset',
                'fields' => array(
                    array(
                        'id'    => 'about_team_title',
                        'type'  => 'text',
                        'title' => __('About Team Title', 'novena')
                    ),
                    array(
                        'id'    => 'about_team_des',
                        'type'  => 'textarea',
                        'title' => __('About Team Description', 'novena')
                    ),
                    array(
                        'id'     => 'about_team_member',
                        'type'   => 'repeater',
                        'title'  => __('About Team Members', 'novena'),
                        'max'    => 4,
                        'button_title' => __('Add Member', 'novena'),
                        'fields' => array(
                            array(
                                'id'    => 'about_team_img',
                                'type'  => 'media',
                                'title' => __('About Team Image', 'novena')
                            ),
                            array(
                                'id'    => 'about_team_name',
                                'type'  => 'text',
                                'title' => __('About Team Name', 'novena')
                            ),
                            array(
                                'id'    => 'about_team_degn',
                                'type'  => 'text',
                                'title' => __('About Team Designation', 'novena')
                            ),
                        ),
                    ),
                )
            ),

            // About Testimonials
            array(
                'id' => 'about_testimonial_box',
                'title' => __('About Testimonial', 'novena'),
                'type' => 'fieldset',
                'fields' => array(
                    array(
                        'id'    => 'about_testimonial_img',
                        'type'  => 'background',
                        'title' => __('About Testimonial Image', 'novena'),
                        'background_color' => false,
                        'background_position' => false,
                        'background_repeat' => false,
                        'background_size' => false,
                        'background_attachment' => false,
                        'output' => '.testimonial:before',
                    ),
                    array(
                        'id'    => 'about_testimonial_title',
                        'type'  => 'text',
                        'title' => __('About Testimonial Title', 'novena')
                    ),
                    array(
                        'id'     => 'about_testimonial_item',
                        'type'   => 'repeater',
                        'title'  => __('About Testimonial Items', 'novena'),
                        'max'    => 6,
                        'button_title' => __('Add Item', 'novena'),
                        'fields' => array(
                            array(
                                'id'    => 'about_item_name',
                                'type'  => 'text',
                                'title' => __('Client Name ', 'novena')
                            ),
                            array(
                                'id'    => 'about_item_designation',
                                'type'  => 'text',
                                'title' => __('Client Designation', 'novena')
                            ),
                            array(
                                'id'    => 'about_item_des',
                                'type'  => 'textarea',
                                'title' => __('Client Comments', 'novena')
                            ),
                        ),
                    ),
                )
            ),
        ),
    ));

    // Services Page
    CSF::createSection($prefix, array(
        'id' => 'service_page',
        'title' => __('Service Page', 'novena'),
        'icon'   => 'fas fa-rocket'
    ));

    // Service Content
    CSF::createSection($prefix, array(
        'parent' => 'service_page',
        'title' => __('Service Page', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            // services
            array(
                'id' => 'service_items_box',
                'title' => __('Services', 'novena'),
                'type' => 'fieldset',
                'fields' => array(
                    array(
                        'id'     => 'service_items',
                        'type'   => 'repeater',
                        'title'  => __('Service Items', 'novena'),
                        'max'    => 6,
                        'button_title' => __('Add New', 'novena'),
                        'fields' => array(
                            array(
                                'id'    => 'service_items_img',
                                'type'  => 'media',
                                'title' => __('Service Item Image', 'novena')
                            ),
                            array(
                                'id'    => 'service_item_title',
                                'type'  => 'text',
                                'title' => __('Service Item Title', 'novena')
                            ),
                            array(
                                'id'    => 'service_item_desc',
                                'type'  => 'textarea',
                                'title' => __('Service Item Description', 'novena')
                            ),
                        ),
                    ),
                )
            ),
            // Services CTA
            array(
                'id' => 'service_cta_box',
                'title' => __('Services CTA', 'novena'),
                'type' => 'fieldset',
                'fields' => array(
                    array(
                        'id'    => 'service_cta_title1',
                        'type'  => 'text',
                        'title' => __('Service CTA Title1', 'novena')
                    ),
                    array(
                        'id'    => 'service_cta_title2',
                        'type'  => 'text',
                        'title' => __('Service CTA Title2', 'novena')
                    ),
                    array(
                        'id'    => 'service_cta_btn',
                        'type'  => 'link',
                        'title' => __('CTA Button', 'novena')
                    ),
                    array(
                        'id'    => 'service_cta_img',
                        'type'  => 'background',
                        'title' => __('Service CTA Image', 'novena'),
                        'background_color' => false,
                        'background_position' => false,
                        'background_repeat' => false,
                        'background_size' => false,
                        'background_attachment' => false,
                        'output' => '.cta-page',
                    ),
                )
            ),
        )
    ));    










}
