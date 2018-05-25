<?php \core\view('header', $params)->show(); ?>

	<!--/banner-->
	<div class="banner-inner">
	</div>
	<!--//banner-->
	<!--/nav-->
	<div class="header_top" id="home">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= ROOT_DIR?>">Главная
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= ROOT_DIR.'/about' ?>">О нас</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= ROOT_DIR?>">Меню</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= ROOT_DIR.'/blog' ?>">Блог</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						    aria-expanded="false">
                            Продукция
</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#"></a>
								<a class="dropdown-item" href="gallery.html"></a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="404.html">Services</a>
							</div>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="<?= ROOT_DIR.'/contact' ?>">Контакты</a>
					</li>

				</ul>
			</div>
		</nav>

	</div>
	<!--//nav-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active">Contact Us</li>
	</ol>
	<!--/main-->
	<section class="banner-bottom">

		<h3 class="tittle">Contact Us</h3>
		<p class="sub text-center">We love to discuss your idea</p>
		<div class="contact-map inner-sec">

			<iframe src="https://www.google.com/maps/place/Kyiv,+02000/@50.4021351,30.2518169,10z/data=!3m1!4b1!4m5!3m4!1s0x40d4cf4ee15a4505:0x764931d2170146fe!8m2!3d50.4501!4d30.5234"
			    class="map" style="border:0" allowfullscreen=""></iframe>
		</div>
		<div class="ad-inf-sec">
			<div class="container">
				<div class="address row">

					<div class="col-lg-4 address-grid" data-aos="zoom-in">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Address</h6>
								<p> California, USA</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid" data-aos="zoom-in">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:example@email.com"> mail@example.com</a>

								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid" data-aos="zoom-in">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Phone</h6>
								<p>+1 234 567 8901</p>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="contact_grid_right">
				<form action="#" method="post">
					<div class="row contact_left_grid">
						<div class="col-md-6 con-left">
							<div class="form-group" data-aos="fade-down">
								<label for="validationCustom01 my-2">Name</label>
								<input class="form-control" type="text" name="Name" placeholder="" required="">
							</div>
							<div class="form-group" data-aos="fade-down">
								<label for="exampleFormControlInput1">Email</label>
								<input class="form-control" type="email" name="Email" placeholder="" required="">
							</div>
							<div class="form-group" data-aos="fade-down">
								<label for="validationCustom03 my-2">Subject</label>
								<input class="form-control" type="text" name="Subject" placeholder="" required="">
							</div>
						</div>
						<div class="col-md-6 con-right">
							<div class="form-group" data-aos="fade-down">
								<label for="textarea">Message</label>
								<textarea id="textarea" placeholder=""></textarea>
							</div>
							<input class="form-control" type="submit" value="Submit">

						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!--//main-->

    <?php \core\view('footer', $params)->show(); ?>