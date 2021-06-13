<?php

class User_model{
    private $db;
    private $nama;
    private $meja;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function tambahUser($data)
    {
        $query = " INSERT INTO pesanan
                    VALUES 
                    ('',:nama, :meja) ";
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('meja',$data['meja']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function setPesanan($data){
        $this->nama = $data['nama'];
        $this->meja = $data['meja'];
    }

    public function getNama(){
        return $this->nama;
    }

    public function getMeja(){
        return $this->meja;
    }

    public function getIdOrder(){
        $this->db->query('SELECT * FROM `pesanan` ORDER BY `orderId` DESC LIMIT 1');
        return $this->db->single();
    }
}