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
          // mysqli_query("Select * form barang");
        return $this->db->get($this->_table)->result();
    }

    //menampilkan data berdasarkan kode
    public function getById($kdbarang) {
        // mysqli_query("Select * form barang where kdbarang = $");
        return $this->db->get_where($this->_table, ["kdbarang" => $kdbarang])->row();
    }

    //mengisikan data
    public function save() {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->stokbarang = $post["stokbarang"];
        $this->hargabarang = $post["hargabarang"];

        $this->db->insert($this->_table, $this);
    }

    public function update_data($where,$data,$table) {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function edit_data($where,$table){
       return $this->db->get_where($table,$where);
}

    public function delete($kdbarang) {
        
        return $this->db->delete($this->_table, array("kdbarang" => $kdbarang));
    }
    
}