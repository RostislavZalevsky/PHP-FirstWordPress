<?php

// Add Footer callout section to admin appearance customize screen
function footer_callout($wp_customize) {
	$wp_customize->add_section('lwp-footer-callout-section', array(
		'title' => 'Footer Callout'
	));

	$wp_customize->add_setting('lwp-footer-callout-display', array(
		'default' => 'No'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-display-control', array(
			'label' => 'Display this section?',
			'section' => 'lwp-footer-callout-section',
			'settings' => 'lwp-footer-callout-display',
			'type' => 'select',
			'choices' => array('No' => 'No', 'Yes' => 'Yes')
		)));

	$wp_customize->add_setting('lwp-footer-callout-headline', array(
		'default' => 'Example Headline Text!'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-headline-control', array(
			'label' => 'Headline',
			'section' => 'lwp-footer-callout-section',
			'settings' => 'lwp-footer-callout-headline'
		)));

	$wp_customize->add_setting('lwp-footer-callout-text', array(
		'default' => 'Example paragraph text.'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-text-control', array(
			'label' => 'Text',
			'section' => 'lwp-footer-callout-section',
			'settings' => 'lwp-footer-callout-text',
			'type' => 'textarea'
		)));

	$wp_customize->add_setting('lwp-footer-callout-link');

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-link-control', array(
			'label' => 'Link',
			'section' => 'lwp-footer-callout-section',
			'settings' => 'lwp-footer-callout-link',
			'type' => 'dropdown-pages'
		)));

	$wp_customize->add_setting('lwp-footer-callout-image');

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-footer-callout-image-control', array(
			'label' => 'Image',
			'section' => 'lwp-footer-callout-section',
			'settings' => 'lwp-footer-callout-image',
			'width' => 750,
			'height' => 500
		)));
}

add_action('customize_register', 'footer_callout');