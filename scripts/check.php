<?php

session_start();

$login = htmlspecialchars(filter_var(trim($_POST['login'])));
$name = htmlspecialchars(filter_var(trim($_POST['name'])));
$password = htmlspecialchars(filter_var(trim($_POST['password'])));

$_SESSION['error'] = "";

if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    $_SESSION['error'] = "Логин должен содержать минимум 5 символов";
    header("Location: ../pages/registration.php");
    exit();
} else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    $_SESSION['error'] = "Недопустимая длина имени (не менее 3 символов)";
    header("Location: ../pages/registration.php");
    exit();
} else if (mb_strlen($password) < 6 || mb_strlen($password) > 16) {
    $_SESSION['error'] = "Пароль должен содержать минимум 6 символов";
    header("Location: ../pages/registration.php");
    exit();
}

$password = md5($password . "fjsrshzfdk4664");

$mysqli = new mysqli('localhost', 'root', 'root', 'register-bg');

$check_stmt = $mysqli->prepare("SELECT * FROM users WHERE login = ?");
$check_stmt->bind_param("s", $login);
$check_stmt->execute();
$check_result = $check_stmt->get_result();

if ($check_result->num_rows > 0) {
    $_SESSION['error'] = "Пользователь с таким логином уже зарегистрирован. Пожалуйста, войдите в аккаунт.";
    $check_stmt->close();
    $mysqli->close();
    header("Location: ../pages/registration.php");
    exit();
}

$check_stmt->close();

$insert_stmt = $mysqli->prepare("INSERT INTO users (login, password, name) VALUES (?, ?, ?)");
$insert_stmt->bind_param("sss", $login, $password, $name);
$insert_stmt->execute();

$insert_stmt->close();
$mysqli->close();

header("Location: ../pages/authorization.php");
exit();

?>