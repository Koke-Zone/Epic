<?php
/*
*   this tempalte is used to display single page
*/
get_header();
?>
    <div class="post-container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="post-image">
                    <?php  
                        $images =  rwmb_meta( 'field-url');
                    ?>
                    <a href="<?php echo $images; ?>" target="_blank" ><?php the_post_thumbnail( 'home-feature' ); ?></a>
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
                <div class="post meta row mr-0 ml-0">
                    <?php $images = rwmb_meta( 'epicWP_post_gallary', array( 'size' => 'thumbnail' ) );
                        foreach ( $images as $image ) {
                            echo '<a href="', $image['full_url'], '"><img src="', $image['url'], '"></a>';
                    } ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>
