
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Baked a Hotel Category Bootstrap responsive WebTemplate |Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
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
<script src='https://www.google.com/recaptcha/api.js'></script>
<!--/banner-->
<header>
    <div class="top-bar_sub container-fluid">
        <div class="row">
            <div class="col-md-4 top-forms text-left mt-4"  data-aos="fade-up">
                <span>Добро пожаловать!</span>
                <span class="mx-lg-4 mx-md-2  mx-1">
						<a href="<?= ROOT_DIR.'/login' ?>">
							<i class="fas fa-lock"></i> Войти</a>
					</span>
                <span>
						<a href="<?= ROOT_DIR.'/register' ?>">
							<i class="far fa-user"></i> Регистрация</a>
					</span>
            </div>
            <div class="col-md-4 logo text-center" data-aos="fade-up">
                <a class="navbar-brand" href="<?= ROOT_DIR ?>">
                    <i class="fab fa-gitkraken"></i> Baked</a>
            </div>

            <div class="col-md-4 log-icons text-right"  data-aos="fade-up">

                <ul class="social_list1 mt-4">

                    <span  id="basket">
                       <a id="login-trigger" class="fa fa-shopping-basket">
                           Корзина
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
        <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item active">Signin</li>
</ol>
<!--/main-->
<section class="banner-bottom">
    <div class="container">
        <h3 class="tittle">Войти</h3>
        <h4 style = "color: red; text-align: center; margin-top: 30px">
            <?php echo $params['error']??"" ?> </h4>
        <div class="row inner-sec">

            <div class="login p-5 bg-dark mx-auto mw-100">
                <form action="<?= ROOT_DIR.'/login' ?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1 mb-2">Email address</label>
                        <input name = 'email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1 mb-2">Password</label>
                        <input name = 'password' type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                    </div>

                    <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                    <div class="g-recaptcha" data-sitekey="6Ldge10UAAAAAIIlTOqpkbq60rxBgzfM0XobFqIE"></div>
                    <p>
                        <a href="<?= ROOT_DIR.'/register' ?>"> Don't have an account?</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
<!--//main-->
<!--footer-->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#login-trigger').click(function(){
            $(this).next('#login-content').slideToggle();
            $(this).toggleClass('active');

            if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
            else $(this).find('span').html('&#x25BC;')
        })
    });
</script>
<?php \core\view('footer', $params)->show(); ?>