<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<meta name="description" content="Expert Accounting and Tax Consulting Services for Businesses and Individuals">
	<meta name="keywords" content="accounting, tax, blog, book-keeping, bookkeeping, payroll processing, tax preparation, financial reporting, budgeting, tax compliance, tax Controversy, tax, planning, international tax csonsulting, economic substance regulations, uae, uae vat, uae ct">
	<meta name="author" content="HSBM Global">

	<title>
		<?= (!empty($title)) ? $title : 'HSBM Global' ?>
	</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link rel="preload" as="font" type="font/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.css') . version ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') . version ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') . version ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') . version ?>">
	<link rel="preload" as="font" type="font/css" href="<?= base_url('assets/css/flaticon.css') . version ?>">
	<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4@5.0.15/bootstrap-4.min.css" rel="stylesheet">

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
	
					<li class="nav-item <?= $page == 'services' ? 'active' : '' ?> dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Services</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?= base_url('services') ?>">Services</a>
							<a class="dropdown-item" href="<?= base_url('services/united-arab-emirates') ?>">United Arab Emirates</a>
							<a class="dropdown-item" href="<?= base_url('services/economic-substance-regulations') ?>">Economic Substance Regulations</a>
						</div>
					</li>
	
					<li class="nav-item <?= $page == 'our-team' ? 'active' : '' ?>"><a href="<?= base_url('our-team') ?>" class="nav-link">Our Team</a></li>
					<li class="nav-item <?= $page == 'blogs' ? 'active' : '' ?>"><a href="<?= base_url('blogs') ?>" class="nav-link">Blogs</a></li>
					<li class="nav-item <?= $page == 'about-us' ? 'active' : '' ?>"><a href="<?= base_url('about-us') ?>" class="nav-link">About Us</a></li>
					<li class="nav-item <?= $page == 'contact-us' ? 'active' : '' ?>"><a href="<?= base_url('contact-us') ?>" class="nav-link">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<?php include 'main/' . $page . '.php'; ?>

	<section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
		<div class="container py-5">
			<div class="row">
				<div class="col-md-7 d-flex align-items-center">
					<h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;">Sign Up for Your Free 1st Accounting Consultation</h2>
				</div>
				<div class="col-md-5 d-flex align-items-center">
					<form method="post" class="subscribe-form" data-action="<?= base_url('ajax/subscribe') ?>">
						<div class="form-group d-flex">
							<input type="text" name="email" id="semail" class="form-control" placeholder="Enter email address">
							<input type="submit" name="submit" value="Subscribe" class="submit px-3">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

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
												<li><a href="<?= base_url('services') ?>#accounting" class="py-1 d-block">Accounting &amp; Book-Keeping</a></li>
												<li><a href="<?= base_url('services') ?>#compliance" class="py-1 d-block">Tax Compliance</a></li>
												<li><a href="<?= base_url('services') ?>#controversy" class="py-1 d-block">Tax Controversy</a></li>
												<li><a href="<?= base_url('services') ?>#planning" class="py-1 d-block">Tax Planning</a></li>
												<li><a href="<?= base_url('services') ?>#consulting" class="py-1 d-block">International Tax Consulting</a></li>
											</ul>
										</div>
										<div class="col-md-4 mb-md-0 mb-4">
											<h2 class="footer-heading">Discover</h2>
											<ul class="list-unstyled">
												<li><a href="<?= base_url('services') ?>" class="py-1 d-block">Our Services</a></li>
												<li><a href="<?= base_url('blogs') ?>" class="py-1 d-block">Blogs</a></li>
												<li><a href="<?= base_url('about-us') ?>" class="py-1 d-block">About Us</a></li>
												<li><a href="<?= base_url('contact-us') ?>" class="py-1 d-block">Contact Us</a></li>
											</ul>
										</div>
										<div class="col-md-4 mb-md-0 mb-4">
											<h2 class="footer-heading">RESOURCES</h2>
											<ul class="list-unstyled">
												<li><a href="<?= base_url('privacy') ?>" class="py-1 d-block">Privacy</a></li>
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
								Copyright &copy; <?= date('Y') ?> All rights reserved
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
					<h2 class="footer-heading">Free consultation</h2>
					<form method="post" class="form-consultation" data-action="<?= base_url('ajax/contact') ?>">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name" name="name" id="fname" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Your Email" name="email" id="femail" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject" name="subject" id="fsubject" required>
						</div>
						<div class="form-group">
							<textarea cols="30" rows="3" class="form-control" placeholder="Message" name="message" id="fmessage" required></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Send A Message" class="form-control submit px-3">
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

	<script>
		jQuery.event.special.touchstart = {
			setup: function( _, ns, handle ) {
				this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
			}
		};

		jQuery.event.special.touchmove = {
			setup: function( _, ns, handle ) {
				this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
			}
		};

		jQuery.event.special.wheel = {
			setup: function( _, ns, handle ){
				this.addEventListener("wheel", handle, { passive: true });
			}
		};

		jQuery.event.special.mousewheel = {
			setup: function( _, ns, handle ){
				this.addEventListener("mousewheel", handle, { passive: true });
			}
		};
	</script>

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

	<script src="<?= base_url('assets/js/jquery.form.min.js') . version ?>"></script>
	<script src="<?= base_url('assets/js/jquery.validate.min.js') . version ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

	<!-- Scripts -->
	<script src="<?= base_url('assets/js/main.js') . version ?>"></script>

	<script>
		$(function () {
			validateAndSubmit(".contact-us");
			validateAndSubmit(".form-consultation");
			validateAndSubmit(".subscribe-form");

			$.each($('.blog-section img'), function (ind, el) {
				if (!$(el).hasClass('img-fluid')) {
					$(el).addClass('img-fluid');
				}
			}) 
		});

		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
	</script>
</body>

</html>