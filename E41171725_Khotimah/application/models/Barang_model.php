<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {
    private $_table = "barang";
    public $kdbarang;
    public $nama;
    public $deskripsi;
    public $stokbarang;
    public $hargabarang;

    public function rules() {
        return [

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required'],

            ['field' => 'stokbarang',
            'label' => 'Stokbarang',
            'rules' => 'numeric'],

            ['field' => 'hargabarang',
            'label' => 'Hargabarang',
            'rules' => 'numeric']
        ] 
        ;
    }

    //menampilkan DB
    public function getAll() {
        return $this->db->get($this->_table)->result();
    }

    //menampilkan data berdasarkan kode
    public function getById($kdbarang) {
        return $this->db->get_where($this->_table, ["kdbarang" => $kdbarang])->row();
    }

    //mengisikan data
    public function save() {
        $post = $this->input->post();
        $this->kdbarang = uniqid();
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->stokbarang = $post["stokbarang"];
        $this->hargabarang = $post["hargabarang"];

        $this->db->insert($this->_table, $this);
    }

    public function update() {
        $post = $this->input->post();
        $this->kdbarang = $post["kdbarang"];
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->stokbarang = $post["stokbarang"];
        $this->hargabarang = $post["hargabarang"];

        $this->db->update($this->_table, array("kdbarang" => $post["kdbarang"]));
    }

    public function delete($kdbarang) {
        
        return $this->db->delete($this->_table, array("kdbarang" => $kdbarang));
    }
    
}