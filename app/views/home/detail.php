<section id="card" class="card bg-light py-4">        
        <div class="container p-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light">
                  <li class="breadcrumb-item"><a href="<?= BASEURL;?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page" id="namaBuku" name="namaBuku"><?= $data['idbuku']['nama_buku']?></li>
                </ol>
              </nav>
            <div class="row mb-4">
                <div class="col-md">
                  <form action="<?= BASEURL; ?>/home/checkout" method="POST">
                    <div class="card shadow p-3 mb-5" >
                        <img class="card-img-top" src="<?= BASEURL ?>/img/<?= $data['idbuku']['foto_buku']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <input hidden class ="card-title" type="text" id="namaBuku" name="namaBuku" value="<?= $data['idbuku']['nama_buku']?>">
                            <input hidden class ="card-title" type="text" id="idbuku" name="idbuku" value="<?= $data['idbuku']['idbuku']?>">
                            <h5 class="card-title" id="namaBuku" name="namaBuku"><?= $data['idbuku']['nama_buku']?></h5>
                            <input hidden class ="card-title" type="text" id="stok" name="stok" value="<?= $data['idbuku']['stok']?>">
                            <input hidden class ="card-title" type="text" id="hargaBuku" name="hargaBuku" value="<?= $data['idbuku']['harga']?>">
                            <h3 class="card-title" id="hargaBuku" name="hargaBuku" >Rp. <?= $data['idbuku']['harga']?></h3>
                           
                        </div>
                        <div class="form p-1">
                            <div class="form-group">
                                <select class="form-control col-md-2" id="jml_item" name="jml_item">
                                    <option value=1>Jumlah Item</option>
                                    <?php
                                        $i = 1;
                                        $total =$data['idbuku']['stok'];
                                        while($i<=$total){
                                          echo "<option value='".$i."'>".$i."</option>";
                                          $i++;
                                        }
                                    ?>
                                  </select><br>
                                  <?php 
                                      if($total == 0){
                                  ?>
                                      <p class="btn btn-danger">STOK HABIS</p><br>
                                      
                            </div>
                            <div class="form-group">
                                <button disabled type="submit" class="btn btn-outline-secondary btn-lg col-md-2 m-1" id="btnBeli" data-bs-toggle="modal" data-bs-target="#exampleModal">Beli</button>
                            
                            <?php }else{?>
                              
                                <button  type="submit" class="btn btn-outline-secondary btn-lg col-md-2 m-1" id="btnBeli" data-bs-toggle="modal" data-bs-target="#exampleModal">Beli</button>
                              </div>
                            
                            <?php }?>
                          </div>
                        </div>
                      </form>
            </div>
          </div>
      </section>