<?php
require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
$pass = $_POST['psw'];
$pass2 =  $_POST['pswTwo'];
echo $pass.$pass2;
if($pass == $pass2){
    // $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    // if($result)
    // {
    //  echo "Вы успешно зарегестрировались!";
     
    // }
}
else{
    echo "Password not correct";
    
}

mysqli_close($link);
?>