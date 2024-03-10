<?php

$mysqli = new mysqli("localhost", "root", "root", "register-bg");

$title = $_POST['title'];
$preview = $_POST['preview'];
$text = $_POST['text'];
$img = $_POST['img'];
$date = $_POST['date'];

$stmt = $mysqli->prepare("INSERT INTO news (id, title, preview, text, img, date) VALUES (NULL, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssss", $title, $preview, $text, $img, $date);

$stmt->execute();

$stmt->close();

header("Location: ../index.php");

?>