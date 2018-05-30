<?php

function edit_about_us($wp_customize) {
	$wp_customize->add_section('about-us-section', array(
		'title' => 'About us'
	));

	$wp_customize->add_setting('about-us-text-setting', array(
		'default' => 'This enables the system to sense what room you are in and activate certain components when it hears a voice command. This enables the system to sense what room you are in and activate certain components when it hears a voice command.'
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about-us-text-control', array(
		'label' => 'About us',
		'section' => 'about-us-section',
		'settings' => 'about-us-text-setting',
		'type' => 'textarea'
	)));
}
add_action('customize_register', 'edit_about_us');

function edit_map($wp_customize) {
	$wp_customize->add_section('map-section', array(
		'title' => 'Map'
	));

	$wp_customize->add_setting('map-url-setting', array(
		'default' => '//maps.googleapis.com/maps/api/js?key=AIzaSyAY35BdyAdymCvQpNKxCX6YrfsLXckh0UA&callback=initMap'
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'map-url-control', array(
		'label' => 'URL',
		'section' => 'map-section',
		'settings' => 'map-url-setting',
		'type' => 'url'
	)));
}
add_action('customize_register', 'edit_map');

function edit_contact_us($wp_customize) {
	$wp_customize->add_section('contact-us-section', array(
		'title' => 'Contact us'
	));

	$wp_customize->add_setting('contact-us-email-setting', array(
		'default' => 'easy4you@gmail.com'
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'contact-us-email-control', array(
		'label' => 'Email',
		'section' => 'contact-us-section',
		'settings' => 'contact-us-email-setting',
		'type' => 'email'
	)));

	$wp_customize->add_setting('contact-us-phone-setting', array(
		'default' => '+333 777 999 379'
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'contact-us-phone-control', array(
		'label' => 'Phone',
		'section' => 'contact-us-section',
		'settings' => 'contact-us-phone-setting',
		'type' => 'tel'//number
	)));
}
add_action('customize_register', 'edit_contact_us');