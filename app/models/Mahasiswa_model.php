<?php

class Mahasiswa_model {
    private $dbh;//database handler
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchALl(PDO::FETCH_ASSOC);
    }
}

 /* private $mhs = [
        [
            "nama" => "Bob",
            "nrp" => "143141123",
            "email" => "bob@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Doni",
            "nrp" => "133221123",
            "email" => "doni@gmail.com",
            "jurusan" => "Teknik Mesin"
        ],
        [
            "nama" => "Budi",
            "nrp" => "042041122",
            "email" => "budi@gmail.com",
            "jurusan" => "Teknik Industri"
        ],

    ]; kalau menggunakan array*/ 
