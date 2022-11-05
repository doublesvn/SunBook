<?php
    class Home_model{
        private $table = 'tb_buku';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getAllData(){
            $this->db->query('SELECT * FROM '.$this->table);
            return $this->db->resultSet();
        }

        public function getDataById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idbuku=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function uploadFoto(){
            $namaFile = $_FILES['foto_buku']['name'];
            $namaSementara = $_FILES['foto_buku']['tmp_name'];
            // tentukan lokasi file akan dipindahkan
            $dirUpload = "img/";
            // pindahkan file
            $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
            if ($terupload) {
                return true;
            } else {
                return false;
            }
        }

        public function updateStok($idbuku,$stokAkhir){
            $sql="UPDATE ".$this->table." SET stok='$stokAkhir' WHERE idbuku='$idbuku'";
            $this->db->query($sql);
            $this->db->execute();
        }

        
    }