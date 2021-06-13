
<!-- Awal Form Login -->
<div class="container mt-5 mb-5 formLogin">
    <div class="row justify-center">
        <div class="col-md-6 mb-3">
            <img src="<?= BASEURL;?>/img/imgLogin.png" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h3>Sebelum Pesan, Login Dulu Yaa..</h3>
            <form method="POST" action="<?= BASEURL;?>/login/tambah">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="meja">Nomer Meja</label>
                    <input type="text" name="meja" class="form-control" id="meja" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" name="cekbok" class="form-check-input" required>
                    <label for="cekbok" class="form-check-label">inget aku bila deket kamu</label>
                </div>
                <button type="submit" class="btn btn-primary">Masuk</button>
            </form>
        </div>
    </div>
</div>
<!-- Akhir Form Login -->