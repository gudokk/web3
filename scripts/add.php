<?php
   session_start();
   $title = $_POST['title'];
   $preview = $_POST['preview'];
   $text = $_POST['text'];
   $img = $_POST['img'];
   $date = $_POST['date'];

   $_SESSION['error2'] = "";

   if(mb_strlen($title) == 0 || mb_strlen($preview) == 0 || mb_strlen($text) == 0 || mb_strlen($img) == 0) {
    $_SESSION['error2'] = "Все поля должны быть заполнены";
    header("Location: ../pages/create.php");
    exit();
   }
   $mysql = new mysqli('localhost','root','root','register-bg');

   $mysql->query("INSERT INTO `news` (`title`, `preview`, `text`, `img`, `date`) VALUES('$title', '$preview', '$text', '$img', '$date')");
   
   $mysql->close();

   header('Location: ../index.php');
   exit();
?>