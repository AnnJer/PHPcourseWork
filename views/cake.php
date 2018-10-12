<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Baked</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Baked a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="/kursovaya/views/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="/kursovaya/views/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/kursovaya/views/css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
</head>

<body>
<!--/banner-->
<header>
    <div class="top-bar_sub container-fluid">
        <div class="row">
            <div class="col-md-4 top-forms text-left mt-4"  data-aos="fade-up">
                <span>Welcome Back!</span>
                <span class="mx-lg-4 mx-md-2  mx-1">
						<a href="<?= ROOT_DIR.'/login' ?>">
							<i class="fas fa-lock"></i> Sign In</a>
					</span>
                <span>
						<a href="<?= ROOT_DIR.'/register' ?>">
							<i class="far fa-user"></i> Register</a>
					</span>
            </div>
            <div class="col-md-4 logo text-center" data-aos="fade-up">
                <a class="navbar-brand" href="<?= ROOT_DIR ?>">
                    <i class="fab fa-gitkraken"></i> Baked</a>
            </div>

            <div class="col-md-4 log-icons text-right"  data-aos="fade-up">

                <ul class="social_list1 mt-4">

                    <span  id="basket">
                       <a id="login-trigger" class="fa fa-shopping-basket" href="#">
                           Basket<span>&#x25BC;</span>
                       </a>
                   </span>

                    <li>
                        <a href="#" class="facebook1 mx-2">
                            <i class="fab fa-facebook-f"></i>

                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter2">
                            <i class="fab fa-twitter"></i>

                        </a>
                    </li>
                    <li>
                        <a href="#" class="dribble3 mx-2">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="pin">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

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
        <a href="<?= ROOT_DIR ?>/">Home</a>
    </li>
    <li class="breadcrumb-item active"><?= $params['cake'][0]['name'] ?></li>
</ol>


<section class="banner-bottom" style="padding-top: 30px">
    <div class="container">
        <?php foreach ($params['cake'] as $cake) {?>
        <div class="row inner-sec">

            <div class="col-lg-8 left-blog-info text-left" style="display: flex; justify-content: flex-start">

                    <div class="blog-grid-top">

                        <div class="blog_info_left_grid" style="width: 300px">
                            <img style="width: 100%" src="<?= \core\Linker::linkImage($cake['img']) ?>" class="img-fluid" alt="">
                        </div>

                    </div>
                    <div class="info" style="margin-left: 30px; width: 100%; margin-top: -10px">
                        <h3 class="tittle"><?= $cake['name'] ?></h3>
                        <div style="margin: 30px 0 0 20px;">
                            <div>
                                Категория: <?= $params['category'] ?>
                            </div>
                            <div>
                                Цена: <?= $cake['price'] ?>$
                            </div>
                        </div>
                        <div  id="basket" style="margin: 30px 0 0 20px;">
                                <button onclick="addToCart(<?= $cake['id'] ?>, 1); messageBox('Товар добавлен')"  style = "float:bottom; width: 130px">
                                    <i class="fa fa-shopping-basket"></i> В корзину
                                </button>
                        </div>
                    </div>
            </div>


            <h3 style="display: block; width: 100%; margin-top: 50px">Посмотрите так же:</h3>

            <div class="cards" style="display: flex; justify-content: center;">
                <?php foreach ($params['seeAlso'] as $cake) { ?>
                    <div  style="width: 20%; margin: 10px 20px">
                        <div class="img">
                            <img style="width: 100%; height: 200px" src="<?= \core\Linker::linkImage($cake['img']) ?>">
                        </div>
                        <div>
                            <h5 style="margin-top: 20px"><a href="<?= ROOT_DIR.'/cake/'.$cake['id'] ?>"><?= $cake['name'] ?></a></h5>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>


    </div>
</section>



<?php \core\view('footer', $params)->show(); ?>