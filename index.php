<?php get_header(); ?>

<main>
    <h1>Welcome to My Custom Theme</h1>
    <p>This is my first PHP-based WordPress theme!</p>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
    <?php endwhile; else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
