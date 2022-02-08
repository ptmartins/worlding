<?php get_header(); ?>

    this is the category-guest

    <?php
        get_template_part( 'includes/section', 'archive' );
        previous_posts_link();
        next_posts_link();  
    ?>

<?php get_footer(); ?>