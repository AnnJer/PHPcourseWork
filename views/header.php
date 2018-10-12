<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?= $params['page'].' | '. $params['title'] ?></title>
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
    <link rel="stylesheet" href="/kursovaya/views/css/flexslider.css" type="text/css" media="screen" property="" />
    <link href="/kursovaya/views/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/kursovaya/views/css/contact.css" rel='stylesheet' type='text/css' />
    <link href="/kursovaya/views/css/fontawesome-all.css" rel="stylesheet">
    <link href="/kursovaya/views/css/simpleLightbox.css" rel='stylesheet' type='text/css' />
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
</head>

<body>
<!--/banner-->
<header>
    <div class="top-bar_sub container-fluid">
        <div class="row">
            <div class="col-md-4 top-forms text-left mt-4"  data-aos="fade-up">
                <span>Добро пожаловать!</span>
                <span class="mx-lg-4 mx-md-2  mx-1">

                            <?php if(AuthService::isAuth()) { ?>
                                <a href="<?= ROOT_DIR.'/logout' ?>">
                                    <i class="fas fa-lock"></i> Выйти</a>

							<?php } else {?>
                                <a href="<?= ROOT_DIR.'/login'?>">
                                <i class="fas fa-lock"></i> Войти</a>
                            <?php }?>
                </span>
                <span>
						<a href="<?= ROOT_DIR.'/register' ?>">
							<i class="far fa-user"></i> Регистрация</a>
                </span>
                <span>
                    <?php if(AuthService::isAdmin()) { ?>
                        <a href="<?= ROOT_DIR.'/admin/list/clients/1' ?>"
                        <i class="fas fa-lock"></i> Admin </a>
                    <?php } else {?>

                    <?php }?>
                </span>
            </div>
            <div class="col-md-4 logo text-center" data-aos="fade-up">
                <a class="navbar-brand" href="<?= ROOT_DIR ?>">
                    <i class="fab fa-gitkraken"></i> Baked</a>
            </div>


            <div class="col-md-4 log-icons text-right"  data-aos="fade-up">

                <ul class ="social_list1 mt-4">

                   <span  id="basket">
                       <a id="login-trigger" class="fa fa-shopping-basket">
                           Корзина
                       </a>
                   </span>
<!--                    <div id="basket-content">-->
<!---->
<!--                    </div>-->

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


</header>