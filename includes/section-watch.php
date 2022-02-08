<?php

    if(have_posts())
    {
        while(have_posts())
        {
            the_post();

            $terms = get_the_terms( $post->ID, 'type' );
        ?>
            <div class="custom-post">

                <h1 class="custom-post__type">
                    <?php
                        foreach($terms as $term) {
                            echo $term->name;
                        }
                    ?>
                </h1>

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