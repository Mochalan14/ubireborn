<!-- Awal konten -->
    <div class="container">
        <div class="row jumbotron bg-white">
            <!-- Deskripsi -->
            <div class="col-md-8 mb-4">
                <h2 class="text-center">Apa itu Ubi Coffe?</h2>
                <img src="<?= BASEURL;?>/img/imgAbout2.png" class="img-fluid">
                <blockquote class="blockquote">
                    <p class="mb-0 mt-4" align="justify">Ubi Cofee inovasi Membangun infrastruktur yang tahan lama, mendukung industrialisasi yang inklusif dan berkelanjutan dan membantu perkembangan inovasi. merupakan website yang dapat digunakan untuk bisnis UMKM Anda. Dengan website ini, para pengguna dapat melakukan proses jual beli makanan atau minuman dengan lebih efisien. karena tidak perlu mengantri sehingga menimbulkan kerumunan. Selain itu website Ubi Coffe dapat diakses dengan berbagai device, seperti laptop,tablet,maupun smartphone. Maka dari itu jangan ragu lagi untuk menggunakan layanan dari website kami. Karena masa depan anda tergantung pilihan anda. Maju bersama, sukses bersama.</p>
                </blockquote>

            </div>

            <!-- Developer -->
            <div class="col-md-4">
                <h2 class="text-center">Developer</h2>
                <!-- Fiki -->
                <div class="card mb-4 p-3">
                    <img class="img-fluid mx-auto" src="<?= BASEURL;?>/img/ppfiki.webp" style="height: 180px; width: 180px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fiki Aviantono</h5>
                        <p class="card-text">NIM 192410102002</p>
                    </div>
                </div>
                <!-- Alan -->
                <div class="card p-3">
                    <img class="img-fluid mx-auto" src="<?= BASEURL;?>/img/ppalan.webp"  style="height: 180px; width: 180px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mochammad Maulana</h5>
                        <p class="card-text">NIM 192410102028</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Akhir konten -->

<!-- Awal form -->
<div class="container mb-5">
    <h3 class="text-center">Contact Form</h3>
    <form class="menengah">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subjek">Subjek</label>
            <input type="text" name="subjek" class="form-control">
        </div>
        <div class="form-group">
            <label for="pesan">Tuliskan Pesanmu</label>
            <textarea class="form-control" id="pesan" rows="3"></textarea>
        </div>

        <button class="btn btn-primary">Kirim</button>
    </form>
</div>