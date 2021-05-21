<?php
/**
 * Created by PhpStorm.
 * User: AbduljeleelNG
 * Date: 5/20/2021
 * Time: 5:35 PM
 */
?>
<!-- Tab News Start-->


<div class="tab-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="featured" class="container tab-pane active">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-1.jpg"; ?>" />
                            </div>
                            <div class="tn-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                        <?php endwhile;  endif;?>
                    </div>

                    <div id="popular" class="container tab-pane fade">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-4.jpg"; ?>" />
                            </div>
                            <div class="tn-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                        <?php endwhile;  endif;?>
                    </div>
                    <div id="latest" class="container tab-pane fade">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-2.jpg"; ?>" />
                            </div>
                            <div class="tn-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                        <?php endwhile;  endif;?>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="m-viewed" class="container tab-pane active">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-5.jpg"; ?>" />
                            </div>
                            <div class="tn-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                        <?php endwhile;  endif;?>

                    </div>
                    <div id="m-read" class="container tab-pane fade">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-2.jpg";?>" />
                            </div>
                            <div class="tn-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                        <?php endwhile;  endif;?>
                    </div>
                    <div id="m-recent" class="container tab-pane fade">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="tn-news">
                            <div class="tn-img">
                                <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-4.jpg"; ?>" />
                            </div>
                            <div class="tn-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                        <?php endwhile;  endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tab News Start-->
