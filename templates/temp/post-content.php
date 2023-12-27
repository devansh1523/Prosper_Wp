<?php

/**
 * Template Name: Blog Posts
 * 
 */

//get blogposts
?>

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

<div class="article">
    <article class="blog-post">
        <div class="post-thumbnail">
            <!--<img src="./assets/images/Featured_image/01.jpg" alt="Post Image" class="fluid">-->
            <?php
                if(has_post_thumbnail()): ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post Image" class="fluid">
                <?php endif; ?>
        </div>
        <div class="post-info">
            <div class="post-author">
                 <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><span class="text-sm text-cream">by <?php the_author(); ?> <?php echo get_the_date(); ?> </span></a>
            </div>
            <div class="post-title">
                <a href="<?php the_permalink(); ?>"><span class="text-lg text-dark"><?php echo the_title(); ?></span></a>
            </div>
            <div class="post-content">
                <p class="para">
                    <?php echo get_the_excerpt(); ?>
                </p>
            </div>

            <hr>
            <div class="post-cat">
                <?php get_template_part('templates/temp/post','categories'); ?>
            </div>
        </div>
    </article>
</div>


<?php endwhile; ?>
<?php else: ?>
<?php echo wpautop('No Posts were Found'); ?>
<?php endif; ?>




