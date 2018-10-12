<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 footer-grid text-left" data-aos="fade-right">
                <h3>О нас</h3>
                <p>Пекарня, помешанная на качестве продуктов и вкусе изделия. Готовы вополнить любой Ваш заказ с любовью..</p>

                <div class="read">
                    <a href="<?= ROOT_DIR.'/about' ?>" class="btn btn-primary read-m">Детальнее</a>
                </div>
            </div>
            <!-- subscribe -->
            <div class="col-lg-8 subscribe-main footer-grid text-left" data-aos="fade-left">
                <h2>Подписаться на горячие обновления</h2>
                <div class="subscribe-main text-left">
                    <div class="subscribe-form">
                        <form action="#" method="post" class="subscribe_form">
                            <input class="form-control" type="email" placeholder="Введите email..." required="">
                            <button type="submit" class="btn btn-primary submit">Принять</button>
                        </form>

                    </div>
                    <p>Мы уважаем вашу конфиденциальность. Никакого спама!</p>
                </div>
                <!-- //subscribe -->
                <div class="footer-cpy text-left">
                    <div class="copyrighttop">
                        <ul>
                            <li class="mx-lg-3 mx-md-2 mx-1">
                                <a class="facebook" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a class="facebook" href="#">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                            </li>
                            <li class="mx-lg-3 mx-md-2 mx-1">
                                <a class="facebook" href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                    <span>Google+</span>
                                </a>
                            </li>
                            <li>
                                <a class="facebook" href="#">
                                    <i class="fab fa-pinterest-p"></i>
                                    <span>Pinterest</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyrightbottom">
                        <p>© 2018 Baked. Все права защищены</p>

                    </div>
                </div>
            </div>
        </div>
        <!-- //footer -->
    </div>
</footer>


<div class="bgPlaceholder hidden">

</div>

<div class="shopping-cart hidden">
    <!-- Title -->
    <div class="title">
        <span>Shopping Bag</span>
        <span class="close-btn" id="closeCart"><img src="<?= \core\Linker::linkImage('delete-icn.svg') ?>" alt="close"></span>
    </div>

    <div class="productsHost">

        </div>
    </div>

</div>


<style>
    .like-btn {
        background: url(<?= \core\Linker::linkImage('twitter-heart.png') ?>);
    }
    .delete-btn {
        background: url(<?= \core\Linker::linkImage('delete-icn.svg') ?>) no-repeat center;
    }
</style>


<!---->

<!-- js -->
<script src="/kursovaya/views/js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- /flexisel -->
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 4,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });

    });
</script>
<script src="/kursovaya/views/js/jquery.flexisel.js"></script>
<!-- //flexisel -->
<!-- flexSlider -->
<script defer src="/kursovaya/views/js/jquery.flexslider.js"></script>
<script>
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>

<!-- //flexSlider -->

<!-- simpleLightbox -->
<script src="/kursovaya/views/js/simpleLightbox.js"></script>
<script>
    $('.proj_gallery_grid a').simpleLightbox();
</script>
<!-- //simpleLightbox -->
<!-- /js files -->
<link href='/kursovaya/views/css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
<link href='/kursovaya/views/css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
<script src='/kursovaya/views/js/aos.js'></script>
<script src="/kursovaya/views/js/aosindex.js"></script>
<!-- //js files -->
<!--/ start-smoth-scrolling -->
<script src="/kursovaya/views/js/move-top.js"></script>
<script src="/kursovaya/views/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<!--// end-smoth-scrolling -->

<script>
    $(document).ready(function () {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<a href="#home" class="scroll" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>
<!-- //Custom-JavaScript-File-Links -->
<script src="/kursovaya/views/js/bootstrap.js"></script>
<script src="/kursovaya/views/js/main.js"></script>



<script>

    $(document).ready(function() {
        let elem = $('#' + window.location.hash.replace('#', ''));

        if(elem) {

            $('html, body').animate({
                scrollTop: elem.offset().top - 30
            }, 1000);
        }
    });

    const HOST = '<?= ROOT_DIR ?>';
    const IMG_HOST = '<?= \core\Linker::linkImage('') ?>';

    let skip = 0;
    const take = 6;
    let commonFilters = {};

    function loadPage(num) {
        skip = num*take;

        let filters = commonFilters;

        filters['skip'] = skip;
        filters['take'] = take;

        $.ajax({
            url: HOST+'/api/products',
            type: 'POST',
            data: filters,
            success: function(result) {

                result = JSON.parse(result);
                let data = result.data;
                let count = result.count;

                setCards(data, '#productsHomeHost');
            },

        });
    }

    let cardsCount = 0;
    
    function showPagination() {
        let paginationHost = $('#pagination-products');

        let pages = Math.ceil(cardsCount / take);

        let html = '';

        for(let i = 0; i < pages; i++) {


            html += `
                <a onclick="loadPage(${i})">${i+1}</a>
            `;
        }

        paginationHost.html(html);
    }

    function getProductsByFilter(filters, hostSelector) {
        skip = 0;

        commonFilters = filters;

        filters['skip'] = skip;
        filters['take'] = take;

        $.ajax({
            url: HOST+'/api/products',
            type: 'POST',
            data: filters,
            success: function(result) {

                result = JSON.parse(result);
                let data = result.data;
                let count = result.count;

                cardsCount = count;

                setCards(data, hostSelector);
            },

        });
    }

    function setCards(data, hostSelector) {
        str = '';

        for (let card of data) {
            str += `
                  <div class="col-md-6 menu-grid-left" data-aos="fade-down">
                    <div class="row mt-2">
                         <div class="col-md-5 menu-img">
                             <img src="${IMG_HOST + card['img']}" class="img-fluid rounded-circle" alt="">
                         </div>

                         <div class="col-md-7 menu-img-info mt-4 mt-md-2">
                             <h5>
                                <a  href="<?= ROOT_DIR . '/cake/'?>${card['id']}"
                                    style = "   font-size: 1em;
                                             color: #7b7d80;
                                             text-shadow: 0 1px 2px rgba(0, 0, 0, 0.37);
                                             margin: 0;
                                             font-family: 'Poiret One', cursive;
                                             letter-spacing: 1px;
                                             line-height: 1.4em;
                                              ">
                                    ${card['name']}
                                </a>
                             </h5>
                             <p class ="sub-meta" style="   font-size: 1.2em;
                                                            color: #7b7d80;
                                                            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.37);
                                                            line-height: 1.4em;
                                                            margin: 0;
                                                            font-family: 'Poiret One', cursive;
                                                            letter-spacing: 1px;
                                                            font-weight: 400;">
                                 Количество: ${card['amount']} шт
                             </p>
                             <p class="sub-meta mt-2" style="float: bottom;">
                                 $${card['price']}
                             </p>

                             <br><br>
                            <span  id="basket">
                                <button onclick="addToCart(${card['id']}, 1); messageBox('Товар добавлен')"  style = "float:bottom;">
                                    <i class="fa fa-shopping-basket"></i> В корзину
                                </button>
                            </span>
                         </div>

                    </div>
                    <br>
                    <br>
                  </div>
                 `
        }

        $(hostSelector).html(
            str
        );
        showPagination();
    }

    <?php if (isset($params['categories'])) { ?>
        getProductsByFilter({'equals_id_category': <?= $params['categories'][0]['id'] ?>}, '#productsHomeHost');
    <?php } ?>

    
    function messageBox(text) {
        let mesBox = document.getElementById('messageBox');
        mesBox.classList.toggle('hidden');

        mesBox.getElementsByClassName('message')[0].innerHTML = text;
    }
    
    function closeMessageBox() {
        let mesBox = document.getElementById('messageBox');
        mesBox.classList.toggle('hidden');
    }
</script>


<div class="hidden" id="messageBox">
    <div class="head"><i onclick="closeMessageBox()" class="fas fa-times"></i></div>
    <div class="message">

    </div>
</div>

</body>

</html>