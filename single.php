<?php
/**
 * Created by PhpStorm.
 * User: AbduljeleelNG
 * Date: 5/21/2021
 * Time: 3:11 PM
 */

    get_header(); ?>

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">News</a></li>
                <li class="breadcrumb-item active">News details</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Single News Start-->
    <div class="single-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sn-container">
                        <div class="sn-img">
                            <img src="<?php echo get_template_directory_uri()."/assets/img/news-825x525.jpg" ?>" />
                        </div>
                        <div class="sn-content">
                            <h1 class="sn-title"><?php the_title(); ?></h1>
                            <p>
                                <?php

                                the_content();

                                the_post_navigation();

                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="sn-related">
                        <h2>Related News</h2>
                        <div class="row sn-slider">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="col-md-4">
                                <div class="sn-img">
                                    <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-1.jpg" ?>" />
                                    <div class="sn-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile;  endif;?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h2 class="sw-title">In This Category</h2>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="news-list">
                                <div class="nl-item">
                                    <div class="nl-img">
                                        <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-1.jpg" ?>" />
                                    </div>
                                    <div class="nl-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile;  endif;?>
                        </div>

                        <div class="sidebar-widget">
                            <?php get_sidebar(); ?>
                        </div>

                        <div class="sidebar-widget">
                            <div class="image">
                                <a href="https://htmlcodex.com"><img src="<?php echo get_template_directory_uri()."/assets/img/ads-2.jpg"?>" alt="Image"></a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="tab-news">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="featured" class="container tab-pane active">
                                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-1.jpg" ?>" />
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
                                                    <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-4.jpg" ?>" />
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
                                                    <img src="<?php echo get_template_directory_uri()."/assets/img/news-350x223-3.jpg" ?>" />
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

                        <div class="sidebar-widget">
                            <div class="image">
                                <a href="https://htmlcodex.com"><img src="<?php echo get_template_directory_uri()."/assets/img/ads-2.jpg" ?>" alt="Image"></a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="sw-title">News Category</h2>
                            <div class="category">
                                <?php
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    $categories = get_categories( array(
                                        'orderby' => 'name',
                                        'order'   => 'ASC'
                                    ) );
                                    foreach( $categories as $category ) {
                                        $category_link = sprintf('<a href="%1$s" alt="%2$s">%3$s</a>',
                                            esc_url( get_category_link( $category->term_id ) ),
                                            esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                                            esc_html( $category->name )
                                        );
                                        echo "<ul><li>".sprintf( esc_html__( '', 'textdomain' ), $category_link )." <a href=''>$category_link </a> <span>($category->count)</span></li></ul>";
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="image">
                                <a href="https://htmlcodex.com"><img src="<?php echo get_template_directory_uri()."/assets/img/ads-2.jpg" ?>" alt="Image"></a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="sw-title">Tags Cloud</h2>
                            <div class="tags">
                                <a href="">National</a>
                                <a href="">International</a>
                                <a href="">Economics</a>
                                <a href="">Politics</a>
                                <a href="">Lifestyle</a>
                                <a href="">Technology</a>
                                <a href="">Trades</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single News End-->
<?php
get_footer();
