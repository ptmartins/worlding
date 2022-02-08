<div class="front-page">

    <!-- SLIDER -->
    <div class="slider slider--home">
        <?php
        // echo do_shortcode('[wp1s id="71"]');
        echo do_shortcode('[wp1s id="30"]');
        ?>
    </div>

    <?php

    $supportUs_page = get_page_by_title('About Us');
    $supportUs_page_id = $supportUs_page;
    $supportUs_permalink = get_permalink(upportUs_page_id);

    ?>

    <!-- SHOP -->
    <a href="<?php echo site_url('/shop'); ?>" class="shop">
        <div class="caption">
            <h2 class="caption-title">Shop</h2>
        </div>
    </a>

    <!-- SUPPORT US -->
    <a href="<?php echo site_url('/support-us'); ?>" class="support-us">
        <div class="caption">
            <h2 class="caption-title">Support us</h2>
        </div>
    </a>
</div>