<?php
    require_once '../config/connect.php';
    print_r($_POST);
    $email = $_POST['email'];
    $token = $_POST['APItoken'];

    if(mb_strlen($email) < 1 || mb_strlen($token) < 1) {
        echo "недопустимо";
        exit();
    }
    mysqli_query($connect, "INSERT INTO `forms` (`id`, `email`, `APItoken`) VALUES (NULL, '$email', '$token')");

    header('location: /');





