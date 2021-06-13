<div class="container">
    <form action="<?= BASEURL;?>/beranda/tambah" method="post">
        <div class="form-group">
            <label for="id">ID Produk</label>
            <input type="text" class="form-control" id="id" name="id" value="<?= $data['prd']['id'];?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama">Nama Produk</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['prd']['nama'];?>" readonly>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $data['prd']['harga'];?>" readonly>
        </div>
        <div class="form-group">

            <input type="hidden" class="form-control" id="orderId" name="orderId" value="<?= $data['idn']['orderId'];?>" readonly>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required >
        </div>

        <button type="submit" class="btn btn-primary">Pesan</button>
    </form>
</div>
