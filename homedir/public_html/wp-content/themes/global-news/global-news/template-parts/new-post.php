<?php
$args = array(
    'posts_per_page' => 1,
    'post_type' => 'post',
    'order' => 'DESC',
    'orderby' => 'date'
);

$latest_post_query = new WP_Query($args);

?>
<div class="new-post">
    <?php
    if ($latest_post_query->have_posts()) {
        while ($latest_post_query->have_posts()) {
            $latest_post_query->the_post();

            echo ' <div class="new-post__image"><img src="' . get_the_post_thumbnail_url() . '" alt=""></div>';
            echo ' <div class="new-post__content">';
            echo ' <div class="new-post__new">New</div>';
            echo ' <a class="new-post__title" href="' . get_permalink() . '"">' . get_the_title() . '</a>';
            echo ' <div class="new-post__desc">' . get_the_excerpt() . '</div>';

            echo ' <div class="new-post__author">';
            echo ' <div class="new-post__img">';
            echo ' <div class="new-post__avt">' . get_avatar(get_the_author_ID()) . '</div>';
            echo ' <div class="new-post__name">' . get_the_author() . '</div>';
            echo ' </div>';
            echo ' <div class="new-post__date">' . get_the_time('d - M') . '</div>';
            echo ' </div>';
            echo ' </div>';
        }
        wp_reset_postdata();
    }
    ?>
</div>