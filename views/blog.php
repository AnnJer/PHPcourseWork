
<?php \core\view('header', $params)->show(); ?>

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
						<a class="nav-link" href="<?= ROOT_DIR ?>">Главная
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= ROOT_DIR.'/about' ?>">О нас</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= ROOT_DIR ?>">Меню</a>
					</li>
					<li class="nav-item active">
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
		<li class="breadcrumb-item active">Blogs</li>
	</ol>
	<!--/main-->



	<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">Our Blogs</h3>
			<div class="row inner-sec">
                <?php foreach($params['posts'] as $post) { ?>
                <div class="col-lg-6 banner-btm-left">

                        <div class="banner-btm-top">
                            <div class="banner-btm-inner a1 text-left">
                                <div class="blog_date">

                                    <h4><?= $post['date'] ?></h4>

                                </div>
                                <h6>
                                    <a href="<?= ROOT_DIR.'/single/'.$post['id'] ?>"><?= $post['title'] ?></a>
                                </h6>
                                <p class="paragraph"><?= $post['description'] ?></p>

                                <a href="<?= ROOT_DIR.'/single/'.$post['id'] ?>" class="blog-btn" data-aos="fade-down">Know More</a>
                            </div>
                            <div class="banner-btm-inner a2">

                            </div>
                        </div>


                </div>
                <?php } ?>
	</section>


<?php \core\view('footer', $params)->show(); ?>