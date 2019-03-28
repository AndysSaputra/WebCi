<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helloword extends CI_Controller {
public function index(){
    $data = $this->db->query("SELECT * FORM mahasiswa");
    foreach ($data->result_array() as $mahasiswa){
        echo "Nama : ".$mahasiswa['nama']."<br/>";
        echo "Alamat : ".$mahasiswa['alamat']."<hr/>";
    }
}
}