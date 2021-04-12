<?php get_header();?>

    <div class="row justify-content-center pb-2">
            <h1><?php the_title(); ?></h1>
    </div>

    <?php get_template_part('includes/section', 'content'); ?>

<?php get_footer(); ?>