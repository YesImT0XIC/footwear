<?php
session_start();
if(isset($_SESSION['user']) == false)
    header('Location: ../avtor.php');
else if($_SESSION['user']['admin'] != 'Да'){
    header('Location: ../index.php');
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Панель админа - Магазин обуви "Минский"</title>
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
                    <h3>Панель администратора</h3>
                </div>
            </div>
        </div>
    </nav>
<br>
    <br>
    <div>
        <table class="center-table">
            <colgroup>
                <col  span="7" style="background-color:LightCyan">
            </colgroup>
            <tr style="background-color:deepskyblue">
                <th>Логин пользователя</th> <th>  Электронная почта</th> <th>  Пароль</th> <th>  Статус администратора</th>
            </tr>
            <?php
            $host = 'localhost'; // адрес сервера
            $database = 'footwear'; // имя базы данных
            $user = 'root'; // имя пользователя
            $password = ''; // пароль;
            $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

            $query1 = mysqli_query($link, "SELECT * FROM users");
            $myrow = mysqli_fetch_array($query1);
            echo '<tr>
                <th>'.$myrow['name'].'</th> <th>'.$myrow['email'].'</th> <th>'.$myrow['pass'].'</th> <th>'.$myrow['admin'].'</th>
              </tr>';

            while($row=mysqli_fetch_array($query1))
            {
                echo' <tr>
                    <th>'.$row['name'].'</th> <th>'.$row['email'].'</th> <th>'.$row['pass'].'</th> <th>'.$row['admin'].'</th> 
                </tr>';
            }

            ?>
        </table>
        <!--<br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4 bg-white">
                    <form action="" method="post">
                        <div class="form-group font">
                            <label class="center-table">Просмотреть корзину пользователя</label>
                            <input type="text" class="form-control" name="find" placeholder="Введите имя пользователя">
                        </div>
                        <button type="submit" class="btn btn-primary mx-auto d-block">Перейти</button>
                        <br>
                    </form>
                </div>
            </div>
        </div-->
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
