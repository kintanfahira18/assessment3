<?php

    require_once('koneksi.php');

    $username       = $_POST['username'];
    $email          = $_POST['email'];
    $no_handphone   = $_POST['no_handphone'];
    $address        = $_POST['address'];

    $query  = "INSERT INTO users(username, email, no_handphone, address) VALUES ('$username', '$email', '$no_handphone', '$address')";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql) {
        echo json_encode ( array('message' => 'Data created successfully!' ));
    } else {
        echo json_encode ( array('message' => 'Data failed to create' ));
    }
    echo $sql;
    header("location: http://localhost/WEB/assessment3/form_validation.php");
