<div class="block-intro">
    <div class="container">
        <p class="lh2-title1">VỀ CHÚNG TÔI</p>
        <p class="lh2-caption">là công ty du lịch, với nhiều năm kinh nghiệm trong việc cung cấp dịch vụ về vận tải du lịch, tư vấn và lập kế hoạch đi du lịch tới các điểm đến nổi tiếng. Chúng tôi có một mạng lưới liên kết lữ hành rộng và cung cấp các dịch vụ hỗ trợ lập kế hoạch...</p>
        <div class="row">

        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=service'); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
             <div class="col-lg-4 item-intro">
                <div class="img-height">
                    <img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="item-info">
                    <p style="font-weight: bold;"><?php the_title(); ?></p>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>

