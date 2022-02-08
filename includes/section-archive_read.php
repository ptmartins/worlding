<section class="section section--read">
    <div class="archive archive--read">
       <?php
            if(have_posts())
            {
                while(have_posts())
                {
                    the_post();

                    $terms = get_the_terms( $post->ID, 'type' );
                ?>
                
                <div class="archive-item">


                    <?php
                        echo get_the_term_list( $post->ID, 'read_type', '<h1 class="custom-post__type">', '', '</h1>')
                    ?>

                    <h4 class="archive-item__title"> 
                        <a href="<?php the_permalink(); ?>" class="u-link"> <?php the_title(); ?> </a>
                    </h4>
                    <div class="read-details">
                        <div class="archive-item__excerpt"> <?php the_excerpt(); ?> </div>
                        <a href="<?php the_permalink(); ?>" class="u-link u-link--readMore archive-item__link">More ...</a> 
                    </div>                   
                </div>
               
               <?php
                }
            }
        ?>     
    </div>

</section>
