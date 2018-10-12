
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
                    <h3>Пекарня, помешанная
                        <span>На качестве</span>
                    </h3>

                </div>
            </div>
            <div class="carousel-item item2">
                <div class="carousel-caption">
                    <h3>Только свежие, здоровые
                        <span>и полезные составляющие</span>
                    </h3>

                </div>
            </div>

            <div class="carousel-item item4">
                <div class="carousel-caption">
                    <h3>Свежеиспеченное весь день
                        <span>Каждый день!</span>
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
                        <?php foreach ($params['categories'] as $category) { ?>
                        <a class="dropdown-item"
                           onclick="getProductsByFilter(
                               {'equals_id_category': <?= $category['id'] ?>}, '#productsHomeHost'
                                   )"
                           href="#productsHomeHost"><?= $category['name'] ?></a>
                        <?php } ?>

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
                <p style="font-family: 'Roboto', sans-serif;">Мы кондитерская 'Baked', готовим капкейки и другие разнообразные десерты
                    на заказ. Вся наша продукция обладает изысканным нежным вкусом,
                    характерным для тортов и пирожных премиум класса ручной работы.
                    Философия кондитерской  - быть лучшими, создавая как традиционные
                    сладости по оригинальным рецептам, так и новаторские десерты
                    приготовленные по авторским рецептам.</p>
                <p class="sup-para mt-2" style="font-family: 'Roboto', sans-serif;">Неотъемлемой частью философии является
                    безупречный внешний вид наших работ. В тайных мастерских
                    компании 'Baked' трудится дружная команда кондитеров, которые
                    являются настоящими волшебниками кулинарного искусства.</p>

                <br>
                <br>

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
                            <h6>
                                <a  href="<?= ROOT_DIR.'/cake/'.$cake['id'] ?>"
                                    style="font-size: 2em;
                                            color: #fff;
                                            margin: 0;
                                            font-family: 'Poiret One', cursive;
                                            letter-spacing: 1px;
                                            font-weight: 400;"><?= $cake['name'] ?>
                                </a>
                            </h6>
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
        <h3 class="tittle">Меню</h3>
        <div class="row inner-sec">
            <div class="tabs">
                <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">

                    <?php foreach ($params['categories'] as $category) { ?>
                    <li class="nav-item" onclick="activateTab(this)" style="padding: 0.7em 2em;

letter-spacing: 1px">
                        <a class="nav-link" id="pills-home-tab"
                           onclick="getProductsByFilter({'equals_id_category': <?= $category['id'] ?>}, '#productsHomeHost')"><?= $category['name'] ?></a>
                    </li>
                    <?php } ?>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="menu-grids my-lg-4 my-md-2">

                            <div class="row inner-menu mt-4" id="productsHomeHost">

                            </div>
                            <div id="pagination-products">

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
    <h3 class="tittle">Блог</h3>
    <div class="row inner-sec">

        <style>
            .reverse-content{
                display: flex;
                flex-direction: row-reverse;
            }

        </style>

        <?php
        $mod = 1;
        foreach($params['posts'] as $counter => $post) { ?>
        <div class="col-lg-6 banner-btm-left">
            <div class="banner-btm-top <?php
                if ($mod % 2 == 0) {
                    echo "reverse-content";
                }

                if (($counter+1) % 2 == 0) {
                    $mod++;
                }
            ?>" >
                <div class="banner-btm-inner a1 text-left">
                    <div class="blog_date">

                        <h4><?= $post['date'] ?></h4>

                    </div>
                    <h6>
                        <a href="<?= ROOT_DIR.'/single/'.$post['id'] ?>"><?= $post['title'] ?></a>
                    </h6>
                    <p class="paragraph" ><?= $post['description'] ?></p>

                    <a href="<?= ROOT_DIR.'/single/'.$post['id'] ?>" class="blog-btn" data-aos="fade-down">Детальнее</a>
                </div>
                <div class="banner-btm-inner a" style="background: url(<?= \core\Linker::linkImage($post['img']) ?>) no-repeat 0px 0px;
                        background-size: cover;
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        -ms-background-size: cover;
                        min-height: 350px;">
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
        <h3 class="tittle cen">Отзывы</h3>
        <div class="inner-sec">
            <div class="flexslider mx-auto">
                <ul class="slides">
                    <li>
                        <div class="row">
                            <div class="col-md-3 testimonials_grid-inn">

                                <img src="<?= \core\Linker::linkImage('t1.jpg') ?>" alt=" " class="img-fluid" />
                            </div>
                            <div class="col-md-9 testimonials_grid text-left">
                                <h3>Олег
                                    <span>(Покупатель)</span>
                                </h3>
                                <i>Киев</i>
                                <p>Очень понравилась пекарня. Там можно и чайку попить. Пекут вкуснейшие булочки.
                                    Очень понравились плюшки. Купили хлеб, аромат просто необыкновенный! Очень чисто и уютно внутри.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-3 testimonials_grid-inn">

                                <img src="<?= \core\Linker::linkImage('t2.jpg') ?>" alt=" " class="img-fluid" />
                            </div>
                            <div class="col-md-9 testimonials_grid text-left">
                                <h3>Ольга
                                    <span>Покупатель</span>
                                </h3>
                                <i>Киев</i>
                                <p>Обширный ассортимент выпечки. Тесто сами замещивают из натуральных продуктов.
                                    А какой здесь простой хлеб! Успехов компании!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-3 testimonials_grid-inn">


                                <img src="<?= \core\Linker::linkImage('t1.jpg') ?>" alt=" " class="img-fluid" />
                            </div>
                            <div class="col-md-9 testimonials_grid text-left">
                                <h3>Марк
                                    <span>Покупатель</span>
                                </h3>
                                <i>Киев</i>
                                <p>Макаруны и круассаны наивкуснейшие! Хлеб отличный!!! Спасибо!! развивайтесь дальше,
                                    молодцы!! в следующий приезд, надеюсь попробывать что-то нового и выпить чашечку кофе!</p>
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
