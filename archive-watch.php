<?php get_header(); ?>  

    <div class="custom-archive custom-archive--watch">
        <h1 class="custom-archive__title"><?php post_type_archive_title(); ?></h1>

        <div class="custom-archive__subTitle">
            <p>Bored? In need of new, stimulating video content? </p>
            <p>Browse here for interviews with artists about their practice and their path to creativity, 
            with a particular focus on drawing. Worlding, above all, is a way to experience art, both for 
            artists and audiences, in its creative process.</p>
            <p>
            That's why we feel so connected to drawing, this strange discipline that pervades everything 
            and that can take us to video, to ecology, thought processes and diagrams. Enjoy!
            </p>
        </div>

        <?php
            get_template_part( 'includes/section', 'archive_watch' );
            previous_posts_link();
            next_posts_link();  
        ?>
    </div>

<?php get_footer(); ?>