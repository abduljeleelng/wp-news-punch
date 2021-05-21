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
                <h2>Sports</h2>
                <div class="row cn-slider">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-1.jpg"; ?>" alt="Sport"/>
                            <div class="cn-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;  endif;?>
                </div>
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
