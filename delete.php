<?php

    require_once('koneksi.php');
    parse_str(file_get_contents('php://input'), $value);

    $id_user = $value['id_user'];

    $query  = "DELETE FROM users WHERE id_user='$id_user' ";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql) {
        echo json_encode ( array('message' => 'Data successfully deleted!' ));
    } else {
        echo json_encode ( array('message' => 'Data failed to delete' ));
    }
    
  


?>