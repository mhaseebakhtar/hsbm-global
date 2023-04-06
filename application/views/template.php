<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<title>
		<?= (!empty($title)) ? $title : 'HSBM Global' ?>
	</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.css') . version ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') . version ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') . version ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') . version ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css') . version ?>">

	<!-- Stylesheet -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') . version ?>">
</head>

<body>
	<div class="wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bg-wrap">
						<div class="row">
							<div class="col-md-6 d-flex align-items-center">
								<p class="mb-0 phone pl-md-2">
									<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a>
									<a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
								</p>
							</div>
							<div class="col-md-6 d-flex justify-content-md-end">
								<div class="social-media">
									<p class="mb-0 d-flex">
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
										<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">HSBM Global</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item <?= $page == 'index' ? 'active' : '' ?>"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
					<li class="nav-item <?= $page == 'about-us' ? 'active' : '' ?>"><a href="<?= base_url('about-us') ?>" class="nav-link">About Us</a></li>
					<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="cases.html" class="nav-link">Case Study</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item <?= $page == 'contact-us' ? 'active' : '' ?>"><a href="<?= base_url('contact-us') ?>" class="nav-link">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<?php include 'main/' . $page . '.php'; ?>

	<footer class="footer">
		<div class="container-fluid px-lg-5">
			<div class="row">
				<div class="col-md-9 py-5">
					<div class="row">
						<div class="col-md-4 mb-md-0 mb-4">
							<h2 class="footer-heading">About us</h2>
							<p>Expert Accounting and Tax Consulting Services for Businesses and Individuals</p>
							<ul class="ftco-footer-social p-0">
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
							</ul>
						</div>
						<div class="col-md-8">
							<div class="row justify-content-center">
								<div class="col-md-12 col-lg-10">
									<div class="row">
										<div class="col-md-4 mb-md-0 mb-4">
											<h2 class="footer-heading">Services</h2>
											<ul class="list-unstyled">
												<li><a href="#" class="py-1 d-block">Market Analysis</a></li>
												<li><a href="#" class="py-1 d-block">Accounting Advisor</a></li>
												<li><a href="#" class="py-1 d-block">General Consultancy</a></li>
												<li><a href="#" class="py-1 d-block">Structured Assestment</a></li>
											</ul>
										</div>
										<div class="col-md-4 mb-md-0 mb-4">
											<h2 class="footer-heading">Discover</h2>
											<ul class="list-unstyled">
												<li><a href="<?= base_url('about-us') ?>" class="py-1 d-block">About Us</a></li>
												<li><a href="<?= base_url('contact-us') ?>" class="py-1 d-block">Contact Us</a></li>
												<li><a href="#" class="py-1 d-block">Terms &amp; Conditions</a></li>
												<li><a href="#" class="py-1 d-block">Policies</a></li>
											</ul>
										</div>
										<div class="col-md-4 mb-md-0 mb-4">
											<h2 class="footer-heading">Resources</h2>
											<ul class="list-unstyled">
												<li><a href="#" class="py-1 d-block">Security</a></li>
												<li><a href="#" class="py-1 d-block">Global</a></li>
												<li><a href="#" class="py-1 d-block">Charts</a></li>
												<li><a href="#" class="py-1 d-block">Privacy</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-md-5">
						<div class="col-md-12">
							<p class="copyright">
								Copyright &copy;
								<script>document.write(new Date().getFullYear());</script> All rights reserved
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
					<h2 class="footer-heading">Free consultation</h2>
					<form action="#" class="form-consultation">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control submit px-3">Send A Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</footer>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#FF0000" />
		</svg>
	</div>

	<!-- Plugins -->
	<script src="<?= base_url('assets/js/jquery.min.js') . version ?>"></script>
	<script src="<?= base_url('assets/js/jquery-migrate-3.0.1.min.js') . version ?>"></script>
	<script src="<?= base_url('assets/js/popper.min.js') . version ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') . version ?>"></script>
	<script src="<?= base_url('assets/js/jquery.easing.1.3.js') . version ?>"></script>
	<script src="<?= base_url('assets/js/jquery.waypoints.min.js') . version ?>"></script>
	<script src="<?= base_url('assets/js/jquery.stellar.min.js') . version ?>"></script>
	<script src="<?= base_url('assets/js/jquery.animateNumber.min.js') . version ?>"></script>
	<script src="<?= base_url('assets/js/owl.carousel.min.js') . version ?>"></script>
	<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') . version ?>"></script>
	<script src="<?= base_url('assets/js/scrollax.min.js') . version ?>"></script>

	<!-- Scripts -->
	<script src="<?= base_url('assets/js/main.js') . version ?>"></script>
</body>

</html>