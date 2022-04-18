<?php
include_once 'Connection.php'; //Database Connection Link

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO users (vorname,  nachname, user_email, user_id, user_pwd) VALUES
('$first', '$last', '$email',  '$email', '$uid', '$pwd'); ";

mysqli_query($conn, $sql);

header("Location: index.php?signup=success");
 ?>
