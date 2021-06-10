<?php
    $l = require_once 'connection.php';
    $data = json_decode(file_get_contents('php://input'), true);
    $username = $data['username'];
    $log_password = $data['password'];
    $log_password = md5($log_password);
    $check_user = mysqli_query($l, "SELECT * FROM users WHERE name = '$username' AND password = '$log_password'");
    if(mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
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
        $_SESSION['name'] = $username;
        exit();

    } else {
        $data = [
            'success' => false,
        ];
    }

