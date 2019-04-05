<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_controller extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->model("barang_model");
        $this->load->library('form_validation');
    }
    public function index() {
        $data["barang"] = $this->barang_model->getAll();
        $this->load->view("admin/barang/list", $data);
    }
    public function add() {
        $barang = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->save();
            $this->session->set_flashdata('succes', 'Berhasil disimpan');
        }
        $this->load->view("admin/barang/new_form");
    }
    public function update() {
        /*if (!isset($id)) redirect('admin/barang');

        $barang = $this->barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());
        
        if ($validation->run()) {
            $barang->update();
            $this->session->set_flashdata('succes', 'Berhasil disimpan');
        }

        $data["barang"] = $barang->getById($id);
        if (!$data["barang"]) show_404();

        $this->load->view("admin/barang/edit_form", $data);*/
        $kdbarang = $this->input->post('kdbarang');
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $stokbarang = $this->input->post('stokbarang');
        $hargabarang = $this->input->post('hargabarang');

        $data = array(
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'stokbarang' => $stokbarang,
            'hargabarang' => $hargabarang

        );
        $where = array(
            'kdbarang' => $kdbarang
        );

        $this->barang_model->update_data($where,$data,'barang');
        redirect('barang_controller/index');
    }
    function edit($kdbarang){
        $where = array('kdbarang'=> $kdbarang);
        $data['barang'] = $this->barang_model->edit_data($where,'barang')->result();
        $this->load->view('admin/barang/edit_form',$data);
    }

    public function delete($id=null) {
        if (!isset($id)) show_404();

        if ($this->barang_model->delete($id)) {
            redirect(site_url('barang_controller'));
        }
    }
}