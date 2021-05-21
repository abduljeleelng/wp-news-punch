<?php
/**
 * Created by PhpStorm.
 * User: AbduljeleelNG
 * Date: 5/20/2021
 * Time: 12:59 PM
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php //the_title(); ?></h1>
    <?php //the_content(); ?>

<?php endwhile;  endif;?>


<?php get_template_part( 'template-parts/content/top-news' ); ?>
<?php get_template_part( 'template-parts/content/cat-news' ); ?>
<?php get_template_part( 'template-parts/content/tab-news' ); ?>
<?php get_template_part( 'template-parts/content/main-news' ); ?>



<?php get_footer(); ?>