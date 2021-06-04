<?php

//echo "321";
require_once 'connection.php';
if (isset($_GET['username']) && isset($_GET['password'])) {
    //   echo "true";
    $username = $_GET['username'];
    $log_password = $_GET['password'];
    $log_password = md5($log_password);
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

    $result_1=$link->query("SELECT * FROM users WHERE `name`='$username' AND `password`='$log_password'");

    $username=$result_1->fetch_assoc();
//    var_dump($username);
    if(count($username)==0)
    {
        header('location:../pages/registration.php');
        exit();
    }
    //   echo "lol";
    session_start();

    $_SESSION["name"] = $username;
    $_SESSION["password"] = $log_password;
    header('location:/index.php');
    /*var_dump($_SESSION["name"]);
    var_dump($_SESSION["password"]);
    echo "Данные сохранены в сессии";
*/

//    $link->close();
    // закрываем подключение
    mysqli_close($link);
} /*else {
    //echo "Введенные данные некорректны";
}*/

