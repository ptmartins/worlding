<section class="section section--listen">
    <div class="archive archive--listen">
       <?php
            if(have_posts())
            {
                while(have_posts())
                {
                    the_post();

                    $terms = get_the_terms( $post->ID, 'type' );
                ?>
                
                <div class="archive-item">

                    <div class="archive-item__thumbnail">
                        <?php the_post_thumbnail('blog-small'); ?>
                    </div>

                    <h1 class="archive-item__type">
                        <?php
                            foreach($terms as $term) {
                                echo $term->name;
                            }
                        ?>
                    </h1>
                    <h4 class="archive-item__title"> 
                        <a href="<?php the_permalink(); ?>" class="u-link"> <?php the_title(); ?> </a>
                    </h4>
                    <div class="archive-item__excerpt"> <?php the_excerpt(); ?> </div>
                    <a href="<?php the_permalink(); ?>" class="u-link u-link--readMore archive-item__link">More ...</a>                    
                </div>
               
               <?php
                }
            }
        ?>     
    </div>

</section>
