<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
		<div class="module-news-detail">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo('url');?>">Trang chủ</a>
					<span class="dot">/</span>
					<a href="<?php bloginfo('url');?>/tin-tuc">Tin tức</a>
					<span class="dot">/</span>
					<span class="name"><?php the_title(); ?></span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="border">
							<p class="lh2-title1"><?php the_title(); ?></p>
							<div class="lh2-date"><i class="fas fa-calendar-alt"></i> Ngày đăng: <?php echo get_the_date('d/m/Y'); ?></div>
							<?php the_content(); ?>
							<div class="comment-facebook">
							<div class="fb-comments" data-href="<?php the_permalink();?>" data-width="100%" data-numposts="5"></div>
							</div>
							<div class="mau2-share-7ncn">
								<span>Chia sẻ: </span>
								<a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="" target="_blank"><i class="fab fa-google-plus-g"></i></a>
								<a href="" target="_blank"><i class="fab fa-skype"></i></a>
								<?php the_tags(', '); ?>
							</div>
							<div class="mau2-other">
								<?php
								$categories = get_the_category($post->ID);
								if($categories){
									$categories_ids = array();
									foreach($categories as $individual_category) $category_ids[] = $individual_category -> term_id;
									$args = array(
										'category__in' => $categories_ids,
										'post__not_in' => array($post->ID),
										'showposts' => 5,
										'caller_get_posts' =>1
									);
								$my_query = new wp_query($args);
								if($my_query -> have_posts()){
									echo '<p class="title-other">Bài viết liên quan</p><ul>';
									while($my_query -> have_posts()){
										$my_query -> the_post();
										?>
										<li><a href="<?php the_permalink();?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><?php the_title();?></a></li>
									<?php
									}
									echo '</ul>';
								}
							}
							?>
							</div>
						</div>
					</div>
					<div class="col-lg-3 d-none d-lg-block">
						<?php get_sidebar(); ?>
					</div>
					</div>
				</div>

			</div>
		</div>
<?php endwhile; else : ?>
<?php endif; ?>
<?php get_footer(); ?>