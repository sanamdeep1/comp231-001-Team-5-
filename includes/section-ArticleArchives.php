<?php $postID = $post->ID; ?>

<div class="container article-listing">

<p>
        <span class="article_authors"><?php echo get_post_meta($postID, 'authors', true); ?> : </span>
        <a href="<?php the_field('pdf_file'); ?>"><span class="article_title"><?php echo the_title(); ?>. </span></a>
        <span class="article_publiation"> In: <?php echo get_post_meta($postID, 'publication', true); ?>, </span>
        <span class="article_volumeNum"><?php echo get_post_meta($postID, 'volume_number', true); ?></span>
        <span class="article_issue"> (<?php echo get_post_meta($postID, 'issue_number', true); ?>). </span>
        Type: <span class="badge badge-info">E-Journal</span>
        Tags: 
        <?php $articleTerms = wp_get_post_terms($post->ID, 'article-tags');
                if ($articleTerms) {
                        $tagsArray = array();
                        foreach ($articleTerms as $articleTerm) {
                                $tagsArray[] = '<span><i class="fas fa-tag"></i><a class="' .$articleTerm->slug .'" href="' .get_term_link( $articleTerm->slug, 'article-tags') .'">' .$articleTerm->name .'</a></span>';
                        }
                        echo join( '&nbsp;&nbsp;&nbsp;&nbsp;', $tagsArray );
                };
        ?>
</p>

</div>



