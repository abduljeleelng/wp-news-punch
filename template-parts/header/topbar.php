<?php
/**
 * Created by PhpStorm.
 * User: AbduljeleelNG
 * Date: 5/20/2021
 * Time: 4:48 PM
 */
?>

<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tb-contact">
                    <p><i class="fas fa-envelope"></i>info@mail.com</p>
                    <p><i class="fas fa-phone-alt"></i>+012 345 6789</p>
                </div>
            </div>
            <div class="col-md-6">
                <?php wp_nav_menu( array(
                            'theme_location' => 'extra-menu',
                            'container'            => 'div',
                            'container_class'      => 'tb-menu',
                            'container_id'         => '',
                            'container_aria_label' => '',
                            'menu'                 => '',
                            'menu_class'           => '',
                            'menu_id'              => '',
                            'echo'                 => true,
                            'fallback_cb'          => 'wp_page_menu',
                            'before'               => '',
                            'after'                => '',
                            'link_before'          => '',
                            'link_after'           => '',
                            //'items_wrap'           => '%3$s',
                            'items_wrap'           => '<a>%3$s</a>',
                            'item_spacing'         => 'preserve',
                            'depth'                => 0,
                            'walker'               => '',
                ) ); ?>
                <div class="tb-menu">
                    <a href="">About</a>
                    <a href="">Privacy</a>
                    <a href="">Terms</a>
                    <a href="">Contact</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar Start -->
