<?php
    $Host_name = "db_dari_redlock";
    $User_name = "user";
    $Password = "admin";
    $Database_name = "redlock-db";
    
    
    $connect = new mysqli($Host_name, $User_name, $Password, $Database_name);
    
    if ($connect->connect_error) {
      die("Connection gagal: " . $connect->connect_error);
    }

    $quer = "SELECT * as total_users FROM Users";
    $hasil = $connect->query($quer);

    if ($hasil) {

        $row = $hasil->fetch_assoc();
        $jumlah = $row["total_users"];

        echo "Total users: " . $jumlah;
    } else {
        echo "Database kosong: " . $connect->error;
    }

    $connect->close();
?>