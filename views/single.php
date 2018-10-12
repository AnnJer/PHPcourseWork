
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
    <li class="breadcrumb-item active">Blog Single</li>
</ol>
<!--/main-->
<section class="banner-bottom">
    <div class="container">
        <?php foreach ($params['singlePost'] as $singlePost) {?>
        <h3 class="tittle"><?= $singlePost['title'] ?></h3>
        <div class="row inner-sec">
            <!--left-->
            <div class="col-lg-8 left-blog-info text-left">


                <div class="blog-grid-top">
                    <div class="blog_info_left_grid mb-4">
                        <img src="<?= \core\Linker::linkImage($singlePost['img']) ?>" class="img-fluid" alt="">
                    </div>

                    <p class="para my-4"><?= $singlePost['text'] ?></p>
                </div>

                <div class="comment-top">
                    <h4 style="font-size: 2em;
                               color: #2c363e;
                                text-shadow: 0 1px 2px rgba(0, 0, 0, 0.37);
                                margin-bottom: 1em;
                                font-family: 'Poiret One', cursive;
                                letter-spacing: 1px;
                                font-weight: 400;">
                        Comments
                    </h4>
                    <br>
                    <div class="media"><?php foreach($params['comment'] as $comment) {?>
                        <img src="<?= \core\Linker::linkImage($comment['img']) ?>" alt="" class="img-fluid" />
                        <div class="media-body" style="font-weight: 400;
line-height: 1.5;
color: #212529;">
                            <h5 class="mt-0"><?= $comment['author'] ?></h5>
                            <p><?= $comment['comment'] ?></p>
                            <?php } ?>

                            <div class="media mt-3">
                                <a class="d-flex pr-3" href="#">
                                    <img src="images/t4.jpg" alt="" class="img-fluid" />
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="comment-top">
                    <h4>Leave a Comment</h4>
                    <div class="comment-bottom">
                        <form action="#" method="post">
                            <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                            <input class="form-control" type="email" name="Email" placeholder="Email" required="">

                            <input class="form-control" type="text" name="Subject" placeholder="Subject" required="">

                            <textarea class="form-control" name="Message" placeholder="Message..." required=""></textarea>
                            <button type="submit" class="btn btn-primary submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <!--//left-->
            <!--right-->
            <aside class="col-lg-4 right-blog-con text-right">
                <div class="right-blog-info text-left">
                    <div class="tech-btm">
                        <img src="images/banner1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="tech-btm mt-4">
                        <h4>Sign up to our newsletter</h4>
                        <p>Pellentesque dui, non felis. Maecenas male </p>
                        <form action="#" method="post">
                            <input class="form-control" type="email" placeholder="Email" required="">
                            <button type="submit" class="btn btn-primary submit">Subscribe</button>
                        </form>

                    </div>
                    <div class="tech-btm mt-4">
                        <h4>Categories</h4>
                        <ul class="list-group single">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cras justo odio
                                <span class="badge badge-primary badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dapibus ac facilisis in
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus
                                <span class="badge badge-primary badge-pill">1</span>
                            </li>
                        </ul>
                    </div>
                    <div class="single-gd my-5 tech-btm">
                        <h4>Our Progress</h4>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="single-gd tech-btm">
                        <h4>Recent Post</h4>
                        <div class="blog-grids">
                            <div class="blog-grid-left">
                                <a href="single.html">
                                    <img src="images/banner4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="blog-grid-right">

                                <p>Pellentesque dui, non felis. Maecenas male </p>

                            </div>

                        </div>
                    </div>
                </div>

            </aside>
        </div>
        <?php } ?>
    </div>
</section>
<!--//main-->


<?php \core\view('footer', $params)->show(); ?>



