<?php
   session_start();

   $login = htmlspecialchars(filter_var(trim($_POST['login'])));
   $password = htmlspecialchars(filter_var(trim($_POST['password'])));

   $_SESSION['error1'] = "";

   $password=md5($password."fjsrshzfdk4664");

   $mysql = new mysqli('localhost','root','root','register-bg');
   $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");
   
   $user = $result->fetch_assoc();
   if (count($user) == 0) {
    $_SESSION['error1'] = "Пользователь не найден. Пожалуйста, зарегистрируйтесь";
    header("Location: ../pages/authorization.php");
    exit();
   }

   // устанавливаем куки с именем пользователя
   setcookie('user', $user['name'], time() + 7200, "/");

   // проверка если пользователь администратор, устанавливаем флаг доступа администратора в сессии 
   if ($user['login'] == 'admin') {
    $_SESSION['admin_access'] = true;
   }


   $mysql->close();

   header('Location: /');
   exit();
?>