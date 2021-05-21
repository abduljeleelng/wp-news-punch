<?php
/**
 * Created by PhpStorm.
 * User: AbduljeleelNG
 * Date: 5/20/2021
 * Time: 5:33 PM
 */
?>
<!-- Top News Start-->
<div class="top-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6 tn-left">
                <div class="row tn-slider">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-6">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <div class="tn-img">
                            <img src="<?php echo get_template_directory_uri()."/assets/img/news-825x525.jpg"; ?>" alt=" Slide" />
                            <?php the_post_thumbnail( esc_attr( $thumbnail ), array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
                            <div class="tn-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="tn-img">
                            <img src="<?php echo get_template_directory_uri()."/assets/img/news-825x525.jpg"; ?>" alt=" Slide" />
                            <?php the_post_thumbnail( esc_attr( $thumbnail ), array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
                            <div class="tn-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;  endif ?>
                </div>
            </div>
            <div class="col-md-6 tn-right">
                <div class="row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-1.jpg"; ?>" alt=" feature" />
                            <div class="tn-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;  endif ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top News End-->
