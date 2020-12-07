<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addPelatihan extends AUTH_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai');
		$this->load->model('M_posisi');
		$this->load->model('M_kota');
    }

	public function index()
	{
        $data['userdata'] = $this->userdata;
		$data['dataPegawai'] = $this->M_pegawai->select_all();
		$data['dataPosisi'] = $this->M_posisi->select_all();
		$data['dataKota'] = $this->M_kota->select_all();

		$data['page'] = "tambahPelatihan";
		$data['judul'] = "Tambah Data Pelatihan";
		$data['deskripsi'] = "Tambah data pelatihan TerasAsuh sesuai kebutuhan";

		$data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pegawai', 'tambah-pegawai', $data);
		$this->template->views('pelatihan/pelatihan_add');
	}
}
