<?php
/*
*   this tempalte is used to display page
*/
get_header();
?>
    <div class="custom-header-<?php echo get_the_title(); ?>">
        <?php $banner_img = get_the_post_thumbnail_url( get_the_ID(),'full' )  ?>
        <img src="<?php echo $banner_img ?>" class="img-fluid" alt="<?php echo get_the_title(); ?>" class="img-fluid">
    </div>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>