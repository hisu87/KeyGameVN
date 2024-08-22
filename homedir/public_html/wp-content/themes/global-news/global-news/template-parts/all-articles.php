<div class="all">
    <div class="all__header">
        <div class="all__heading">All Articles</div>
        <div class="all__sub-heading">We share common trends, strategies ideas, opinions, short & long stories from the
            team behind company.</div>
    </div>

    <div class="all-one__group">
        <?php
        $args = array(
            'post_type' => 'post', // Thay đổi nếu cần thiết
            'posts_per_page' => 2, // Lấy 2 bài đăng
            'orderby' => 'rand', // Sắp xếp theo số lượng bình luận
            'order' => 'DESC', // Sắp xếp theo thứ tự giảm dần (nhiều nhất trước)
        );

        $query = new WP_Query($args);

        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();

                echo '

            <a href="' . get_permalink() . '" class="all-one__item">
                <div class="all-one__img">
                    <img src="' . get_the_post_thumbnail_url() . '" alt="">
                </div>
                <div class="all-one__mark"></div>
                <div class="all-one__main">
                    <div class="all-one__type">all-one</div>
                    <div class="all-one__content">
                        <div class="all-one__title">' . get_the_title() . '</div>
                        <div class="all-one__group">
                            <div class="all-one__info">
                                <div class="all-one__author">' . get_avatar(get_the_author_ID()) . '</div>
                                <div class="all-one__name">' . get_the_author() . '</div>
                            </div>

                            <div class="all-one__date">' . get_the_time('d - M') . '</div>
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

    <div class="all-two__group">
        <?php
        $args = array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'order' => 'DESC',
            'orderby' => 'rand'
        );

        $latest_post_query = new WP_Query($args);

        if ($latest_post_query->have_posts()) {
            while ($latest_post_query->have_posts()) {
                $latest_post_query->the_post();

                echo '<a href="' . get_permalink() . '" class="all-two__item">
        <div class="all-two__img">
            <img src="' . get_the_post_thumbnail_url() . '" alt="">
        </div>
        <div class="all-two__mark"></div>
       <div class="all-two__main">
         <div class="all-two__content">
             <div class="all-two__title">' . get_the_title() . '</div>
             <div class="all-two__desc">' . get_the_excerpt() . '</div>
             <div class="all-two__group">
                 <div class="all-two__info">
                     <div class="all-two__author">' . get_avatar(get_the_author_ID()) . '</div>
                     <div class="all-two__name">' . get_the_author() . '</div>
                 </div>
    
                 <div class="all-two__date">' . get_the_time('d - M') . '</div>
             </div>
         </div>
        </div>
    </a>';
            }
            wp_reset_postdata();
        }
        ?>

    </div>

    <div class="all__button"><a href="<?php echo get_post_type_archive_link('post'); ?>">
            <span>More articles</span>
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>