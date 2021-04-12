<?php get_header(); ?>

<h1>Articles</h1>
<div class="row mb-1">
    <div class="col-8">
        <?php get_template_part('includes/section', 'ArticleSearchForm'); ?>
    </div>
</div>
<hr class="mb-3">

<?php if(have_posts()) : while(have_posts()) : the_post() ?>

<?php get_template_part('includes/section','ArticleArchives' ); ?>

<?php endwhile; endif; ?>

<div class="row justify-content-center">
    <div class="col-4">
        <?php echo paginate_links() ?>
    </div>
</div>
<?php get_footer(); ?>