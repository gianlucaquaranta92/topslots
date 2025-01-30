<?php
/**
 * TOP Slot functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TOP Slot
 * @since TOP Slot 1.0
 */


 // Theme setup function
function topslot_setup() {
    // Add support for the document title tag
    add_theme_support('title-tag');

    // Add support for post thumbnails (featured images)
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'topslot'),
    ));
}
add_action('after_setup_theme', 'topslot_setup');

// Enqueue styles and scripts
function topslot_scripts() {
    wp_enqueue_style('topslot-style', get_stylesheet_uri());
	
	wp_enqueue_script(
		'slot-function',
		get_template_directory_uri() . '/assets/js/slot-function.js', 
		array('jquery'), 
		null, 
		true 
		);
}
add_action('wp_enqueue_scripts', 'topslot_scripts');


function slot_machine_shortcode() {
    ob_start(); 
    ?>
    <div id="slot-machine">
        <div class="reels">
            <div class="single-reel">🍒</div>
            <div class="single-reel">🍒</div>
            <div class="single-reel">🍒</div>
            <button id="spin-button">Spin</button>
        </div>
     
        <p id="result"></p>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('slot_machine', 'slot_machine_shortcode');



