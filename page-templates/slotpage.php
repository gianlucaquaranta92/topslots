<?php
/**
 * Template Name: Slot Template
 *
 * Template used to show the slot and posts 
 */

get_header(); // Include the header
?>

<div class="page-content">
    <h1><?php the_title(); ?></h1>
    <div class="page-body">
       <h2>try our top slot free to use!</h2>
    </div>
        <?php
            get_template_part("template-parts/slot");
        ?>
        <div>
        <?php
            get_template_part("template-parts/latest-posts");
        ?>
    </div>

</div>

<?php
get_footer(); // Include the footer
?>
