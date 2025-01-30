<section>
    <h1>test</h1>
    <div>

            <?php
        // Custom query to get the latest posts
        $args = array(
            'post_type'      => 'post',      
            'posts_per_page' => -1,           
            'orderby'        => 'date',      
            'order'          => 'DESC',   
        );

        $latest_posts = new WP_Query( $args );


        if ( $latest_posts->have_posts() ) :
            echo '<ul>'; 

            // Loop through posts
            while ( $latest_posts->have_posts() ) : $latest_posts->the_post();
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
                <?php
            endwhile;

            echo '</ul>'; 
            wp_reset_postdata();
        else :
            echo '<p>No posts found.</p>'; 
        endif;
        ?>

    </div>
</section>