<?php
require_once 'connection.php';
//echo $_POST['phone_number'];
if(isset($_POST['phone_number']) && isset($_POST['email']) &&
    isset($_POST['location']) && isset($_POST['website']) && isset($_POST['education']) && isset($_POST['skills']))
{
//    echo "true";
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $website = $_POST['website'];
    $education = $_POST['education'];
    $skills = $_POST['skills'];
//    echo $email." ".$website;
    $l = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($l));

    // создание строки запроса
    $q ="DELETE FROM resume_data WHERE type = 'editable'";

    // выполняем запрос
    $result = mysqli_query($l, $q) or die("Error" . mysqli_error($l));
    // подключаемся к серверу
    $l = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($l));

    // создание строки запроса
    $q ="INSERT INTO resume_data VALUES(NULL,'editable','$phone_number','$email','$location','$website','$education','$skills')";

    // выполняем запрос
    $result = mysqli_query($l, $q) or die("Error" . mysqli_error($l));

    // закрываем подключение
    mysqli_close($l);
}
else
{
//    echo "Введенные данные некорректны";
}

$l = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($l));

// создание строки запроса
$q ="SELECT * FROM resume_data WHERE type='editable'";

// выполняем запрос
$result = mysqli_query($l, $q) or die("Ошибка " . mysqli_error($l));

$content = $result->fetch_assoc();
// закрываем подключение
mysqli_close($l);

