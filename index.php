<?php
/*
*   this page is used to display index page
*/
get_header();
?>  
    <div class="home-main">
        <div class="custom-header">
            <img src="<?php header_image() ?>" width="<?php echo absint(get_custom_header()->width) ?>" height="<?php echo absint(get_custom_header()->height) ?>" class="img-fluid">
        </div>
        <div class="row mr-0 ml-0">
            <div class="home-post col-9">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="home-post">
                            <div class="post-header row ml-0 mr-0">
                                <div class="post-thumbnail col-4" text-center>
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail( 'home-feature' ); ?>
                                    </a>
                                </div>
                                <div class="post-description col-8">
                                    <h1>
                                        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                    </h1>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                            <div class="post-footer row ml-0 mr-0">
                                <div class="post-meta col-3">
                                    <strong>Author: </strong><?php the_author(); ?>
                                </div>
                                <div class="post-meta col-6">
                                    <strong>Tags: </strong><?php the_tags(); ?>
                                </div>
                                <div class="post-meta col-3">
                                    <strong>Posted on: </strong><?php the_time(); ?>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="pagination row ml-0 mr-0">
                    <?php echo paginate_links(); ?>
                </div> 
            </div>
            <div class="home-sidebar col-3">
                <?php get_sidebar(); ?>
            </div>
        </div>      
    </div>
<?php get_footer(); ?>

