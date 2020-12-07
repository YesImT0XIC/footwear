<?php
session_start();
$host = 'localhost'; // адрес сервера
$database = 'footwear'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль;
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

$name = $_POST["name"];
$table = "nikitakazachuk";
mysqli_query($link, "INSERT INTO $table VALUES ('КЛАССИЧЕСКИЕ ТУФЛИ \"ГУЧИ\"','599','images/men1.jpg')");
switch ($name){
    case "1":
        mysqli_query($link, "INSERT INTO $table VALUES ('КЛАССИЧЕСКИЕ ТУФЛИ \"ГУЧИ\"','599','images/men1.jpg')");
        break;
    case "2":
        mysqli_query($link, "INSERT INTO $table VALUES ('ВЫСОКИЕ КЕДЫ \"БЛЕКБЕРИ\"','110','images/men2.jpg')");
        break;
    case "3":
        mysqli_query($link, "INSERT INTO $table VALUES ('НИЗКИЕ КЕДЫ \"КОММИСЕР\"','139','images/item-3.jpg')");
        break;
    case "4":
        mysqli_query($link, "INSERT INTO $table VALUES ('СПОРТИВЫНЕ КРОССОВКИ \"МЕСС\"','210','images/item-4.jpg')");
        break;
    case "5":
        mysqli_query($link, "INSERT INTO $table VALUES ('КЛАССИЧЕСКИЕ ТУФЛИ \"МАССА\"','125','images/men3.jpg')");
        break;
    case "6":
        mysqli_query($link, "INSERT INTO $table VALUES ('КРОССОВКИ \"МАССА\"','125','images/item-6.jpg')");
        break;
    case "7":
        mysqli_query($link, "INSERT INTO $table VALUES ('МУЖСКАЯ ОБВУЬ \"МАРКА\"','139'.'images/item-7.jpg')");
        break;
    case "8":
        mysqli_query($link, "INSERT INTO $table VALUES ('МУЖСКАЯ ОБВУЬ \"МАРКА\"','110','images/item-8.jpg')");
        break;
    case "9":
        mysqli_query($link, "INSERT INTO $table VALUES ('МУЖСКИЕ ПОЛУБОТЫ \"МАРЕЛ\"','230','images/item-9.jpg')");
        break;
    case "10":
        mysqli_query($link, "INSERT INTO $table VALUES ('ТУФЛИ \"КОЛХОЗНИКИ\"','105','images/men4.jpg')");
        break;
}

header('Location: ../men.php');