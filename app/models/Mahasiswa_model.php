<?php

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
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
