<?php 
/* Template Name: Production */
/*
Production page template
 */
?>
<?php get_header(); ?>
<section class="container">
    <div class="container__inner pt-md pb-md">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
            <?php the_content(); ?>
        <?php 
            endwhile;
            endif; 
        ?>
    </div>
</section>
<section class="container">
    <div class="container__inner pb-md">
        <?php 
            $allProduction = new WP_Query(
                array(
                    'post_type'         => array('production'), 
                    'post_status'       =>'publish',
                    'orderby'			=> 'meta_value',
                    'order'				=> 'DESC',
                )); 
        ?>
            <?php if ( $allProduction->have_posts() ) : ?>
                <?php while ( $allProduction->have_posts() ) : $allProduction->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <h4 class="pb-md"><?php the_title(); ?></h4>
                </a>
                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <h4 class="txt-center">Nothing to display</h4>
            <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>