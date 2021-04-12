<?php get_header(); ?>

<?php get_template_part('includes/section', 'ArticleSearchForm'); ?>

<?php if(have_posts()) : while(have_posts()) : the_post() ?>

<?php get_template_part('includes/section','ArticleArchives' ); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>