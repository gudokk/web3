<?php
$mysqli = new mysqli("localhost", "root", "root", "register-bg");
$id = $_GET['id'];
$stmt = $mysqli->prepare("DELETE FROM news WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
header("Location: ../index.php");
?>
