<?php

    if(have_posts())
    {
        while(have_posts())
        {
            the_post();
        ?>

            <h1 class="post-title post-title--archive"> <?php the_title(); ?> </h1>
            <p class="post-excerpt post-excerpt--archive"> <?php the_excerpt(); ?> </p>
            <a href="<?php the_permalink(); ?>" class="u-link u-link--readMore">Read more ...</a>
        <?php
        }
    }

?>