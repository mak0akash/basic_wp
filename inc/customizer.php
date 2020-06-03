<?php 

function ittrace_customize_register($wp_customize)
{	
	$wp_customize->add_panel( 'panel_one', array(
	 'priority'       => 10,
	  'capability'     => 'edit_theme_options',
	  'theme_supports' => '',
	  'title'          => __('Theme Options', 'mytheme'),
	  'description'    => __('Several settings pertaining my theme', 'mytheme'),
	) );
	$wp_customize->add_section('frontPage', array(
		'title'		=>		__('Front Page First Section', 'ittrace'),
		'description'	=>	sprintf(__('Options for Front Page', 'ittrace')),
		'priority'		=> 	130,
		'panel'	=> 'panel_one'
	));
	$wp_customize->add_section('header', array(
		'title'		=>		__('Header Section Content', 'ittrace'),
		'description'	=>	sprintf(__('Options for Front Page Header', 'ittrace')),
		'priority'		=> 	120,
		'panel'	=> 'panel_one'
	));

	$wp_customize->add_setting('header_img', array(
		'default'		=>	get_bloginfo('template_directory').'/resources/css/img/header.jpg',
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_img', array(
		'label'			=>	__('Header Image', 'ittrace'),
		'section'		=>	'header',
		'priority'		=> 	1
	)));

	$wp_customize->add_setting('first_section_heading', array(
		'default'		=>	_x('Services', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('first_section_heading', array(
		'label'			=>	__('First Section Title', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	1
	) );
/*Service One*/
	$wp_customize->add_setting('service_one_img', array(
		'default'		=>	get_bloginfo('template_directory').'/resources/img/web.jpg',
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_one_img', array(
		'label'			=>	__('Service One Image', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	2
	)));
	$wp_customize->add_setting('service_one_title', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('service_one_title', array(
		'label'			=>	__('Service One Title', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	3
	));
	$wp_customize->add_setting('service_one_des', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('service_one_des', array(
		'label'			=>	__('Service One Description', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	4
	));
	$wp_customize->add_setting('service_one_btn_txt', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('service_one_btn_txt', array(
		'label'			=>	__('Service One Button Text', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	5
	));

	$wp_customize->add_setting('service_one_link', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('service_one_link', array(
		'label'			=>	__('Service One hyperlink', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	6
	));
/*Service Two*/
	$wp_customize->add_setting('service_two_img', array(
		'default'		=>	get_bloginfo('template_directory').'/resources/img/network.jpg',
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_two_img', array(
		'label'			=>	__('Service Two Image', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	9
	)));
	$wp_customize->add_setting('service_two_title', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('service_two_title', array(
		'label'			=>	__('Service Two Title', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	10
	));
	$wp_customize->add_setting('service_two_des', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('service_two_des', array(
		'label'			=>	__('Service Two Description', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	11
	));
	$wp_customize->add_setting('service_two_btn_txt', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('service_two_btn_txt', array(
		'label'			=>	__('Service One Button Text', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	12
	));

	$wp_customize->add_setting('service_two_link', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('service_two_link', array(
		'label'			=>	__('Service Two hyperlink', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	13
	));
/*Service Three*/
	$wp_customize->add_setting('service_three_img', array(
		'default'		=>	get_bloginfo('template_directory').'/resources/img/creative.jpg',
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_three_img', array(
		'label'			=>	__('Service Three Image', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	14
	)));
	$wp_customize->add_setting('service_three_title', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('service_three_title', array(
		'label'			=>	__('Service Three Title', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	15
	));
	$wp_customize->add_setting('service_three_des', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('service_three_des', array(
		'label'			=>	__('Service Three Description', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	16
	));
	$wp_customize->add_setting('service_three_btn_txt', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('service_three_btn_txt', array(
		'label'			=>	__('Service One Button Text', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	17
	));

	$wp_customize->add_setting('service_three_link', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('service_three_link', array(
		'label'			=>	__('Service Three hyperlink', 'ittrace'),
		'section'		=>	'frontPage',
		'priority'		=> 	18
	));
	//  Second Section Two
	
	$wp_customize->add_section('section_two', array(
		'title'		=>		__('Front Page Second Section', 'ittrace'),
		'description'	=>	sprintf(__('Options for Front Page', 'ittrace')),
		'priority'		=> 	131,
		'panel'	=> 'panel_one'
	));
	$wp_customize->add_setting('second_section_heading', array(
		'default'		=>	_x('Work With Dignity', 'ittrace'),
		'type'			=>	'theme_mod',
		'panel'			=> 	'panel_one'
	));

	$wp_customize->add_control('second_section_heading', array(
		'label'			=>	__('Second Section Title', 'ittrace'),
		'section'		=>	'section_two',
		'priority'		=> 	1
	) );
	$wp_customize->add_setting('section_two_img_one', array(
		'default'		=>	get_bloginfo('template_directory').'/resources/img/web.jpg',
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_two_img_one', array(
		'label'			=>	__('First Image', 'ittrace'),
		'section'		=>	'section_two',
		'priority'		=> 	2
	)));
	$wp_customize->add_setting('section_two_des_one', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('section_two_des_one', array(
		'label'			=>	__('First Description', 'ittrace'),
		'section'		=>	'section_two',
		'priority'		=> 	3
	));
	/* section two info two */
	$wp_customize->add_setting('section_two_img_two', array(
		'default'		=>	get_bloginfo('template_directory').'/resources/img/web.jpg',
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_two_img_two', array(
		'label'			=>	__('Second Image', 'ittrace'),
		'section'		=>	'section_two',
		'priority'		=> 	4
	)));
	$wp_customize->add_setting('section_two_des_two', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('section_two_des_two', array(
		'label'			=>	__('Second Description', 'ittrace'),
		'section'		=>	'section_two',
		'priority'		=> 	5
	));
	/*Section Two img Three*/
	$wp_customize->add_setting('section_two_img_three', array(
		'default'		=>	get_bloginfo('template_directory').'/resources/img/web.jpg',
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_two_img_three', array(
		'label'			=>	__('Third Image', 'ittrace'),
		'section'		=>	'section_two',
		'priority'		=> 	6
	)));
	$wp_customize->add_setting('section_two_des_three', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('section_two_des_three', array(
		'label'			=>	__('Third Description', 'ittrace'),
		'section'		=>	'section_two',
		'priority'		=> 	7
	));
	/*Section Two info Four*/
	$wp_customize->add_setting('section_two_img_four', array(
		'default'		=>	get_bloginfo('template_directory').'/resources/img/web.jpg',
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_two_img_four', array(
		'label'			=>	__('Fourth Image', 'ittrace'),
		'section'		=>	'section_two',
		'priority'		=> 	8
	)));
	$wp_customize->add_setting('section_two_des_four', array(
		'default'		=>	_x('Web', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('section_two_des_four', array(
		'label'			=>	__('First Description', 'ittrace'),
		'section'		=>	'section_two',
		'priority'		=> 	9
	));
	$wp_customize->add_section('section_three', array(
		'title'		=>		__('Front Page Third Section', 'ittrace'),
		'description'	=>	sprintf(__('Options for Front Page', 'ittrace')),
		'priority'		=> 	131,
		'panel'	=> 'panel_one'
	));
	$wp_customize->add_setting('third_section_heading', array(
		'default'		=>	_x('About', 'ittrace'),
		'type'			=>	'theme_mod',
		'panel'			=> 	'panel_one'
	));

	$wp_customize->add_control('third_section_heading', array(
		'label'			=>	__('Second Section Title', 'ittrace'),
		'section'		=>	'section_three',
		'priority'		=> 	1
	) );
	$wp_customize->add_setting('section_three_img', array(
		'default'		=>	get_bloginfo('template_directory').'/resources/img/web.jpg',
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_three_img', array(
		'label'			=>	__('Section Three Image', 'ittrace'),
		'section'		=>	'section_three',
		'priority'		=> 	2
	)));
	$wp_customize->add_setting('section_three_des', array(
		'default'		=>	_x('Have the vast experience in Information Technology we are supporting our client as our companion.', 'ittrace'),
		'type'			=>	'theme_mod'
	));

	$wp_customize->add_control('section_three_des', array(
		'label'			=>	__('Section Three Description', 'ittrace'),
		'section'		=>	'section_three',
		'priority'		=> 	3
	));

}

add_action('customize_register', 'ittrace_customize_register');