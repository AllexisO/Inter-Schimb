<?php get_header(); ?>



<!-- NEWS HEADER -->
<section id="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /NEWS HEADER -->


<section id="news">
<div class="container">
    <div class="row">
        <div class="col-md-9 news-block">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="single-news">
                <div class="col-md-5 news-image">
                    <div class="post-thumb img-responsive">
                        <!-- Photo miniature -->
                        <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </a>   
                    </div>
                </div>

                <div class="col-md-7 entry-content" <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h3>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <br>
                    <b><i class="fa fa-clock-o" aria-hidden="true"></i> Posted on - <?php the_time('j F, Y') ?></b>
                    <!-- Category and Edit News -->
                    <p class="postmetadata">
                        <i class="fa fa-tags" aria-hidden="true"></i><?php the_tags('Tags: ', ', ', '<br />'); ?> <b>Program -</b> <?php the_category(', ') ?> | <?php edit_post_link('Edit'); ?>
                    </p>
            <!-- Conent of News -->
                    <div class="entry">

                        <?php the_excerpt(); ?>
                        <br>
                        <a href="<?php the_permalink(); ?>" class="more-link">Read more</a>
                    </div>
        </div>


                
            </div>
            <?php endwhile; ?>
                <?php else : ?>
                <p><?php __('No News Found'); ?></p>
                <?php endif; ?>
            
            
            
            
        </div>
        <div class="widget-bar-news">
               <div class="sidebar-widget">
                        <?php if ( is_active_sidebar('sidebar')) : ?>
                            <?php dynamic_sidebar('sidebar'); ?>
                        <? endif; ?>
                    </div>
                
                   

                <div class="sidebar-widget">
                    <h4 class="sidebar-title"><a class="category-style" href="../../photogallery">Наши участники</a></h4>
                    <ul class="content-flickr">
                        <li>
                            <a href="../photogallery" title="">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/gallery/01.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="../photogallery">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/gallery/02.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="../photogallery">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/gallery/03.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="../photogallery">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/gallery/05.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="../photogallery">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/gallery/07.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="../photogallery">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/gallery/08.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            
                    <div class="sidebar-widget">
                    <div id="fb-root">
                    <script>
                    (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.7&appId=752207634839573";
                    fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div class="fb-page" data-href="https://www.facebook.com/summer.usa" data-tabs="timeline" data-width="900" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/summer.usa" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                    </div>
                    </div>
               </div>
            </div>
        
    </div>
</div>
</section>

<?php get_footer(); ?>