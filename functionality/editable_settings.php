<?php
require_once 'connection.php';
if(isset($_POST['phone_number']) && isset($_POST['email']) &&
    isset($_POST['location']) && isset($_POST['website']) && isset($_POST['education']) && isset($_POST['skills']))
{
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $website = $_POST['website'];
    $education = $_POST['education'];
    $skills = $_POST['skills'];

    $q ="DELETE FROM resume_data WHERE type = 'editable'";

    $result = mysqli_query($l, $q) or die("Error" . mysqli_error($l));

    $q ="INSERT INTO resume_data VALUES(NULL,'editable','$phone_number','$email','$location','$website','$education','$skills')";

    $result = mysqli_query($l, $q) or die("Error" . mysqli_error($l));

    mysqli_close($l);


    header('location:/index.php');
}

$q ="SELECT * FROM resume_data WHERE type='editable'";

$result = mysqli_query($l, $q) or die("Ошибка " . mysqli_error($l));

$content = $result->fetch_assoc();
mysqli_close($l);

