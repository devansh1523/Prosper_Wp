<?php

/**
 *  Theme Name: Add Categories
 * 
 */

//Categories list
$categories = get_categories(array(
    'orderby' => 'name',
    'parent' => 0
));


foreach($categories as $category){
    printf('<a href="%1$s" class="link"><span>%2$s</span></a>',
    esc_url(get_category_link($category->term_id)),
    esc_html($category->name));
}


?>

<!--<a href="" class="link">
    <span>All</span>
</a>
<a href="" class="link">
    <span>Commercial</span>
</a>
<a href="" class="link">
    <span>Natural</span>
</a>
<a href="" class="link">
    <span>People</span>
</a>
<a href="" class="link">
    <span>Photography</span>
</a>
<a href="" class="link">
    <span>Travel</span>
</a>
<a href="" class="link">
    <span>Uncategorized</span>
</a>-->