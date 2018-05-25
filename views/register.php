<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Baked a Hotel Category Bootstrap responsive WebTemplate | Register :: w3layouts</title>
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
    <li class="breadcrumb-item active">Signin</li>
</ol>
<!--/main-->
<section class="banner-bottom">
    <div class="container">
        <h3 class="tittle">Register Now</h3>
        <div class="inner-sec">
            <h4 style = "color: red; text-align: center; margin-top: 30px">
                <?php echo $params['error']??"" ?> </h4>
            <div class="login p-5 bg-dark mx-auto mw-100">
                <form action="#" method="post">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">First name</label>

                            <input name='name' type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Email</label>
                            <input name = 'email' type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1 mb-2">Password</label>
                            <input name='password' type="password" class="form-control" id="password1" placeholder="" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword2 mb-2">Confirm Password</label>
                            <input name='confPassword' type="password" class="form-control" id="password2" placeholder="" required="">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                    <p>
                        <a href="#">By clicking Register, I agree to your terms</a>
                    </p>
                </form>

            </div>
        </div>
    </div>
</section>
<!--//main-->
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