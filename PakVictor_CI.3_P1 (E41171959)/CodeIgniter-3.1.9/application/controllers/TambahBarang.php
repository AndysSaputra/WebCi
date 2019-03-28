<?php 


class TambahBarang extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Barang_model');
		$this->load->helper('url');

	}

	function index(){
		$data['barang'] = $this->Barang_model->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('admin/register');
	}

	function tambah_aksi(){
		$kodebarang = $this->input->post('kodebarang');
		$nama_barang = $this->input->post('nama_barang');
		$deskripsi = $this->input->post('deskripsi');
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');

		$data = array(
			'kdbarang' => $kodebarang,
			'nama' => $nama_barang,
			'deskripsi' => $deskripsi,
			'stok' => $stok,
			'harga' => $harga,
			);
		$this->Barang_model->input_data($data,'barang');
		redirect('tambahbarang');
	}
	function edit($kdbarang){
	$where = array('kdbarang' => $kdbarang);
	$data['barang'] = $this->Barang_model->edit_data($where,'barang')->result();
	$this->load->view('v_edit',$data);
	}

	function edit_aksi(){
	$kodebarang = $this->input->post('kdbarang');
	$nama_barang = $this->input->post('nama');
	$deskripsi = $this->input->post('deskripsi');
	$stok = $this->input->post('stok');
	$harga = $this->input->post('harga');

	$data = array(
		'nama' => $nama_barang,
		'deskripsi' => $deskripsi,
		'stok' => $stok,
		'harga' => $harga
	);

	$where = array(
		'kdbarang' => $kodebarang
	);

	$this->Barang_model->update_data($where,$data,'barang');
	redirect('tambahbarang/index');
	}

}