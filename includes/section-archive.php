<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post();?>
    <div class="card mb-3">
        <div class="row">
            <div class="col-4 align-content-center">
                <img class="my-5 mx-3 img-fluid" src="<?php the_post_thumbnail_url() ?>">
            </div>
            <div class="col-8 card-body">
                <h3><a href="<?php the_permalink()?>" class="text-info"><?php the_title(); ?> </a></h3>
                <p class="mb-3"><?php echo the_date() ?></p>

                <?php the_excerpt() ?>

                <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Read More</a>
            </div>
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


