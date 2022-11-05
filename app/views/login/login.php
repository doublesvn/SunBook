
    <div class="container" style="padding-top:200px;padding-bottom:110px">
        <div class="col text-center pb-4">
            <h4 class="text-center">Form Login</h4>
        </div>
            <form action="<?= BASEURL?>/home/checkLogin" method="POST" class="form-group">
                <div class="card shadow p-5 mb-5">
                    
                    <div class="col-md-12 p-2">
                    <label class="form-label">Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username anda">
                    </div>
                    </div>
                    <div class="col-md-12 p-2">
                    <label class="form-label">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukkan password anda">
                    </div>
                    </div>
                    <div class="col-md-12 p-2">
                    <?php 
                        if(isset($_GET['user'])){
                            if($_GET['user'] == 0){
                            echo "<h6 class='text-danger'>Username atau Password salah</h6>";
                            }
                        }
                        ?>
                    </div>
                    <div class="col-md-12 p-2">
                        <button type="submit" class="btn btn-lg btn-light">Login</button>
                        <button type="reset" class="btn btn-lg btn-light">Batal</button>
                    </div>
                    <div class="col-md-12 p-2 text-center">
                        <p>Belum Punya Akun? <a href="<?= BASEURL ?>/home/daftar">Daftar Disini</a></p>
                        
                    </div>
                    
                    </div>
                </form>
                
            
      
      
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    