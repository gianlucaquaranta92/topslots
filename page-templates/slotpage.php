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
    <div>
       <h2>2.Try our top slot free to use!</h2>
    </div>
    <?php
        the_content();
    ?>

</div>

<?php
get_footer(); // Include the footer
?>
