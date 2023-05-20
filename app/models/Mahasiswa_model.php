<?php

class Mahasiswa_model
{
    private $dbh; //database handler 
    private $stmt;

    public function __construct()
    {
        //data source name 
        $dsn = "mysql:host=localhost;dbname=datapercobaan";
        try {
            $this->dbh = new PDO($dsn, 'root', '');
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }

    public function getAllMahasiswa()
    {
         $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
         $this->stmt->execute();
         return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
