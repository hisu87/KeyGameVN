<?php
$args = array(
    'posts_per_page' => 4,
    'post_type' => 'post',
    'order' => 'DESC',
    'orderby' => 'rand'
);

$latest_post_query = new WP_Query($args);


?>
<div class="studies__container">
    <div class="studies__header">
        <div class="studies__heading">Case Studies</div>
        <div class="studies__sub-heading">Here’s what we've been up to recently.</div>
    </div>
    <div class="studies__prev"><i class="bi bi-arrow-left-short"></i></div>
    <div class="studies__next"><i class="bi bi-arrow-right-short"></i></div>
    <div class="studies__slider">
        <div class="studies">
           
            <?php
            if ($latest_post_query->have_posts()) {
                while ($latest_post_query->have_posts()) {
                    $latest_post_query->the_post();

                    echo '<div class="studies__item">>';
                    echo ' <div class="studies__image"><img src="' . get_the_post_thumbnail_url() . '" alt=""></div>';
                    echo ' <div class="studies__content">';
                    echo ' <div class="studies__new">New</div>';
                    echo ' <a class="studies__title" href="' . get_permalink() . '"">' . get_the_title() . '</a>';
                    echo ' <div class="studies__desc">' . get_the_excerpt() . '</div>';

                    echo ' <div class="studies__author">';
                    echo ' <div class="studies__img">';
                    echo ' <div class="studies__avt">' . get_avatar(get_the_author_ID()) . '</div>';
                    echo ' <div class="studies__name">' . get_the_author() . '</div>';
                    echo ' </div>';
                    echo ' <div class="studies__date">' . get_the_time('d - M') . '</div>';
                    echo ' </div>';
                    echo ' </div>';
                    echo ' </div>';
                }
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
</div>