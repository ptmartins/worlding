<?php get_header(); ?>  

    <div class="custom-archive custom-archive--read">
        <h1 class="custom-archive__title"><?php post_type_archive_title(); ?></h1>

        <?php
            get_template_part( 'includes/section', 'archive_read' );
            previous_posts_link();
            next_posts_link();  
        ?>
    </div>

<?php get_footer(); ?>