<?php
/**
 * Created by PhpStorm.
 * User: AbduljeleelNG
 * Date: 5/20/2021
 * Time: 5:34 PM
 */
?>
<!-- Category News Start-->


<div class="cat-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php if ( has_post_thumbnail() ) : ?>
                    <!-- make condition for now feature image post --
                        <img src="<?php //echo get_template_directory_uri()."/assets/img/news-350x223-1.jpg"; ?>" alt=""/>
                        -->

                <?php endif; ?>

                <?php
                $categories = get_the_category(
                    array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    )
                );
                if (! empty($categories)){
                    ?>
                        <h2><?php echo esc_html( $categories['2']->name );  //var_dump($categories); ?> Sports </h2>
                        <div class="row cn-slider">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <?php the_post_thumbnail( esc_attr( $thumbnail ), array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
                                        <div class="cn-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; endif;?>
                        </div>
                <?php
                }
                ?>

            </div>
            <div class="col-md-6">
                <h2>Technology</h2>
                <div class="row cn-slider">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-4.jpg"; ?>" alt="Technology" />
                            <div class="cn-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;  endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category News End-->
