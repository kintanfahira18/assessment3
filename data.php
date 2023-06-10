<?php

    require_once('koneksi.php');
    header('Content-Type: application/json');

    $query  = "SELECT * FROM users ORDER BY id_user ASC";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql) {
        $result = array();
        while ($row = mysqli_fetch_array($sql)) {
            array_push( $result, array(
                'id_user'       => $row['id_user'],
                'username'      => $row['username'],
                'email'         => $row['email'],
                'no_handphone'  => $row['no_handphone'],
                'address'       => $row['address'],
            ));
        }

        echo json_encode ($result);
    }
    


?>