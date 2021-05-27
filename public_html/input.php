<?php
//echo "321";
require_once 'connection.php';
if(isset($_POST['firstName']) && isset($_POST['lastName']) &&
    isset($_POST['email']) && isset($_POST['password']) && isset($_POST['conf_password']))
{
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $reg_password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
//    echo $firstname." ".$lastname." ".$email." ".$reg_password." ".$conf_password;
    if ($reg_password != $conf_password){
        echo "Password not confirmed!";
        exit();
    }
    $reg_password = md5($reg_password);
    $full_name = $firstname.$lastname;
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

    // создание строки запроса
    $query ="INSERT INTO users VALUES(NULL, '$full_name','$email','$reg_password')";

    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }

    // закрываем подключение
    mysqli_close($link);
}
else
{
    echo "Введенные данные некорректны";
}
/*//$firstname = $lastname = $email = $password = $conf_password = "";
//    if($_SERVER["REQUEST_METHOD"] == 'GET'){
$firstname = $_GET('firstName');
$lastname = $_GET('lastName');
$email = $_GET('email');
$password = $_GET('password');
$conf_password = $_GET('conf_password');
//    }  else {
echo "NULL";
//    }
echo "lol";
echo $firstname." ".$lastname." ".$email." ".$password." ".$conf_password;
/*
*/

