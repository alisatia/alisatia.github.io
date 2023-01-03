<?php

    $koneksi = mysql_connect("sql6.freesqldatabase.com","sql6587693","PTC2tuRsMN","sql6587693");

    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        $sql = "SELECT * FROM user";
        $query = mysqli_query($koneksi, $sql);
        $array_data = array();
        while ($data = mysqli_fetch_assoc($query)) {
            $array_data[] = $data;
        }
        echo json_encode($array_data);
    }

?>