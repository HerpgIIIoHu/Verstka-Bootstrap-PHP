<?php
require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
$email1 = $_POST['email'];
$password1 = $_POST['psw'];
$query = "SELECT `Email`, `Pass` FROM `people` WHERE `Email` = .$email1. AND `Pass` = .$password1.";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    echo "Все заебись";
}
else{
    echo "Такого пользователя не существует";
}
mysqli_close($link);
?>