<?php
    $Host_name = "db_dari_redlock";
    $User_name = "user";
    $Password = "admin";
    $Database_name = "redlock-db";
    
    
    $connect = new mysqli($Host_name, $User_name, $Password, $Database_name);
    
    if ($connect->connect_error) {
      die("Connection gagal: " . $connect->connect_error);
    }
    
    $quer = "SELECT ID, Nama, Alamat, Jabatan FROM Users";
    $hasil = $connect->query($quer);
    
    if ($hasil->num_rows > 0) {
    
      while($row = $hasil->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " | Name: " . $row["Nama"]. " | Alamat: " . $row["Alamat"]. " | Jabatan: " . $row["Jabatan"]. "<br>";
      }
    } else {
      echo "Database Kosong";
    }
    $connect->close();
?> 