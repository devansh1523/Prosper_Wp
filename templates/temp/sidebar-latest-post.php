<?php

/**
 * 
 * 
 */

$paged = get_query_var('paged') ? get_query_var('paged'):1;

$args = array(
    'post_type'=>'post',
    'posts_per_page' => 4,
    'paged'=>$paged
);

$loop = new Wp_Query($args);
?>

<?php if($loop->have_posts()) : ?>
<?php while ($loop->have_posts()) : $loop->the_posts; ?>

<article class="new-post">
    <div class="row">
        <!--two columns-->
        <div class="col-2-lg post-image">
            <!-- <img src="./assets/images/Featured_image/01.jpg" alt="latest post" class="fluid">-->
            <?php
            if(has_post_thumbnail()): ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Post Image" class="fluid">
            <?php endif; ?>
        </div>
        <div class="col-8-lg post-title">
            <div class="cat">
                <!--<a href="#" class="text-sm text-cream category">People</a>
                <a href="#" class="text-sm text-cream category">Travel</a>-->
                <?php 
                 $categories = get_the_category();
                 if(!empty($categories)){
                    foreach($categories as $category){
                        printf('<a href="%1$s" class="text-sm text-cream category">%2$s </a>',
                        esc_url(get_category_link($category->term_id)),
                        esc_html($category->name));
                    }
                 }
                ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="text-sm text-dark"><?php echo the_title(); ?></a>
        </div>
    </div>
</article>

<?php endwhile; ?>
<?php else : ?>
<?php echo wpautop('No Posts were found'); ?>
<?php endif; ?>

<?php
    wp_reset_query();
    wp_reset_postdata();
?>