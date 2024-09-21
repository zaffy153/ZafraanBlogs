<?php
/*
 * Disallow direct access
 */
if (!defined('ABSPATH')) {
    die('Forbidden.');
}
function circle_photography_scripts()
{
    // enqueue parent style
    wp_enqueue_style('circle-photography-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'circle_photography_scripts');

/**
 * Registers pattern categories.
 *
 * @since circle-photography 1.0.0
 *
 * @return void
 */
function circle_photography_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'circle-photography-patterns' => array('label' => __('Circle Photography Patterns', 'circle-photography'))
    );

    $block_pattern_categories = apply_filters('circle_photography_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'circle_photography_register_pattern_category', 9);
