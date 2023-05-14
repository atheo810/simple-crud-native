<?php

$user = "root";
$server = "localhost";
$password = "";
$db = "crud_database";

$koneksi = mysqli_connect($server, $user, $password, $db);
if (!$koneksi) {
    echo "Koneksi Error : " . mysqli_connect_errno();
}
