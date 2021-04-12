<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post();?>

    <div class="card mb-3">
        <div class="card-body">
            <h3><a href="<?php the_permalink()?> "><?php the_title(); ?> </a></h3>

            <?php the_excerpt() ?>

            <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More </a>
        </div>
    </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php echo paginate_links() ?>


