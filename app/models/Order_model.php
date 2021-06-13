<?php

class Order_model{
    private $table = 'order_details';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahOrder($data)
    {
        $query = " INSERT INTO order_details
                    VALUES 
                    (:orderId,:id, :jumlah_item) ";
        $this->db->query($query);
        $this->db->bind('orderId',$data['orderId']);
        $this->db->bind('id',$data['id']);
        $this->db->bind('jumlah_item',$data['jumlah']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function getAllOrder($data)
    {
        $this->db->query('SELECT od.id as id ,nama,harga,jumlah_item, (harga * jumlah_item) as total FROM `order_details` od INNER JOIN produk p on od.id=p.id WHERE od.orderId = :orderId');
        $this->db->bind('orderId',$data['orderId']);
        return $this->db->resultSet();
    }
    public function getTotal($data){
        $this->db->query('SELECT SUM(jumlah_item) as totalItem, SUM(harga * jumlah_item) as totalHarga FROM `order_details` od INNER JOIN produk p on od.id=p.id WHERE od.orderId = :orderId');
        $this->db->bind('orderId',$data['orderId']);
        return $this->db->resultSet();
    }

    public function hapusOrder($id,$orderId){
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id AND orderId=:orderId ');
        $this->db->bind('orderId',$orderId);
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}