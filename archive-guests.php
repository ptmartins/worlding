<?php get_header(); ?>  

    <div class="custom-archive custom-archive--guests">
        <h1 class="custom-archive__title"><?php post_type_archive_title(); ?></h1>

        <div class="custom-archive__subTitle">
            <p>Find out more about the artists we were lucky enough to collaborate with.</p>
            <p>What kind of art do they make? Where does their work take you?</p>
            <p>To hear them talk about their practice, go to the pages WATCH and LISTEN. 
            Our SHOP might have one of their prints, editions or books.</p>
        </div>

        <?php
            get_template_part( 'includes/section', 'guests' );
        ?>

        <div class="archive-pagination">
            <?php
                previous_posts_link();
                next_posts_link();
            ?>
        </div>
    </div>

<?php get_footer(); ?>