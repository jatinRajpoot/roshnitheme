<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-container">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo-roshni.jpg' ); ?>" alt="Roshni Health Care" class="site-logo-img">
            </a>
        </div>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-menu" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav class="nav-menu" id="primary-menu">
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
                <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Book Appointment</a></li>
            </ul>
        </nav>
    </div>
</header>
