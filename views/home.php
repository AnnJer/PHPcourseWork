
<?php \core\view('header', $params)->show(); ?>


<div class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="carousel-caption">
                    <h3>Bakers Delight Your
                        <span>Local Baker</span>
                    </h3>

                </div>
            </div>
            <div class="carousel-item item2">
                <div class="carousel-caption">
                    <h3>Freshly baked all day
                        <span>Every day!</span>
                    </h3>

                </div>
            </div>
            <div class="carousel-item item3">
                <div class="carousel-caption">
                    <h3>Bakers Delight Your
                        <span>Local Baker</span>
                    </h3>

                </div>
            </div>
            <div class="carousel-item item4">
                <div class="carousel-caption">
                    <h3>Freshly baked all day
                        <span>Every day!</span>
                    </h3>

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
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
                <li class="nav-item active">
                    <a class="nav-link" href="<?= ROOT_DIR ?>">Главная
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT_DIR.'/about' ?>">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll" href="#menu">Меню</a>
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
<!--/inner-content-->
<!--/banner-bottom-->
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
<!--//banner-bottom-->
<!--/banner-bottom-->
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
<!--//banner-bottom-->
<!--/Menu-->
<section class="banner-bottom menu" id="menu">
    <div class="container">
        <h3 class="tittle">Our Menu</h3>
        <div class="row inner-sec">
            <div class="tabs">
                <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">

                    <?php foreach ($params['categories'] as $category) { ?>
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                           aria-selected="true"><?= $category['name'] ?></a>
                    </li>
                    <?php } ?>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="menu-grids my-lg-4 my-md-2">

                            <div class="row inner-menu mt-4">
                                <?php foreach ($params['products'] as $product) { ?>
                                <div class="col-md-6 menu-grid-left" data-aos="fade-down">

                                    <div class="row mt-2">

                                        <div class="col-md-5 menu-img">
                                            <img src="<?= \core\Linker::linkImage($product['img']) ?>" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <div class="col-md-7 menu-img-info mt-4 mt-md-2">
                                            <h5><?= $product['name'] ?></h5>
                                            <p class="sub-meta mt-2">

                                                $<?= $product['price'] ?>
                                            </p>
                                        </div>

                                    </div>
                                    <br><br>

                                </div>
                              <?php } ?>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--//Menu-->

<!--/blog-->
<section class="blog_sec container-fluid">
    <h3 class="tittle">Latest Blogs</h3>
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

    </div>
</section>
<!--//blog-->

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

                                <img src="<?= \core\Linker::linkImage('t1.jpg') ?>" alt=" " class="img-fluid" />
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

                                <img src="<?= \core\Linker::linkImage('t2.jpg') ?>" alt=" " class="img-fluid" />
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


                                <img src="<?= \core\Linker::linkImage('t2.jpg') ?>" alt=" " class="img-fluid" />
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
<!---->
<!--//inner-content-->
<!--footer-->


<?php \core\view('footer', $params)->show(); ?>
