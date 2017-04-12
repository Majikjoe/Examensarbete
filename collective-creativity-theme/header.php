<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collective Creativity</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


    <?php wp_head() ?>



</head>

<body>

    <div class="top-header">
        <div id="shipping">
            <p>Free shipping</p>
            <div id="shipping-icon"></div>
        </div>

        <div class="social-media">
            <a href="https://www.facebook.com/">
                <div id="facebook"></div>
            </a>
            <a href="https://www.instagram.com/">
                <div id="instagram"></div>
            </a>
            <a href="https://www.twitter.com/">
                <div id="twitter"></div>
            </a>
            <a href="https://www.pinterest.com/">
                <div id="pinterest"></div>
            </a>
        </div>
        <!-- Social Media end -->
    </div>
    <!-- Top header end -->

    <header>
        <a href="<?php echo home_url('/')?>">
            <div class="logo"></div>
        </a>
    </header>
    <!-- Header end -->

    <div class="nav-container ">
        <nav>
            <div class="hamburger-menu">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="menu">
                <div class="nav-menu">
                    <?php
                wp_nav_menu( array( 
                    'theme_location' => 'my-custom-menu', 
                    'container_class' => 'custom-menu-class' ) ); 
                    ?>
                </div>

                <div class="logo-small-container">
                    <a href="<?php echo home_url('/')?>">
                        <div class="logo-small"></div>
                    </a>
                </div>


                <div class="cart-small">
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'extra-menu', 
                            'container_class' => 'custom-menu-class' ) ); 
                    ?>
                </div>
            </div>
            <!-- Menu end -->
        </nav>
    </div>
    <!-- Nav container end -->

    <div id="container">
