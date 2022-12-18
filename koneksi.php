<?php
    $servername = "localhost";
    $username = "root"; // sesuaikan dengan username db masing-masing
    $password = ""; // sesuaikan dengan password db masing-masing
    $dbname   = "db_beasiswa";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if($conn){
    //   echo "Koneksi Berhasil";
    }

    mysqli_select_db($conn, $dbname);
?>