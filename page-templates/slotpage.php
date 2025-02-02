<?php
/**
 * Template Name: Slot Template
 *
 * Template used to show the slot and posts 
 */

get_header(); // Include the header
?>

<div class="page-content">
<?php
    get_template_part("template-parts/latest-posts");
        ?>

    <?php
        the_content();
    ?>
<?php
    get_template_part("template-parts/answers");
        ?>

</div>

<?php
get_footer(); // Include the footer
?>
