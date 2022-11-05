  
    <section id="card" class="card bg-light" style="padding-top:140px;padding-bottom:100px">
      <div class="container mb-4">
        <div class="col text-center pb-4">
          <h4>Belanja</h4>
        </div>
        <div class="row mb-4" >
          <?php foreach ($data['idbuku'] as $bk) :?>
            <div class="col-md">
              <div class="card shadow p-3 mb-5" style="width: 18rem;">
                <a href="<?= BASEURL; ?>/home/detail/<?= $bk['idbuku'] ?>"><img class="card-img-top" src="<?= BASEURL ?>/img/<?= $bk['foto_buku']; ?>" alt="Card image cap" width="300px"></a>
                <div class="card-body">
                  <p class="card-title"><?= $bk['nama_buku']?></p>
                  <h4 class="card-title"><?= $bk['harga']?></h4>
                  <?php 
                    if($bk['stok'] == 0){
                  ?>
                  <p class="btn btn-danger">STOK HABIS</p><br>
                  <?php }?>
                </div>
            </div>
            </div>
            <?php endforeach; ?>
        </div>
        
         
    </section>
    