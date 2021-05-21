<?php
/**
 * Created by PhpStorm.
 * User: AbduljeleelNG
 * Date: 5/20/2021
 * Time: 5:36 PM
 */
?>
<!-- Main News Start-->
<div class="main-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-4">
                        <div class="mn-img">
                            <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-1.jpg"; ?>" />
                            <div class="mn-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;  endif;?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="mn-list">
                    <h2>Read More</h2>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <ul>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    </ul>
                    <?php endwhile;  endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main News End-->
