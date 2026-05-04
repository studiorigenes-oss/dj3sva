<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="header-container">
        <div class="site-branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <span class="logo-text">dj3sva</span>
            </a>
        </div>

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="menu-bar bar-1"></span>
                <span class="menu-bar bar-2"></span>
                <span class="menu-text">MENU</span>
            </button>
            <div class="menu-overlay">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'overlay-menu-list',
                ) );
                ?>
                <div class="social-links-overlay">
                    <a href="#" target="_blank">INSTAGRAM</a>
                    <a href="#" target="_blank">SPOTIFY</a>
                    <a href="#" target="_blank">SOUNDCLOUD</a>
                </div>
            </div>
        </nav>
    </div>
</header>
