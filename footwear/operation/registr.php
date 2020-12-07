<?php
session_start();
$host = 'localhost'; // адрес сервера
$database = 'footwear'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль;
 $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

 $name = $_POST["name"];
 $email = $_POST["email"];
 $pass = $_POST["pass"];
 $admin = "Нет";

$sql = "CREATE TABLE $name 
( `name` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
`price` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
`image` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL) ENGINE = InnoDB";

mysqli_query($link, $sql);

 $_SESSION['user']['name'] =  $_POST["name"];

 $check_name = mysqli_query($link,"SELECT * FROM users WHERE name = '$name'") or die("Ошибка " . mysqli_error($link));
 $check_email = mysqli_query($link,"SELECT * FROM users WHERE email = '$email'") or die("Ошибка " . mysqli_error($link));

 if(mysqli_num_rows($check_name) > 0 ){
   $_SESSION['message'] = "Пользователь с таким именем уже зарегистрирован";
 }
 else{
   if(mysqli_num_rows($check_email) > 0 ){
     $_SESSION['message'] = "Пользователь с таким адресом почты уже зарегистрирован";
   }
   else{
       mysqli_query($link, "INSERT INTO users VALUES (NULL, '$name', '$email', '$pass','$admin')");
       $check_email_and_pass = mysqli_query($link,"SELECT * FROM users WHERE email = '$email' AND pass = '$pass'") or die("Ошибка " . mysqli_error($link));
       header('Location: ../index.php');
   }
 }
 header('Location: ../reg.php');