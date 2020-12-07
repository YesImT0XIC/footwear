<?php
session_start();
if(isset($_SESSION['user'])){
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Авторизация - Магазин обуви "Минский"</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/Vans_Glitter_Red_37314.ico"/>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/reg.css">
</head>

<body>
<div class="container">
    <h1 class="text-center">Авторизация</h1>
    <form class="registration-form" name="table" action="operation/sign.php" method="post"">
        <label>
            <span class="label-text">Почта</span>
            <input type="text" name="email">
        </label>
        <label class="password">
            <span class="label-text">Пароль</span>
            <input type="password" name="pass">
        </label>
        <br>
        <div class="text-center">
            <button>
                Войти
            </button>
        </div><br>
        <div class="text-center">
        <a href="reg.php">Зарегистрироваться</a>
        </div>
        <div class="text-center">

        <?php
        if(isset($_SESSION['message'])){
            echo '<p>' . $_SESSION['message'] . '</p>';
            unset($_SESSION['message']);
        }
        ?>
        </div>
    </form>
</div>
</body>
</html>
