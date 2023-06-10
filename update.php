<?php

    require_once('koneksi.php');
    parse_str(file_get_contents('php://input'), $value);

    $id_user        = $value['id_user'];
    $username       = $value['username'];
    $email          = $value['email'];
    $no_handphone   = $value['no_handphone'];
    $address        = $value['address'];

    $query  =   "UPDATE users SET username='$username',
                                    email='$email',
                                    no_handphone='$no_handphone',
                                    address='$address'
                WHERE id_user='$id_user' "; 
    $sql    = mysqli_query($db_connect, $query);

    if ($sql) {
        echo json_encode ( array('message' => 'Data successfully updated!' ));
    } else {
        echo json_encode ( array('message' => 'Data failed to update' ));
    }
    echo $sql;
    header("location: http://localhost/WEB/assessment3/form_validation.php");  
  


?>