<?php

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'order' => 'DESC',
    'posts_per_page' => 6,
    'date_query' => array(
        'after' => '-30 days',
        'column' => 'post_date'
    ),
    'paged' => $paged
);

$loop = new Wp_Query($args);


?>

<?php $count = 1; ?>
<?php if($loop->have_posts()): ?>
<?php while($loop->have_posts()): $loop->the_posts() ?>

    <?php if($count%2): ?>
<div class="column">
    <div class="post-image">
        <?php if(has_post_thumbnail()): ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="footer image" class="fluid">
        <?php endif; ?>
    </div>
    <?php else: ?>
    <div class="post-image">
        <?php if(has_post_thumbnail()): ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="footer image" class="fluid">
        <?php endif; ?>
    </div>
</div>

    <?php endif; ?>
    <?php $count++; ?>


<?php endwhile; ?>
<?php endif; ?>


<?php
    wp_reset_query();
    wp_reset_postdata();
?>


<!--<div class="column">
    <div class="post-image">
        <img src="./assets/images/Featured_image/01.jpg" alt="footer image" class="fluid">
    </div>
    <div class="post-image">
        <img src="./assets/images/Featured_image/02.jpg" alt="footer image" class="fluid">
    </div>
</div>
<div class="column">
    <div class="post-image">
        <img src="./assets/images/Featured_image/07.jpg" alt="footer image" class="fluid">
    </div>
    <div class="post-image">
        <img src="./assets/images/Featured_image/03.jpg" alt="footer image" class="fluid">
    </div>
</div>
<div class="column">
    <div class="post-image">
        <img src="./assets/images/Featured_image/06.jpg" alt="footer image" class="fluid">
    </div>
    <div class="post-image">
        <img src="./assets/images/Featured_image/08.jpg" alt="footer image" class="fluid">
    </div>
</div>-->