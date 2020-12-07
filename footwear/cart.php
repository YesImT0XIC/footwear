<?php
session_start();
if(isset($_SESSION['user']) == false){
    header('Location: ../avtor.php');
}
?>
<!DOCTYPE HTML>
<html>
	<head>
        <title>Корзина - Магазин обуви "Минский"</title>
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
                                <li><a href="women.php">Женская обувь</a></li>
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
						<p class="bread"><span><a href="index.php">Главная</a></span> / <span>Корзина</span></p>
					</div>
				</div>
			</div>
		</div>


		<div>
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Список покупок</span>
							</div>
							<div class="one-eight text-center">
								<span></span>
							</div>
							<div class="one-eight text-center">
								<span></span>
							</div>
                            <div class="one-eight text-center">
                                <span>Цена</span>
                            </div>
						</div>
                        <?php
                        $host = 'localhost'; // адрес сервера
                        $database = 'footwear'; // имя базы данных
                        $user = 'root'; // имя пользователя
                        $password = ''; // пароль;
                        $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
                        $name = $_SESSION['user']['name'];
                        $query1 = mysqli_query($link, "SELECT * FROM $name");
                        $myrow = mysqli_fetch_array($query1);
                        $sum = $myrow['price'];
                        echo '
                        <div class="product-cart d-flex">
							<div class="one-forth">
								<div class="product-img" style="background-image: url('.$myrow['image'].');">
								</div>
								<div class="display-tc">
									<h3>'.$myrow['name'].'</h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price"></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price"></span>
								</div>
							</div>
							<div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price">'.$myrow['price'].' p.'.'</span>
                                </div>
							</div>
						</div>
                        ';

                        while($row=mysqli_fetch_array($query1))
                        {
                            $sum += $row['price'];
                            echo'
                        <div class="product-cart d-flex">
							<div class="one-forth">
								<div class="product-img" style="background-image: url('.$row['image'].');">
								</div>
								<div class="display-tc">
									<h3>'.$row['name'].'</h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price"></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price"></span>
								</div>
							</div>
							<div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price">'.$row['price'].' p.</span>
                                </div>
							</div>
						</div>
                            ';
                        }

                        ?>








					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="total-wrap">
							<div class="row">
								<div class="col-sm-4 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Сумма заказа:</span> <span><?php echo $sum?>.00 p.</span></p>
											<p><span>Доставка:</span> <span>15.00 p.</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Всего:</strong></span> <span><?php echo $sum+15?>.00 p.</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

                <div class="colorlib-product">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                                <h2>Возможно вам понравится</h2>
                            </div>
                        </div>
                        <div class="row row-pb-md">
                            <div class="col-lg-3 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="#" class="prod-img">
                                        <img src="images/item-1.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                    </a>
                                    <div class="desc">
                                        <h2><a href="#">Женские зимние ботинки "Мака"</a></h2>
                                        <span class="price">149.00 p.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="#" class="prod-img">
                                        <img src="images/item-2.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                    </a>
                                    <div class="desc">
                                        <h2><a href="#">Женсике туфли "Магнум"</a></h2>
                                        <span class="price">139.00 p.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="#" class="prod-img">
                                        <img src="images/item-3.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                    </a>
                                    <div class="desc">
                                        <h2><a href="#">Мужские кеды "Мессион"</a></h2>
                                        <span class="price">129.00 p.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="#" class="prod-img">
                                        <img src="images/item-4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                    </a>
                                    <div class="desc">
                                        <h2><a href="#">Мужские кроссвоки "Русс"</a></h2>
                                        <span class="price">105.00 p.</span>
                                    </div>
                                </div>
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