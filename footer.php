<div class="block-partner">
			<div class="container">
				<div class="responsive">
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/1.png" alt="">
						</div>
					</div>
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/2.png" alt="">
						</div>
					</div>
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/3.png" alt="">
						</div>
					</div>
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/4.png" alt="">
						</div>
					</div>
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/5.png" alt="">
						</div>
					</div>
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/6.png" alt="">
						</div>
					</div>
					<div class="col-2 item-partner">
						<div class="bg">
							<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/1.png" alt="">
						</div>
					</div>
				</div>
				<button class="button-slider next"><i class="fas fa-chevron-right"></i></button>
				<button class="button-slider prev"><i class="fas fa-chevron-left"></i></button>
			</div>
		</div>
		<div class="footer-bg">
			<div class="block-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 col-12 item">
							<p class="title">GIỚI THIỆU</p>
							<p class="caption">ABC là công ty du lịch, với nhiều năm kinh nghiệm trong việc cung cấp dịch vụ về vận tải du lịch, tư vấn và lập kế hoạch đi...</p>
							<ul class="lh2-ul">
								<li><i class="fas fa-map-marker-alt"></i> KTX B, VNU-HCM</li>
								<li><i class="fas fa-phone"></i> 0382344159</li>
								<li><i class="fas fa-envelope"></i> Email: khanh201011@gmail.com</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-12 item">
							<p class="title">Hỗ trợ khách hàng</p>
							<?php wp_nav_menu(
									array(
										'theme_location' => 'footer-menu',
										'container' => 'false',
										'menu_id' => 'footer-menu',
										'menu_class' => 'lh2-ul'
									)
									); ?>
							<!-- <ul class="lh2-ul">
								<li><a href="">Liên hệ với chúng tôi</a></li>
								<li><a href="">Câu hỏi thường gặp</a></li>
								<li><a href="">Điều khoản và chính sách</a></li>
								<li><a href="">Chăm sóc khách hàng</a></li>
							</ul> -->
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-12 item">
							<p class="title">GỬI LIÊN HỆ</p>
							<p>Liên hệ ngay với chúng tôi để nhận được những ưu đãi mới nhất</p>
							<input type="" name="" placeholder="Nhập email của bạn">
							<button type="">Gửi</button>
							<p class="title">Kết nối</p>
							<ul class="lh2-ul share-h2">
								<li><a href="https://www.facebook.com/hkhansh27" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-skype"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="block-copyright">
				<div class="container">
					<p>Copyright © 2019 HKhansh Group. All Right Reserved.</p>
				</div>
			</div>
		</div>
		<a class="btn-top" id="bttop" href="javascript:void(0);" title="Top" style="display: inline;"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
	</div>
	<!-- Javascript -->
  	<script src="<?php bloginfo('template_directory'); ?>/js/tether.min.js"></script>
  	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
  	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
  	<script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
  	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mmenu.all.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/slick.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/smoothscroll.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/lightslider.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/lightGallery.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
	<?php wp_footer(); ?>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="KMnB99Mq"></script>
</body>
</html>