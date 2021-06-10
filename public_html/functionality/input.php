<?php
$l = require_once 'connection.php';
    $data = json_decode(file_get_contents('php://input'), true);
    $firstname = $data['firstName'];
    $lastname = $data['lastName'];
    $email = $data['email'];
    $reg_password = $data['password'];
    $conf_password = $data['conf_password'];
    if ($reg_password != $conf_password){
        echo "Password not confirmed!";
        exit();
    }
    $reg_password = md5($reg_password);
    $full_name = $firstname.$lastname;
    $check_user = mysqli_query($l, "INSERT INTO users VALUES(NULL, '$full_name','$email','$reg_password')");

    $_SESSION['user'] = [
       "id" => $user['id'],
       "name" => $user['name'],
       "password" => $user['password']
    ];
    $data = [
      'success' => true,
      'user' => [
           "id" => $user['id'],
           "name" => $user['name'],
           "password" => $user['password']
      ]
    ];
    header('Content-Type: application/json');
    echo json_encode($data);
    $_SESSION["name"] = $full_name;
    exit();


