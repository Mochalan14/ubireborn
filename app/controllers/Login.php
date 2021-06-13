<?php

class Login extends Controller {
    public function index(){
        $data['judul'] = "Login Page";
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }
    public function tambah(){
//        var_dump($_POST);
        if($this->model('User_model')->tambahUser($_POST) > 0) {
            header('location: '. BASEURL . '/beranda');
        }
    }
}