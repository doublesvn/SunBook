<?php 
    session_start();
    class Home extends Controller{
        public function index(){
            $data['nama'] = "SunBook";
            $data['title'] = "Halaman Home";
            $data['idbuku'] = $this->model('Home_model')->getAllData();
            $this->view('templates/header',$data);
            $this->view('home/index',$data);
            $this->view('templates/footer',$data);
        }

        public function detail($id){
            $data['title'] = 'Detail Barang';
            $data['idbuku'] = $this->model('Home_model')->getDataById($id);
            $this->view('templates/header', $data);
            $this->view('home/detail', $data);
            $this->view('templates/footer');
        }

        public function belanja(){
            $data['nama'] = "SunBook";
            $data['title'] = "Belanja";
            $data['idbuku'] = $this->model('Home_model')->getAllData();
            $this->view('templates/header', $data);
            $this->view('home/belanja', $data);
            $this->view('templates/footer');                
            
        }

        public function checkout(){
            if(!isset($_SESSION['login'])){
                $this->view('templates/header');
                $this->view('login/login');
                $this->view('templates/footer');
            }else{
                $this->view('templates/header');
                $this->view('home/checkout');
                $this->view('templates/footer');
            }

            
        }

        public function simpanTransaksi(){
            $idpelanggan = $_POST['idPelanggan'];
            $idbuku = $_POST['idbuku'];
            $nama_buku = $_POST['namaBuku'];
            $jml_item = $_POST['jml_item'];
            $harga_total = $_POST['harga_total'];
            $alamat = $_POST['alamat'];
            $namaPenerima = $_POST['nama_penerima'];
            $provinsi = $_POST['provinsi'];
            $kode_pos = $_POST['kode_pos'];
            $no_hp = $_POST['no_hp'];
            $stok = $_POST['stok'];

            $stokAkhir = $stok-$jml_item;


            date_default_timezone_set('Asia/Jakarta');
            $detAlamat = $namaPenerima . " " . $alamat . " " . $provinsi . " " . $kode_pos . " " . $no_hp;
            $tanggal_pesan = date('y-m-d h:i:s');
            
            $this->model('Home_model')->updateStok($idbuku, $stokAkhir);

            $data['id_transaksi'] = $this->model('Transaksi_model')->tambahTransaksi($idpelanggan,$idbuku,$nama_buku,$jml_item,$harga_total,$tanggal_pesan,$detAlamat);
            
            header('location:../home/transaksi');
        }

        public function transaksi(){
            $this->view('templates/header');
            $this->view('home/transaksi');
            $this->view('templates/footer');
        }

        public function login(){
            $this->view('templates/header');
            $this->view('login/login');
            $this->view('templates/footer');
        }
        public function checkLogin(){
            
            $username = $_POST['username'];
            $pass = $_POST['pass'];

            $this->model('Login_model')->checkLogin($username,$pass);

            
                header('location:../home');
            
            
        }

        public function daftar(){
            $this->view('templates/header');
            $this->view('login/tambah');
            $this->view('templates/footer');
        }

        public function tambah(){
            
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $pass = $_POST['pass'];

            $this->model('Login_model')->simpanAkun($nama,$username,$pass);
            session_start();
            header('location:../home');
        }

        public function logout(){

            session_start();
            session_destroy();

            header('location:../home');
        }
    }
?>