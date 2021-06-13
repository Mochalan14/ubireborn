<div class="container">
      <h3 class="text-center mt-3 mb-3">Our Product</h3>
      <div class="row mb-3 justify-content-center">
          <?php foreach ($data['prd'] as $prd ) :?>
        <!-- makanan 1 -->
        <div class="col-lg-3 col-md-6">
          <div class="card mb-4">
              <div class="d-block align-content-center mx-auto mt-3" style="height: 150px; width: 150px;">
                  <?php
                  echo '<img class="img-fluid mx-auto" src="data:image/jpeg;base64,'.base64_encode( $prd['gambar'] ).'" />';
                  ?>
              </div>
            <div class="card-body">
                <h5 class="card-title"><?= $prd['nama'];?></h5>
                <h5 class="card-title"><?= $prd['harga'];?></h5>
              <a href="<?= BASEURL?>/beranda/detail/<?=$prd['id'];?>" class="btn btn-primary bi bi-bag-plus" >Tambah</a>
            </div>
          </div>
        </div>
          <?php endforeach;?>
      </div>
</div>

