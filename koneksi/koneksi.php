<?php

interface DatabaseConnectionInterface
{
    public function connect();
}

class MySQLConnection implements DatabaseConnectionInterface
{
    public function connect()
    {
        $user = "root";
        $server = "localhost";
        $password = "";
        $db = "crud_database";

        // koneksi ke database MySQL database
        $koneksi = mysqli_connect($server, $user, $password, $db);

        // cek Koneksi
        if (!$koneksi) {
            throw new Exception('Koneksi gagal');
        }
        return $koneksi;
    }
}
