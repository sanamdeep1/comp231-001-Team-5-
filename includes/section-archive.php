<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post();?>

    <div class="card mb-3">
        <div class="card-body">
            <h3><a href="<?php the_permalink()?> "><?php the_title(); ?> </a></h3>

            <?php the_excerpt() ?>

            <a href="<?php the_permalink(); ?>" class="btn btn-dark">Read More </a>
        </div>
    </div>

    <?php endwhile; ?>
    <?php else: ?>
        <p>No Search Results</p>
        <div class="row">
            <div class="col-6">
            <?php get_search_form(); ?>
    </div>
    </div>
<?php endif; ?>

<div class="row justify-content-center">
    <div class="col-4">
<?php echo paginate_links() ?>
    </div>
    </div>

</div>


