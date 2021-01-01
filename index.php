<?php get_header(); ?>

			<!-- end block-slider -->
	<?php get_template_part('slider'); ?>
		<!-- end lh-header -->
		<?php get_template_part('service'); ?>
		<!-- <div ></div> -->
		<div class="block-contact">
			<div class="container">
				<p class="lh2-title1">dỊCH VỤ CHO Bán xe DU LỊCH</p>
				<p class="caption">Cung cấp dịch vụ cho Bán xe tự lái, du lịch từ 4 đến 45 chỗ</p>
				<p class="bottom">Thủ tục nhanh gọn - Nhận xe nhanh chóng</p>
				<button class="lh3-button" type=""><span>Xem ngay</span></button>
			</div>
		</div>
		<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Porche</span></p>
				<div class="row">
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=product&product_cat=porsche'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
					<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="bg">
							<div>
								<a class="img" href="<?php the_permalink(); ?>">
									<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
								</a>
							</div>
							<div class="info-product">
								<a class="name" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
								<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia-sp'); ?></p>
								<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('so-cho-ngoi'); ?></p>
								<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong-hieu'); ?></p>
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Bentley</span></p>
				<div class="row">
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=product&product_cat=bentley'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
					<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="bg">
							<div>
								<a class="img" href="<?php the_permalink(); ?>">
									<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
								</a>
							</div>
							<div class="info-product">
								<a class="name" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
								<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia-sp'); ?></p>
								<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('so-cho-ngoi'); ?></p>
								<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong-hieu'); ?></p>
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		<!-- end block-product -->
		<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Mercedes-Benz</span></p>
				<div class="row">
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=product&product_cat=mercedes-benz'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
					<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="bg">
							<div>
								<a class="img" href="<?php the_permalink(); ?>">
									<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
								</a>
							</div>
							<div class="info-product">
								<a class="name" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
								<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia-sp'); ?></p>
								<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('so-cho-ngoi'); ?></p>
								<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong-hieu'); ?></p>
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>

		<!-- end block-product -->
	<?php get_footer(); ?>
