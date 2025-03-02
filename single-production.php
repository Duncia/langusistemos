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
<?php get_footer(); ?>