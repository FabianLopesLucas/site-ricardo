<!DOCTYPE html>
<html>
<?php include './partials/head.php'?>

<body>

<div class="page-wrapper">
	
	<!-- Cursor -->
	<div class="cursor"></div>
	<div class="cursor-follower"></div>
	<!-- Cursor End -->
 	
	<!-- Preloader -->
	<div class="loader-wrap">
		<div class="preloader">
			<div class="preloader-close">x</div>
			<div id="handle-preloader" class="handle-preloader">
				<div class="animation-preloader">
					<div class="txt-loading">
						<span data-text-preloader="L" class="letters-loading">L</span>
						<span data-text-preloader="O" class="letters-loading">O</span>
						<span data-text-preloader="A" class="letters-loading">A</span>
						<span data-text-preloader="D" class="letters-loading">D</span>
						<span data-text-preloader="I" class="letters-loading">I</span>
						<span data-text-preloader="N" class="letters-loading">N</span>
						<span data-text-preloader="G" class="letters-loading">G</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Preloader End -->
	
	<!-- Main Header -->
	<?php include './partials/menu.php'?>
	<!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title">
		<div class="page-title-icon" style="background-image:url(assets/images/icons/page-title_icon-1.png)"></div>
		<div class="page-title-icon-two" style="background-image:url(assets/images/icons/page-title_icon-2.png)"></div>
		<div class="page-title-shadow" style="background-image:url(assets/images/background/page-title-1.png)"></div>
		<div class="page-title-shadow_two" style="background-image:url(assets/images/background/page-title-2.png)"></div>
        <div class="auto-container">
			<h2>Contact Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Contact Info -->
	<section class="contact-info">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Info Block One -->
				<div class="info-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="icon-phone"></i>
						</div>
						<h4>Call us on</h4>
						<a href="tel:+415-864-8728">+415-864-8728</a> <br>
						<a href="tel:+415-864-8729">+415-864-8729</a>
					</div>
				</div>

				<!-- Info Block One -->
				<div class="info-block_one active col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="icon-envelope"></i>
						</div>
						<h4>Email us</h4>
						<a href="mailto:">support@braine.com</a> <br>
						<a href="mailto:">contact@braine.com</a>
					</div>
				</div>

				<!-- Info Block One -->
				<div class="info-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="icon-map"></i>
						</div>
						<h4>Our location</h4>
						<div class="text">1426 Center StreetBend, OR <br> 97702, California, USA</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Faq One -->

	<!-- Team Detail Form -->
	<section class="team-detail_form">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<!-- Sec Title -->
					<div class="sec-title style-four">
						<div class="sec-title_title">Contact me</div>
						<h2 class="sec-title_heading">Connect with us for <span>assistance</span></h2>
						<div class="sec-title_text">Lorem ipsum dolor sit amet consectetur adipiscing <br> elit Ut et massa Aliquam in hendrerit urna.</div>
					</div>
					<!-- Social Box -->
					<div class="contact-social_box">
						<a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
						<a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
						<a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<div class="default-form contact-form">
						<form method="post" action="sendemail.php" id="contact-form">
							<div class="row clearfix">
								<!--Form Group-->
								<div class="form-group col-lg-6 col-md-6 col-sm-6">
									<input type="text" name="name" value="" placeholder="Name" required>
								</div>
								<!--Form Group-->
								<div class="form-group col-lg-6 col-md-6 col-sm-6">
									<input type="email" name="email" value="" placeholder="Email" required>
								</div>
								<div class="form-group col-lg-6 col-md-6 col-sm-6">
									<input type="text" name="phone" value="" placeholder="Phone" required>
								</div>
								<!--Form Group-->
								<div class="form-group col-lg-6 col-md-6 col-sm-6">
									<select name="country" class="custom-select-box">
										<option>Select service</option>
										<option>Service 01</option>
										<option>Service 02</option>
										<option>Service 03</option>
									</select>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<textarea class="" name="message" placeholder="Type comment here*"></textarea>
								</div>
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<button type="button" class="template-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Send now</span>
											<span class="text-two">Send now</span>
										</span>
									</button>
								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Detail Form -->

	<!-- Map One -->
	<section class="map-one">
		<div class="auto-container">
			<div class="map-one_map">
				<iframe width="820" height="560" id="gmap_canvas" src="https://maps.google.com/maps?q=636+5th+Ave%2C+New+York&t=&z=18&ie=UTF8&iwloc=&output=embed"></iframe>
			</div>
		</div>
	</section>
	<!-- End Map One -->

	<!-- CTA One -->
	<section class="cta-one style-two">
		<div class="cta-one_shadow" style="background-image:url(assets/images/background/cta-shadow.png)"></div>
		<div class="auto-container">
			<div class="inner-container">
				<div class="cta-icon_one" style="background-image:url(assets/images/icons/cta-icon-1.png)"></div>
				<div class="cta-icon_two" style="background-image:url(assets/images/icons/cta-icon-2.png)"></div>
				<div class="cta-one_card">
					<img src="assets/images/icons/cta-card.png" alt="" />
				</div>
				<div class="row clearfix">
					<!-- Column -->
					<div class="cta-one_title-column col-lg-6 col-md-12 col-sm-12">
						<div class="cta-one_title-outer">
							<h2 class="cta-one_title">Craft your next great <span>content now.</span></h2>
							<div class="cta-one_button">
								<a href="about.html" class="template-btn btn-style-three">
									<span class="btn-wrap">
										<span class="text-one">Get started free</span>
										<span class="text-two">Get started free</span>
									</span>
								</a>
							</div>
						</div>
					</div>
					<!-- Column -->
					<div class="cta-one_image-column col-lg-6 col-md-12 col-sm-12">
						<div class="cta-one_image-outer">
							<div class="cta-one_cards">
								<img src="assets/images/icons/cta-cards.png" alt="" />
							</div>
							<div class="image">
								<img src="assets/images/resource/cta.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->

	<!-- Main Footer -->
	<?php include './partials/footer.php'?>

</div>
<!-- End PageWrapper -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/backtotop.js"></script>
<script src="assets/js/odometer.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/ScrollToPlugin.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>

<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/element-in-view.js"></script>
<script src="assets/js/validate.js"></script>
<script src="assets/js/script.js"></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>
</html>