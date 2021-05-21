<?php
/**
 * Created by PhpStorm.
 * User: AbduljeleelNG
 * Date: 5/20/2021
 * Time: 4:49 PM
 */
?>


<!--
Brand Start
height="<?php //echo get_custom_header()->height; ?>" width="<?php //echo get_custom_header()->width; ?>"

 -->
<div class="brand">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4">
                <div class="b-logo">
                    <a href="<?php echo home_url(); ?>">
                        <?php
                        echo '<img src="' . esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' )) . '" alt="Logo">';
                        ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="b-ads">
                    <a href="https://htmlcodex.com">
                        <img src="<?php header_image() ?>"  alt="advert 1" />
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="b-search">
                    <?php get_search_form(); ?>
                </div>
                <!--
                <div class="b-search">

                    <input type="text" placeholder="Search">
                    <button><i class="fa fa-search"></i></button>
                </div>
                -->
            </div>
        </div>
    </div>
</div>
<!-- Brand End -->
