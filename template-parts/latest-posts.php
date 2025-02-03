


<section class="latest-posts">
    <div class="page-width">
        <h2>1. Our recent reviews of the best online casinos</h2>
        <div>

                <?php
            // Custom query to get the latest posts
            $args = array(
                'post_type'      => 'post',      
                'posts_per_page' => 5,           
                'orderby'        => 'date',      
                'order'          => 'DESC',   
            );

            $latest_posts = new WP_Query( $args );


            if ( $latest_posts->have_posts() ) :
                echo '<div class="posts-container">'; 

                // Loop through the posts
                while ( $latest_posts->have_posts() ) : $latest_posts->the_post();
                    ?>
                    
                        <a class="single-post" href="#"><?php the_title(); ?></a>
                    
                    <?php
                endwhile;

                echo '</div>'; 
                wp_reset_postdata();
            else :
                echo '<p>No posts found.</p>'; 
            endif;
            ?>

        </div>
    </div>
</section>