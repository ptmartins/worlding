<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Worlding is an invitation-based artist residency & project space based in London - UK, conceived to create a safe haven for artists.">
    <meta name="keywords" content="Worlding, artist, art, artist residency, project space, london, uk, united kingdom">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body id="top" <?php body_class();?>>

    <!-- HEADER -->
    <header class="header">
        <div class="inner-wrapper">
            <div class="logoIcon">
                <a href="<?php echo home_url(); ?>" title="Worlding">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logoIcon.png" alt="Worlding Icon">
                </a>
            </div>
            <div class="logoWord">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logoWord.png" alt="Worlding" title="Worlding">
            </div>
            <div id="burgerMenu" class="burgerMenu">
                <span class="burger"></span>
            </div>
        </div>
    </header>

    <nav class="mainMenu">
        <?php 
            wp_nav_menu( ['theme_location' => 'header'] );

            get_search_form();
        ?>
    </nav>

    <!-- MAIN -->
    <main class="main">
        <div class="main-container">