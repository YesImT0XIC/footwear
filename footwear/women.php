<?php
session_start();
if(isset($_SESSION['user']) == false){
    header('Location: ../avtor.php');
}
?>
<!DOCTYPE HTML>
<html>
	<head>
        <title>Женское - Магазин обуви "Минский"</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
        <link rel="icon" type="image/png" href="images/Vans_Glitter_Red_37314.ico"/>
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-9">
                            <div id="colorlib-logo"><a href="index.php">Магазин обуви "Минский"</a></div>
                        </div>
                        <div class="profile">
                            <?php
                            echo $_SESSION['user']['name'];
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left menu-1">
                            <ul>
                                <li><a href="index.php">Главная</a></li>
                                <li><a href="men.php">Мужская обувь</a></li>
                                <li class="active"><a href="women.php">Женская обувь</a></li>
                                <li><a href="contact.php">Контакты</a></li>
                                <li class="cart"><div class="leftl"><a href="cart.php"><i class="icon-shopping-cart"></i> Корзина</a><a href="operation/logout.php"> Выйти</a><div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sale">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center">
                            <div class="row">
                                <div class="owl-carousel2">
                                    <div class="item">
                                        <div class="col">
                                            <h3><a href="#">25% скидка на все! Используй промокод: "Минский"</a></h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col">
                                            <h3><a href="#">Самая большя распродажа, 50% на всю летнюю обувь</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.php">Главная</a></span> / <span>Женская обувь</span></p>
					</div>
				</div>
			</div>
		</div>

        <div class="breadcrumbs-two">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs-img" style="background-image: url(images/womenfon.jpg);">
                            <h2>Женское</h2>
                        </div>
                        <div class="menu text-center">
                            <p>Самые новые модели женсокй обуви популярных брендов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-featured">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <div class="featured">
                            <div class="featured-img featured-img-2" style="background-image: url(images/item-1.jpg);">
                                <h2>Повседневная</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="featured">
                            <div class="featured-img featured-img-2" style="background-image: url(images/women.jpg);">
                                <h2>Классическая</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="featured">
                            <div class="featured-img featured-img-2" style="background-image: url(images/cover-img-1.jpg);">
                                <h2>Спортивная</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-product">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                        <h2>Все модели женской обуви</h2>
                    </div>
                </div>
                <div class="row row-pb-md">
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <form method="post" action="addWomen/1.php">
                                <img src="images/item-2.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Классические туфли "Гучи"</a></h2>
                                <span class="price">599.00 p.</span>
                                <button type="submit" class="btn btn-success"  >Добавить</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <form method="post" action="addWomen/2.php">
                                <img src="images/item-5.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Классические туфли "Капа"</a></h2>
                                <span class="price">110.00 p.</span>
                                <button type="submit" class="btn btn-success"  >Добавить</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <form method="post" action="addWomen/3.php">
                                <img src="images/item-3.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Низкие кеды "Коммисер"</a></h2>
                                <span class="price">139.00 p.</span>
                                <button type="submit" class="btn btn-success"  >Добавить</button>
                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <form method="post" action="addWomen/4.php">
                                <img src="images/wom1.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Классические туфли "Женьшень"</a></h2>
                                <span class="price">210.00 p.</span>
                                <button type="submit" class="btn btn-success"  >Добавить</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <form method="post" action="addWomen/5.php">
                                <img src="images/wom2.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Полуботинки "Масса"</a></h2>
                                <span class="price">125.00 p.</span>
                                <button type="submit" class="btn btn-success"  >Добавить</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <form method="post" action="addWomen/6.php">
                                <img src="images/item-6.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Кроссовки "Масса"</a></h2>
                                <span class="price">125.00 p.</span>
                                <button type="submit" class="btn btn-success"  >Добавить</button>
                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <form method="post" action="addWomen/7.php">
                                <img src="images/item-8.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Ботинки "Марка"</a></h2>
                                <span class="price">110.00 p.</span>
                                <button type="submit" class="btn btn-success"  >Добавить</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <form method="post" action="addWomen/8.php">
                                <img src="images/item-9.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Полуботы "Марел"</a></h2>
                                <span class="price">230.00 p.</span>
                                <button type="submit" class="btn btn-success"  >Добавить</button>
                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-11.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Кроссовки "Найк Аир Джордан"</a></h2>
                                <span class="price">784.00 p.</span>
                                <button type="submit" class="btn btn-success"  >Добавить</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-12.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Кроссовки "Найк Буст"</a></h2>
                                <span class="price">239.00 p.</span>
                                <button type="submit" class="btn btn-success"  >Добавить</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-13.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Кроссовки "Найк Аир Джордан"</a></h2>
                                <span class="price">784.00 p.</span>
                                <button type="submit" class="btn btn-success"  >Добавить</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-14.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Кроссовки "Найк Буст"</a></h2>
                                <span class="price">239.00 p.</span>
                                <button type="submit" class="btn btn-success"  >Добавить</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-16.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Кеды "Ванс"</a></h2>
                                <span class="price">139.00 p.</span>
                                <button type="submit" class="btn btn-success"  >Добавить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-partner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                        <h2>Наши партнеры</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col partner-col text-center">
                        <img src="images/brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                    </div>
                    <div class="col partner-col text-center">
                        <img src="images/brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                    </div>
                    <div class="col partner-col text-center">
                        <img src="images/brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                    </div>
                    <div class="col partner-col text-center">
                        <img src="images/brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                    </div>
                    <div class="col partner-col text-center">
                        <img src="images/brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Все права защищены</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>

                    </p>
                </div>
            </div>
        </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- popper -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap 4.1 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

    </body>
</html>