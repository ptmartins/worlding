<?php get_header(); ?>

<div class="page page--supporttUs">
    <h2 class="page-title">Support us</h2>

    <?php get_template_part( 'includes/section', 'page' ); ?>       

    <div id="widgetized-area">

        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widgetized-area')) : else : ?>

        <div class="pre-widget">
            <p><strong>Widgetized Area</strong></p>
            <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
        </div>

        <?php endif; ?>

    </div>

</div>

<?php get_footer(); ?>