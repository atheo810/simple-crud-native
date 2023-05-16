<?php

include "encrypt.php";

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
    private $psr;

    public function __construct(DatabaseConnectionInterface $koneksi, encrypt $psr)
    {
        $this->koneksi = $koneksi->connect();
    }

    public function addDataUser($data)
    {
        $koneksi = $this->koneksi;

        $firstname = htmlspecialchars($data['fname']);
        $lastname = htmlspecialchars($data['fname']);
        $fullname = $firstname . $lastname;

        $username = htmlspecialchars($data['username']);
        $email = htmlspecialchars($data['email']);
        $password = htmlspecialchars($data['password']);

        $psr = $this->psr->psrEncrypt($password);

        $query = "INSERT INTO user VALUES(NULL, '$fullname', '$username','$email','$psr')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
}
