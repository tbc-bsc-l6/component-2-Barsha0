<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	{{-- <link rel="icon" href="img/favicon.png" type="image/png"> --}}
	<title>TheJournal</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

</head>

<body>
    <header class="header_area">
        @include('home.header')
    </header>

	<!--================ Home Banner Area =================-->
    @include('home.banner')
    <!--================ End Home Banner Area =================-->


	<!--================ Latest Blog Area =================-->
	@include('home.latestpost')
	<!--================ End Latest Blog Area =================-->

	<!--================ Places Area =================-->
	<section class="different_places">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Let Us Find Your Places Within a Sec.</h1>
						<p>
							There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
							exciting to think
							about setting up your own viewing station.
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single_place wow fadeIn text-center mt-480" data-wow-duration="1s">
						<img class="img-fluid w-100" src="img/places/p1.jpg" alt="">
						<div class="overlay"></div>
						<h4>Waterfall
							<br> Mountain Island</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_place wow fadeIn text-center mt-240" data-wow-duration="1s" data-wow-delay=".2s">
						<img class="img-fluid w-100" src="img/places/p2.jpg" alt="">
						<div class="overlay"></div>
						<h4>Waterfall
							<br> Mountain Island</h4>
					</div>
					<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="1s">
						<img class="img-fluid w-100" src="img/places/p3.jpg" alt="">
						<div class="overlay"></div>
						<h4>Waterfall
							<br> Mountain Island</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay=".4s">
						<img class="img-fluid w-100" src="img/places/p4.jpg" alt="">
						<div class="overlay"></div>
						<h4>Waterfall
							<br> Mountain Island</h4>
					</div>
					<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay=".8s">
						<img class="img-fluid w-100" src="img/places/p5.jpg" alt="">
						<div class="overlay"></div>
						<h4>Waterfall
							<br> Mountain Island</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_place wow fadeIn text-center mt-240" data-wow-duration="1s" data-wow-delay=".6s">
						<img class="img-fluid w-100" src="img/places/p6.jpg" alt="">
						<div class="overlay"></div>
						<h4>Waterfall
							<br> Mountain Island</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Places Area =================-->

	<!--================ Popular Post Area =================-->
	<section class="popular_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Popular <br> Posts to Remember</h1>
						<p>
							There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
							exciting to think
							about setting up your own viewing station.
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p1.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p2.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p3.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p4.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p5.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p6.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p7.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p8.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-popular-post d-flex align-items-center flex-row">
						<div class="icon">
							<img src="img/popular-post/p9.jpg" alt="">
						</div>
						<div class="desc">
							<h4>
								<a href="#">Waterfall Mountain Visit</a>
							</h4>
							<div class="blog-meta d-flex justify-content-between align-items-center flex-wrap">
								<div class="meta">
									<a href="#">
										<span class="icon fa fa-calendar"></span> March 14, 2018
										<span class="icon fa fa-comments"></span> 05
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Popular Post Area =================-->

	<!--================ start footer Area  =================-->
	<footer class="footer-area section-gap">
		@include('home.footer')
	</footer>
	<!--================ End footer Area  =================-->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="fa fa-angle-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/theme.js"></script>
</body>

</html>
