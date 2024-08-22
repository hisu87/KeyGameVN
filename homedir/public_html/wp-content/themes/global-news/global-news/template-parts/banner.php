<div class="banner">
    <img src="https://th.bing.com/th/id/OIP.iq5j7tKRCWRVNK8L2Af7PQHaEo?w=1200&h=751&rs=1&pid=ImgDetMain" alt="">
    <div class="banner__main">

        <div class="banner__top">
            <div class="banner__title">
                Our Newsroom
            </div>

            <div class="banner__search"><?php echo get_search_form() ?></div>

        </div>
        <?php $tags = get_tags(); ?>
        <div class="banner__tag">
            <div class="banner__tag-title">Popular Tags :</div>
            <div class="banner__tag-group">
                <?php foreach ($tags as $tag) {
                    $tag_link = get_tag_link($tag->term_id);
                    echo "<a class='banner__tag-item' href='$tag_link'>$tag->name</a>";
                } ?>
            </div>
        </div>
    </div>
</div>