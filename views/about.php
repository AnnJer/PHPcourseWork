<?php \core\view('header', $params)->show(); ?>

<!--/banner-->


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
					<li class="nav-item active">
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
								<a class="dropdown-item" href="gallery.html">Gallery</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="404.html">Services</a>
							</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= ROOT_DIR.'/contact' ?>">Контакты</a>
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
		<li class="breadcrumb-item active">About</li>
	</ol>
	<!--/main-->
	<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">О нас</h3>
			<div class="row inner-sec">
				<div class="col-lg-6 about-img" data-aos="flip-right">
					<img src="images/ab.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 about-info text-left" data-aos="flip-left" >
					<h4 class="sub-hd mb-4">Лучшие среди других</h4>
					<p>Мы кондитерская 'Baked', готовим капкейки и другие разнообразные десерты
                        на заказ. Вся наша продукция обладает изысканным нежным вкусом,
                        характерным для тортов и пирожных премиум класса ручной работы.
                        Философия кондитерской  - быть лучшими, создавая как традиционные
                        сладости по оригинальным рецептам, так и новаторские десерты
                        приготовленные по авторским рецептам.</p>
					<p class="sup-para mt-2">Неотъемлемой частью философии является
                        безупречный внешний вид наших работ. В тайных мастерских
                        компании 'Baked' трудится дружная команда кондитеров, которые
                        являются настоящими волшебниками кулинарного искусства.</p>
					<div class="view my-4">
						<a href="single.html" class="btn btn-primary read-m">View More</a>
					</div>

					<img src="images/banner3.jpg" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section>
	<!--/seller-->
	<section class="grid-info-section">
		<div class="container">
			<h3 class="tittle">Best Seller</h3>
            <div class="row inner-sec">
                <ul id="flexiselDemo1">
                    <?php foreach ($params['bestSeller'] as $cake) { ?>
                        <li>
                            <div class="blog-item text-center">
                                <img src="<?= \core\Linker::linkImage($cake['img']) ?>" alt=" " class="img-fluid rounded-circle" />
                                <div class="floods-text">
                                    <h3><?= $cake['name'] ?></h3>

                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
		</div>
	</section>
	<!--//seller-->
	<section class="banner-bottom">
		<div class="container-fluid">
			<h3 class="tittle">Our Experts</h3>
			<div class="row inner-sec team-sec">
				<div class="col-md-6 team-main">
					<div class="row">

						<div class="col-md-5 team-img" data-aos="flip-right">
								<img src="images/team1.jpg" alt=" " class="img-fluid" />
						</div>
						<div class="col-md-7 team-info text-left" data-aos="flip-left">
								<h4>Angelica </h4>
								<h6>Malted wheat flake bread</h6>
								<p>Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor </p>
								<div class="row  pt-3 mt-3 team-social border-top">
									<h5 class="col-md-4 text-left">Contact</h5>
									<ul class="col-md-8 social_list1 text-right">

										<li>
											<a href="#" class="facebook1 ">
												<i class="fab fa-facebook-f"></i>

											</a>
										</li>
										<li>
											<a href="#" class="twitter2 mx-2">
												<i class="fab fa-twitter"></i>

											</a>
										</li>
										<li>
											<a href="#" class="dribble3">
												<i class="fab fa-dribbble"></i>
											</a>
										</li>

									</ul>
								</div>
						</div>
					</div>

				</div>
				<div class="col-md-6 team-main">
						<div class="row">

							<div class="col-md-5 team-img" data-aos="flip-right">
									<img src="images/team2.jpg" alt=" " class="img-fluid" />
							</div>
							<div class="col-md-7 team-info text-left" data-aos="flip-left">
									<h4>Angelica </h4>
									<h6>Malted wheat flake bread</h6>
									<p>Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor </p>
									<div class="row  pt-3 mt-3 team-social border-top">
										<h5 class="col-md-4 text-left">Contact</h5>
										<ul class="col-md-8 social_list1 text-right">

											<li>
												<a href="#" class="facebook1 ">
													<i class="fab fa-facebook-f"></i>

												</a>
											</li>
											<li>
												<a href="#" class="twitter2 mx-2">
													<i class="fab fa-twitter"></i>

												</a>
											</li>
											<li>
												<a href="#" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
											</li>

										</ul>
									</div>
							</div>
						</div>

					</div>
			</div>
		</div>
	</section>
	<!--reviews_sec-->
	<section class="banner-bottom reviews_sec">
		<div class="container">
			<h3 class="tittle cen">Testimonial</h3>
			<div class="inner-sec">
				<div class="flexslider mx-auto">
					<ul class="slides">
						<li>
							<div class="row">
								<div class="col-md-3 testimonials_grid-inn">

									<img src="images/t1.jpg" alt=" " class="img-fluid" />
								</div>
								<div class="col-md-9 testimonials_grid text-left">
									<h3>Gretchen
										<span>(Customer)</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor,Proin eget gravida odio. Donec ullamcorper est eu magna quam
										egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-md-3 testimonials_grid-inn">

									<img src="images/t2.jpg" alt=" " class="img-fluid" />
								</div>
								<div class="col-md-9 testimonials_grid text-left">
									<h3>Josephine Lee
<span>Customer</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor,Proin eget gravida odio. Donec ullamcorper est eu magna quam
										egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-md-3 testimonials_grid-inn">


									<img src="images/t1.jpg" alt=" " class="img-fluid" />
								</div>
								<div class="col-md-9 testimonials_grid text-left">
									<h3>Mark Olson
<span>Customer</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor,Proin eget gravida odio. Donec ullamcorper est eu magna quam
										egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

<?php \core\view('footer', $params)->show(); ?>