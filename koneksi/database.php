<?php

class Database
{
    private $koneksi;

    public function __construct(DatabaseConnectionInterface $koneksi)
    {
        $this->koneksi = $koneksi->connect();
    }

    public function query($sql)
    {
        // koneksi database 
        $koneksi = $this->koneksi;

        // Query
        $result = mysqli_query($koneksi, $sql);

        // cek Query
        if (!$result) {
            throw new Exception("Query database Gagal");
        }

        return $result;
    }
}
