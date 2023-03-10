<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "arif-todolist";

// $conn = mysqli_connect($servername, $username, $password, $database);

//Koneksi ke database menggunakan PDO

function koneksi(): PDO
{
    $host      = "localhost";
    $port      = 3306;
    $database  = "arif-todolist";
    $username  = "root";
    $password  = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}
//     try {
//     //code...
//     $con = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
//     echo "sukses";
// } catch (PDOExcaption $th) {
//     //throw $th;
//     $con = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
//     echo "gagal";
//     }

?>