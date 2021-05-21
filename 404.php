<?php
/**
 * Created by PhpStorm.
 * User: AbduljeleelNG
 * Date: 5/20/2021
 * Time: 4:26 PM
 */


get_header();
?>

    <header class="page-header alignwide">
        <h1 class="page-title"><?php esc_html_e( 'Nothing here', 'punchng' ); ?></h1>
    </header><!-- .page-header -->

    <div class="error-404 not-found default-max-width">
        <div class="page-content">
            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?></p>
            <?php get_search_form(); ?>
        </div><!-- .page-content -->
    </div><!-- .error-404 -->

<?php
get_footer();
