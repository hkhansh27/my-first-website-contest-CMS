<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="module-product-detail">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo('url');?>">Trang chủ</a>
					<span class="dot">/</span>
					<a href="<?php bloginfo('url');?>/san-pham">Sản phẩm</a>
					<span class="dot">/</span>
					<span class="name"><?php the_title(); ?></span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="block-product-slider">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6  left">
								 	<ul id="imageGallery">
									 <!-- <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?> -->
						                <li data-src="<?php  echo $image[0]; ?>">
						                	<div class="img-height">
							                	<img  class="img-fluid lh2-img" src="<?php  echo $image[0]; ?>"/>
							                	<div class="overlay">
							                		<a href="<?php  echo $image[0]; ?>" class="zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
							                	</div>
											</div>
										 </li>
					                </ul>
								</div>
								<?php
								$title = get_the_title();
								$getFiled = get_field('gia-sp');
								$thuongHieu = get_field('thuong-hieu');
								$soChoNgoi = get_field('so-cho-ngoi');
								?>
								<div class="col-md-6  col-sm-6 col-xs-6 right">
									<div class="border">
										<b class="name"><?php the_title(); ?></b>
										<p><b>Giá:</b> <?php if(get_field('gia-sp')) { ?> <?php the_field('gia-sp'); ?>
											 <?php } else { ?> Liên hệ </p> <?php } ?>
										<p><b>Số chỗ: </b> <?php the_field('so-cho-ngoi'); ?></p>
										<p><b>Thương hiệu:</b> <?php the_field('thuong-hieu'); ?></p>
										<p><b>Màu sắc:</b> <?php the_field('mau-sac'); ?></p>
										<p><b>Đời xe:</b> <?php the_field('doi-xe'); ?> </p>
									 	<button class="lh2-button lh-show-bk">Thuê ngay</a>
									</div>
								</div>
							</div>
						</div>
						<!-- end block-slider -->
						<div class="block-info-product-detail">
							<p class="title-other"><span>Thông tin chi tiết</span></p>
							<div class="box-content">
								<?php the_content(); ?>
							</div>
						</div>
						<!-- block-inffo -->
						<div class="block-product-other">
							<p class="title-other"><span>Xe liên quan</span></p>
							<div class="slider-product">
								<?php
								$terms = get_the_terms(get_the_ID(), 'product_cat');
								$curTerm = $terms[0]->slug;
						        if($curTerm){
									$args = array(
											'product_cat' => $curTerm,
											'post__not_in' => array(get_the_id()),
											'showposts' => 5,
											'caller_get_posts' =>1,
											'post_type' => 'product',
										);
									$my_query = new wp_query($args);
									if($my_query -> have_posts()){
										while($my_query -> have_posts()){
											$my_query -> the_post();?>
											<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
												<div class="item-product">
													<div class="bg">
														<div class="img-height">
															<a class="img" href="<?php the_permalink(); ?>">
																<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
															</a>
														</div>
														<div class="info-product">
															<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
															<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php if(get_field('gia-sp')) { ?> <?php the_field('gia-sp'); ?>
											 <?php } else { ?> Liên hệ </p> <?php } ?></p>
															<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b> <?php the_field('so-cho-ngoi'); ?></p>
															<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong-hieu'); ?></p>
														</div>
													</div>
												</div>
										<?php
										}
									}
								}
							?>
							</div>
							<button class="button-slider next"><i class="fas fa-chevron-right"></i></button>
							<button class="button-slider prev"><i class="fas fa-chevron-left"></i></button>
							</div>
						<!-- end block-product-other -->
					</div>
					<div class="col-lg-3 d-none d-lg-block">
						<?php get_sidebar(); ?>
					</div>
				</div>

			</div>
		</div>
		<div class="popup-overlay">

		</div>
		<div class="my-popup">
			<div class="popup-content">
				<button class="lh-close-2 exit"></button>
				<p class="title">Mua xe</p>
				<form action="">
					<div class="info-car">
						<p class="box-title">Thông tin xe</p>
						<div class="row">
							<div class="col-4">
								<img class="img-fluid" src="<?php  echo $image[0]; ?>" alt="">
							</div>
							<div class="col-8">
								<p> <b class="name"><?php echo $title; ?></b></p>
								<p class="price"> <b>Giá:</b> <?php if($getFiled) { ?> <?php echo $getFiled; ?>
											 <?php } else { ?> Liên hệ </p> <?php } ?></p>
								<p><b>Số chỗ: </b><?php echo $soChoNgoi; ?></p>
								<p><b>Thương hiệu:</b> <?php echo $thuongHieu; ?></p>
							</div>
						</div>
					</div>

					<?php $contact='[contact-form-7 id="201" title="Mua xe"]'?>
					<?php echo do_shortcode($contact);?>


					<!-- <p class="box-title">Thông tin khách hàng</p>
					<input type="" name="" placeholder="Họ và tên *">
					<div class="row">
						<div class="col-6">
							<input type="" name="" placeholder="Email *">
						</div>
						<div class="col-6">
							<input type="" name="" placeholder="Điện thoại *">
						</div>
					</div>
					<div class="text-	">
						<button class="lh2-button" type="">Mua xe ngay</button>
					</div> -->
				</form>
			</div>
		</div>
<?php endwhile; else : ?>
<?php endif; ?>
<?php get_footer(); ?>