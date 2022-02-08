<?php

    if(have_posts())
    {
        while(have_posts())
        {
            the_post();

        ?>
            <div class="custom-post">

                <?php
                    echo get_the_term_list( $post->ID, 'guest_type', '<h1 class="custom-post__type">', '', '</h1>');
                ?>

                <h2 class="custom-post__duration"> <?php echo get_post_meta($post->ID, 'Duration', true); ?> </h2>

                <h2 class="custom-post__title"> <?php the_title(); ?> </h2>
                
                <div class="custom-post__thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                
                <div class="custom-post__content">
                    <?php the_content(); ?>
                </div>
            </div>

        <?php
        }
    }

?>