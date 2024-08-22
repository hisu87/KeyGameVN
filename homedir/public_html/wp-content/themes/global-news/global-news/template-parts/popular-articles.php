<div class="popular__header">
    <div class="popular__right">
        <div class="popular__heading">Popular Articles</div>
        <div class="popular__sub-heading">We share common trends, strategies ideas, opinions, short & long stories
            from the team behind company.</div>
    </div>
    <div class="popular__left">
        <a href="<?php echo get_post_type_archive_link( 'post' );?>" class="popular__button">
            <span>View all</span>
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

<div class="popular">

    <?php
    $args = array(
        'post_type' => 'post', // Thay đổi nếu cần thiết
        'posts_per_page' => 2, // Lấy 2 bài đăng
        'orderby' => 'comment_count', // Sắp xếp theo số lượng bình luận
        'order' => 'DESC', // Sắp xếp theo thứ tự giảm dần (nhiều nhất trước)
    );

    $query = new WP_Query($args);

    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post();

            echo '
    <a href="' . get_permalink() . '" class="popular__item">
        <div class="popular__img">
            <img src="' . get_the_post_thumbnail_url() . '" alt="">
        </div>
        <div class="popular__mark"></div>
       <div class="popular__main">
         <div class="popular__type">POPULAR</div>
         <div class="popular__content">
             <div class="popular__title">' . get_the_title() . '</div>
             <div class="popular__group">
                 <div class="popular__info">
                     <div class="popular__author">' . get_avatar(get_the_author_ID()) . '</div>
                     <div class="popular__name">' . get_the_author() . '</div>
                 </div>
    
                 <div class="popular__date">' . get_the_time('d - M') . '</div>
             </div>
         </div>
        </div>
    </a>';
            // Hiển thị tiêu đề bài đăng, nội dung tóm tắt, v.v.
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>