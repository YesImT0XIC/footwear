<?php
session_start();
$host = 'localhost'; // адрес сервера
$database = '24moneyup'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

$name = $_SESSION['user']['name'];
echo $name;
$email = $_SESSION['user']['email'];

$check_email_and_pass = mysqli_query($link,"SELECT * FROM users WHERE email = '$email' AND pass = '$pass'") or die("Ошибка " . mysqli_error($link));
$user = mysqli_fetch_assoc($check_email_and_pass);
$_SESSION['user'] = ["balance" => $user['balance'] ];
echo $_SESSION['user']['balance'];
/*header('Location: ../menu.php');*/

