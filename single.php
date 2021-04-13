<?php get_header();?>

    <?php if(has_post_thumbnail()) : ?>
        <div class="text-center pb-4">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="Blog Post Picture" class="img-fluid">
        </div>
    <?php endif; ?>

    <h1><?php the_title(); ?> </h1>

    <?php get_template_part('includes/section', 'blogcontent'); ?>

<?php get_footer(); ?>