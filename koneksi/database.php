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

class addData
{
    private $koneksi;

    public function __construct(DatabaseConnectionInterface $koneksi)
    {
        $this->koneksi = $koneksi->connect();
    }

    public function addDataUser($data)
    {
        $koneksi = $this->koneksi;

        $username = htmlspecialchars($data['username']);
        $email = htmlspecialchars($data['email']);
        $password = htmlspecialchars($data['password']);
        $passwordhash = hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO user VALUES(NULL, '$username','$email','$passwordhash')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
}
