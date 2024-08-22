<div class="recent__header">
    <div class="recent__right">
        <div class="recent__heading">recent Articles</div>
        <div class="recent__sub-heading">Here’s what we've been up to recently.</div>
    </div>
    <div class="recent__left">
        <a href="<?php echo get_post_type_archive_link('post'); ?>" class="recent__button">
            <span>View all</span>
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

<div class="recent">

    <?php
    $args = array(
        'post_type' => 'post', // Thay đổi nếu cần thiết
        'posts_per_page' => 3, // Lấy 2 bài đăng
        'orderby' => 'comment_count', // Sắp xếp theo số lượng bình luận
        'order' => 'DESC', // Sắp xếp theo thứ tự giảm dần (nhiều nhất trước)
    );

    $query = new WP_Query($args);
    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post();

            echo '
    <a href="' . get_permalink() . '" class="recent__item">
        <div class="recent__img">
            <img src="' . get_the_post_thumbnail_url() . '" alt="">
        </div>
        <div class="recent__mark"></div>
       <div class="recent__main">
         <div class="recent__content">
             <div class="recent__title">' . get_the_title() . '</div>
             <div class="recent__desc">' . get_the_excerpt() . '</div>
             <div class="recent__group">
                 <div class="recent__info">
                     <div class="recent__author">' . get_avatar(get_the_author_ID()) . '</div>
                     <div class="recent__name">' . get_the_author() . '</div>
                 </div>
    
                 <div class="recent__date">' . get_the_time('d - M') . '</div>
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