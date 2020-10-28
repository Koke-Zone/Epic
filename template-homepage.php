<?php
/*
*   this tempalte is used to display Homepage
*   Template Name: Homepage    
*/
get_header();
?>  
    <div class="custom-header-<?php echo get_the_title(); ?>">
        <?php $banner = get_theme_mod( 'wpepic_banner','yes' );
        if( $banner == 'yes' ): ?>
        <?php $banner_img = get_the_post_thumbnail_url( get_the_ID(),'full' )  ?>
            <img src="<?php echo $banner_img ?>" alt="<?php echo get_the_title(); ?>" width='100%'>
        <?php endif; ?>
    </div>
    <?php if ( true == get_theme_mod( 'switch_setting', true ) ) : ?>
        <div class="flex-row mr-0 ml-0 text-center mt-5">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <h3 class="mt-5 mb-3 text-center"><?php echo get_theme_mod( 'Service_heading_change','Our Services' ); ?></h3>
    <div class="home-service row ml-0 mr-0 mt-5">
    <?php 
        $args = array(
            'post_type' => 'service', 
            'order'     => 'ASC'
        );
        $tech_Query = new WP_Query( $args ); 
        if ( $tech_Query->have_posts() ) : ?>
            <?php while ( $tech_Query->have_posts() ) : $tech_Query->the_post(); ?>
                <div class="home-post-row col-4 text-center">
                    <div class="post-thumb">
                        <?php the_post_thumbnail( 'medium',array( 'class' => 'img-fluid' ) ) ?>
                    </div>
                    <div class="post-title">
                        <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title(); ?></a></h3>   
                        <?php the_excerpt() ?>                     
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <div class="home-posts row mr-0 ml-0 mt-5">
        <div class="col-6">
            <div class="section-head mt-5 mb-5">
                <h3><?php echo get_theme_mod( 'wpepic_label1','Latest Office News' ) ?></h3>
            </div>
            <div class="section-content">
            <?php 
                $args = array(
                    'cat' => 3,
                    'posts_per_page' => 2
                );
                $tech_Query = new WP_Query( $args ); 
                if ( $tech_Query->have_posts() ) : ?>
                    <?php while ( $tech_Query->have_posts() ) : $tech_Query->the_post(); ?>
                        <div class="home-post-row row mr-0 ml-0  mt-3 mb-5">
                            <div class="post-thumb col-4">
                                <?php the_post_thumbnail( 'thumbnail',array( 'class' => 'img-fluid' ) ) ?>
                            </div>
                            <div class="post-title col-8">
                                <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title(); ?></a></h3>   
                                <?php the_excerpt() ?>                     
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="col-6">
            <div class="section-head mt-5 mb-5">
                <h3><?php echo get_theme_mod( 'wpepic_label2','Latest From Interior Design' ) ?></h3>
            </div>
            <div class="section-content">
            <?php 
                $args = array(
                    'cat' => 9,
                    'posts_per_page' => 2
                );
                $designer = new WP_Query( $args ); 
                if ( $designer->have_posts() ) : ?>
                    <?php while ( $designer->have_posts() ) : $designer->the_post(); ?>
                        <div class="home-post-row row mr-0 ml-0  mt-3 mb-5">
                            <div class="post-thumb col-4">
                                <?php the_post_thumbnail( 'thumbnail',array( 'class' => 'img-fluid' ) ) ?>
                            </div>
                            <div class="post-title col-8">
                                <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title(); ?></a></h3>   
                                <?php the_excerpt() ?>                     
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <div class="home-carousel row mr-0 ml-0 mt-5 mb-5">
        <div class="owl-carousel">              <!-- very important div -->
            <?php 
            $args = array(
                'post_type' => 'project',
                'posts_per_page' => 7
            );
            $tech_Query = new WP_Query( $args ); 
            if ( $tech_Query->have_posts() ) : ?>
                <?php while ( $tech_Query->have_posts() ) : $tech_Query->the_post(); ?>
                    <?php the_post_thumbnail( 'medium' ) ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
<?php get_footer(); ?>
