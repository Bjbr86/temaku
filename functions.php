<?php

function temaku_style() {
    wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css') );
    wp_enqueue_style('animate', get_theme_file_uri('/assets/vendor/animate.css/animate.min.css') );
    wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.min.css') );
    wp_enqueue_style('booticon', get_theme_file_uri('/assets/vendor/bootstrap-icons/bootstrap-icons.css') );
    wp_enqueue_style('boxicons', get_theme_file_uri('/assets/vendor/boxicons/css/boxicons.min.css') );
    wp_enqueue_style('glightbox', get_theme_file_uri('/assets/vendor/glightbox/css/glightbox.min.css') );
    wp_enqueue_style('swiper', get_theme_file_uri('/assets/vendor/swiper/swiper-bundle.min.css') );

    //script
    wp_enqueue_script('bjs', get_theme_file_uri('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'), [], '1.0', true);
    wp_enqueue_script('gjs', get_theme_file_uri('/assets/vendor/glightbox/js/glightbox.min.js'), [], '1.0', true);
    wp_enqueue_script('ijs', get_theme_file_uri('/assets/vendor/isotope-layout/isotope.pkgd.min.js'), [], '1.0', true);
    wp_enqueue_script('sjs', get_theme_file_uri('/assets/vendor/swiper/swiper-bundle.min.js'), [], '1.0', true);
    wp_enqueue_script('vjs', get_theme_file_uri('/assets/vendor/php-email-form/validate.js'), [], '1.0', true);
    wp_enqueue_script('jq', get_theme_file_uri('/js/main.js'), [], '1.0', true);
   
}


add_action( 'wp_enqueue_scripts', 'temaku_style');


function temaku_customize($wp_customize) {
    $wp_customize->add_section('temaku_setting', array(
        'title' => 'Temaku Setting'
    ));
    $wp_customize->add_setting('email_temaku', array(
        'default' => 'Beejaybakauresort@gmail.com'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'email_control', array(
        'label' => 'Email',
        'section' => 'temaku_setting',
        'settings' => 'email_temaku',
        'type' => 'text'
    )) );

    $wp_customize->add_setting('telp_temaku', array(
        'default' => '(0335) 5892001'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'Telp_control', array(
        'label' => 'Telp',
        'section' => 'temaku_setting',
        'settings' => 'telp_temaku',
        'type' => 'text'
    )) );
}

add_action('customize_register', 'temaku_customize');

function temaku_post_type(){
    register_post_type('slider', array(
        'public' => true,
        'supports' => array('title'),
        'labels' => array (
            'name' => 'Slider',
            'add_new_item' => 'Add new slider',
            'edit_item' => 'Edit Slider',
            'all_items' => 'All Sliders'
        ),
        'menu_icon' => 'dashicons-slides'
    ));
}

add_action('init', 'temaku_post_type');

function temaku_support()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'temaku_support');
