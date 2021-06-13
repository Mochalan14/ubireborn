<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
    <div class="container">
        <a class="navbar-brand col-8 font-weight-bold" >UbiCofee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col-4" id="navbarSupportedContent" >
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link font-weight-normal " href="<?= BASEURL;?>/beranda">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-normal " href="<?= BASEURL; ?>/beranda/keranjang/">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-normal" href="<?= BASEURL; ?>/home">LogOut</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="temp"></div>