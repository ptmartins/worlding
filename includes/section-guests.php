<section class="section section--guests">
    <div class="archive archive--guests">
       <?php
            if(have_posts())
            {
                while(have_posts())
                {
                    the_post();
                    $terms = get_the_terms( $post->ID, 'type' );
                ?>
                
                <div class="archive-item">

                    <!-- Post thumbnail -->
                    <div class="archive-item__thumbnail">
                        <?php the_post_thumbnail('blog-small'); ?>
                    </div>

                    <!-- Custom post type -->
                    <?php
                        echo get_the_term_list( $post->ID, 'guest_type', '<h1 class="custom-post__type">', '', '</h1>')
                    ?>

                    <!-- Duration -->
                    <p class="guest-duration"> <?php echo get_post_meta($post->ID, 'Duration', true); ?> </p>
                    
                    <!-- Title -->
                    <h4 class="archive-item__title"> 
                        <a href="<?php the_permalink(); ?>" class="u-link"> <?php the_title(); ?> </a>
                    </h4>

                    <!-- The excerpt -->
                    <div class="archive-item__excerpt"> <?php the_excerpt(); ?> </div>
                    <a href="<?php the_permalink(); ?>" class="u-link u-link--readMore archive-item__link">More ...</a>                    
                </div>
               
               <?php
                }
            }
        ?>     
    </div>

</section>
