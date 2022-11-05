<?php
    class Transaksi_model{
        private $table = 'tb_transaksi';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function tambahTransaksi($idpelanggan,$idbuku,$nama_buku,$jml_item,$harga_total,$tanggal_pesan,$alamat){

            $this->db->query('SELECT (max(id_transaksi)+1) as maks_id FROM ' . $this->table);
            $data=$this->db->resultSet();
            foreach ($data as $rec){
            $id=$rec["maks_id"];}
            
            $this->db->query('INSERT INTO ' . $this->table . '(id_transaksi,id_pelanggan, idbuku,nama_buku,jml_item,harga_total,tanggal_pesan,alamat) 
            VALUES(:id_transaksi,:id_pelanggan, :idbuku, :nama_buku,:jml_item,:harga_total,:tanggal_pesan,:alamat)');
            $this->db->bind('id_transaksi',$id);
            $this->db->bind('id_pelanggan',$idpelanggan);
            $this->db->bind('idbuku',$idbuku);
            $this->db->bind('nama_buku',$nama_buku);
            $this->db->bind('jml_item',$jml_item);
            $this->db->bind('harga_total',$harga_total);
            $this->db->bind('tanggal_pesan',$tanggal_pesan);
            $this->db->bind('alamat',$alamat);
            $this->db->execute();

            
        }
    }