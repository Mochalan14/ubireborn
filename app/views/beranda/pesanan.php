
<div class="container">
    <div class="row p-5 m-0">
        <div class="col-md-12 text-center">
            <h1>Daftar Pesanan</h1>
            <p>List Makanan dan Minuman yang anda pesan :</p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah Item</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['prd'] as $prd ) :?>
                        <tr>
                            <th scope="row"><?=  $prd['nama'] ?></th>
                            <td><?= $prd['harga']?></td>
                            <td><?= $prd['jumlah_item']?></td>
                            <td><?= $prd['total']?></td>
                            <td> <a href="<?= BASEURL; ?>/beranda/hapus/<?= $prd['id'] ?>/<?= $data['idn']['orderId'];?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Meja</th>
                    <th scope="col">Total Item</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Next Step</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($data['ttl'] as $odr ) :?>
                            <th scope="row"><?= $data['idn']['nama']?></th>
                            <td><?= $data['idn']['meja']?></td>
                            <td><?= $odr['totalItem'];?></td>
                            <td><?= $odr['totalHarga'];?></td>
                            <th scope="col">
                             <a href="<?= BASEURL; ?>" class="btn btn-primary" onclick="return confirm('Silahkan Menunggu Pesanan akan segera dikirim kan');">Kirim</a>
                            </th>
                        <?php endforeach;?>
                    </tr>
                </tbody>
            </table>

</div>
