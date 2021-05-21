<?php
/**
 * Created by PhpStorm.
 * User: AbduljeleelNG
 * Date: 5/20/2021
 * Time: 4:51 PM
 */
?>

<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <?php wp_nav_menu( array(
                    'theme_location' => 'header-menu',
                    'container'            => 'div',
                    'container_class'      => 'navbar-nav mr-auto ',
                    'container_id'         => '',
                    'container_aria_label' => '',
                    'menu'                 => 'a',
                    'menu_class'           => 'nav-item nav-link',
                    'menu_id'              => '',
                    'echo'                 => true,
                    'fallback_cb'          => 'wp_page_menu',
                    'before'               => '',
                    'after'                => '',
                    'link_before'          => '',
                    'link_after'           => '',
                    //'items_wrap'           => '%3$s',
                    'items_wrap'           => '<a >%3$s</a>',
                    'item_spacing'         => '',
                    'depth'                => 0,
                    'walker'               => '',
                ) ); ?>
                <div class="navbar-nav mr-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Sub Item 1</a>
                            <a href="#" class="dropdown-item">Sub Item 2</a>
                        </div>
                    </div>
                    <a href="single-page.html" class="nav-item nav-link">Single Page</a>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                </div>


                <div class="social ml-auto">
                    <?php //social media here ?>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->
