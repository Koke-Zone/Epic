<?php
/*
*   this tempalte is used to display about us page
*   Template Name: About Us    
*/
get_header();
?>  
    <div class="custom-header-<?php echo get_the_title(); ?>">
        <?php $banner_img = get_the_post_thumbnail_url( get_the_ID(),'full' )  ?>
        <img src="<?php echo $banner_img ?>" class="img-fluid" alt="<?php echo get_the_title(); ?>" class="img-fluid" height="200">
    </div>
    <div class="post-container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="post-image">
                    <?php the_post_thumbnail( 'home-feature' ); ?>
                </div>
                <div class="post-title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="post-meta-row">
                    <div class="post-meta">
                        <strong>Author: </strong><?php the_author(); ?>
                    </div>
                    <div class="post-meta">
                        <strong>Posted on: </strong><?php the_time(); ?>
                    </div>
                </div>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>
