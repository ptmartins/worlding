<?php get_header(); ?>

    <div class="error-content">
        <h1 class="error-code">404</h1>
        <div class="error-message">
            <h1 class="message-highlight">Ooops!!!</h1>
            <h1 class="message-detail">The page you're looking for cannot be found.</h1>
        </div>
        <a href="<?php echo home_url(); ?>" class="btn">Back to Home</a>
    </div>

<?php get_footer(); ?>