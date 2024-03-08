<?php
   session_start();

   $login = htmlspecialchars(filter_var(trim($_POST['login'])));
   $name = htmlspecialchars(filter_var(trim($_POST['name'])));
   $password = htmlspecialchars(filter_var(trim($_POST['password'])));

   $_SESSION['error'] = "";

   if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    $_SESSION['error'] = "Логин должен содержать минимум 5 символов";
    header("Location: ../pages/registration.php");
    exit();
   } else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    $_SESSION['error'] = "Недопустимая длина имени (не менее 3 симолов)";
    header("Location: ../pages/registration.php");
    exit();
   } else if (mb_strlen($password) < 6 || mb_strlen($password) > 16) {
    $_SESSION['error'] = "Пароль должен содержать минимум 6 символов";
    header("Location: ../pages/registration.php");
    exit();
   }

   $password=md5($password."fjsrshzfdk4664");

   $mysql = new mysqli('localhost','root','root','register-bg');

   #проверка зарегистрирован ли пользователь
   $check_query = $mysql->query("SELECT * FROM users WHERE login = '$login'");
   if ($check_query && $check_query->num_rows > 0) {
    $_SESSION['error'] = "Пользователь с таким логином уже зарегистрирован. Пожалуйста, войдите в аккаунт.";
    header("Location: ../pages/registration.php");
    exit();
   }

   $mysql->query("INSERT INTO `users` (`login`, `password`, `name`) VAlUES('$login', '$password', '$name')");
   
   $mysql->close();

   header('Location: /pages/authorization.php');
   exit();
?>