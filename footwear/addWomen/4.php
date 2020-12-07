<?php
session_start();
$host = 'localhost'; // адрес сервера
$database = 'footwear'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль;
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

$table = $_SESSION['user']['name'];
mysqli_query($link, "INSERT INTO $table VALUES ('Классические туфли \"Женьшень\"','210','images/wom1.jpg')");
header('Location: ../women.php');