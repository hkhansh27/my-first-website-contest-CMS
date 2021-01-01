<div class="box-cate">
    <p class="title-sidebar"><i class="fas fa-bars"></i>Dịch vụ thuê xe</p>
    <div class="box-border">
        <ul class="lh2-ul">
        <?php
        $args = array (
            'type' => 'product',
            'child_of' => 0,
            'parent' => 0,
            'hide_empty' => 1,
            'taxonomy' => 'product_cat',
            'number' => 5
        );
        $categories = get_categories($args);
        foreach($categories as $category) {?>
        <li><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><i class="fas fa-caret-right"></i><?php echo $category->name; ?></a></li>
        <?php } ?>
        </ul>
    </div>
</div>
<div class="box-contact">
    <p class="title-sidebar"><i class="fas fa-bars"></i>Hỗ trợ trực tuyến</p>
    <div class="box-border">
        <ul class="lh2-ul">
            <li>Hotline: 0382344159</li>
            <li>Email: khanh201011@gmail.com</li>
        </ul>
    </div>
</div>
<div class="box-hightlight-news">
    <p class="title-sidebar"><i class="fas fa-bars"></i>Tin nỗi bật</p>
    <div class="box-border">
    <?php
    $args = array(
        'post_status' =>'publish',
        'post_type' => 'post',
        'posts_per_page' => 5,
        'cat' => 1
        );
    ?>
    <?php $getposts = new WP_query($args); ?>
    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
    <?php while($getposts->have_posts()): $getposts->the_post(); ?>
    <div class="list-news">
            <a class="img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(100, 50)); ?></a>
            <div class="right-list">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <div class="lh2-date"><i class="fas fa-calendar-alt"></i> <?php echo get_the_date('d/m/Y'); ?></div>
            </div>
        </div>
    <?php endwhile;  ?>
    </div>
</div>