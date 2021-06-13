<?php

class Beranda extends Controller {
    public function index(){
        $data['judul'] = "Beranda menu";
        $data['prd']= $this->model('Produk_model')->getAllProduk();
        $this->view('templates/header2', $data);
        $this->view('beranda/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = "Detail";
        $data['prd']= $this->model('Produk_model')->getProdukById($id);
        $data['idn'] = $this->model('User_model')->getIdOrder();
        $this->view('templates/header2', $data);
        $this->view('beranda/detail', $data);

    }
    public function keranjang(){
        $data['judul'] = "Detail";

        $data['idn'] = $this->model('User_model')->getIdOrder();
        $data['prd']= $this->model('Order_model')->getAllOrder($data['idn']);
        $data['ttl'] = $this->model('Order_model')->getTotal($data['idn']);

        $this->view('templates/header2', $data);
        $this->view('beranda/pesanan', $data);

    }
    public function tambah(){
        if($this->model('Order_model')->tambahOrder($_POST) > 0) {
            header('location: '. BASEURL . '/beranda');
        }
    }
    public function hapus($id,$orderId){
        if($this->model('Order_model')->hapusOrder($id,$orderId) > 0) {
            header('location: '. BASEURL . '/beranda/keranjang');
        }
    }
}