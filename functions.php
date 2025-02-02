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
    <section class="slot-section">
        <div class="page-width">
            <h2>2.Try our top slot free to use!
            </h2>
            <div class="slot-container">
                <div id="slot-machine">
                    <div class="lights">
                        <div class="light"></div>
                        <div class="light"></div>
                        <div class="light"></div>
                        <div class="light"></div>
                    </div>
                    <div class="reels">
                        <div class="single-reel">🍒</div>
                        <div class="single-reel">🍒</div>
                        <div class="single-reel">🍒</div>
                    </div>
                    <button id="spin-button">Spin</button>
                    <div class="lever"></div>
                
                    <p id="result"></p>
                </div>
                <div class="balance-container">
                <div id="balance">Balance: 100 credits</div>
                <div id="add-balance">ADD MORE</div>
            </div>
            </div>
       <p>To make the slot work inside WordPress, I created a shortcode that can be used on any page.
         It is currently saved in the functions.php. <br>However, in the case of multiple themes being used, I would have created a plugin instead.
        I kept it quite simple, and of course, there are infinite things I could have added.
        For example:</p>
        <ul>
            <li>A pop-up when there is a winning spin.</li>
            <li>Prizes are based on the combinations.</li>
            <li>Multiple lines of reels, along with deeper logic for the combinations, animations, etc.</li>
        </ul>

        </div>
    
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('slot_machine', 'slot_machine_shortcode');



