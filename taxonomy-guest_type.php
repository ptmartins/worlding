<?php get_header(); ?>  

    <div class="custom-archive">
        <h1 class="custom-type__title"> <?php echo get_the_term_list( $post->ID, 'guest_type', '', '', '') . 's'; ?> </h1>

        <?php
            get_template_part( 'includes/section', 'guests' );
            previous_posts_link();
            next_posts_link();  
        ?>
    </div>

<?php get_footer(); ?>