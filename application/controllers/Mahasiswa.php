<?php
	class Mahasiswa extends CI_Controller{
		public function index(){
			$this->load->model('mahasiswa_model');
			
			$mhs = new Mahasiswa_Model();
			$data["daftarmhs"] = $mhs->getDaftarMahasiswa();
			
			$this->load->view('daftar_mahasiswa',$data);
		}
		
		public function tambah(){
			$this->load->view('input_mahasiswa');
		}
		
		public function tambah_proses(){
			$nim 		= $this->input->post('nim');
			$nama 		= $this->input->post('nama');
			$kelamin 	= $this->input->post('jeniskelamin');
			$alamat 	= $this->input->post('alamat');
			$tempat 	= $this->input->post('tempatlahir');
			$tanggal 	= $this->input->post('tgllahir');
			$bulan 		= $this->input->post('blnlahir');
			$tahun 		= $this->input->post('thnlahir');
			
			$this->load->model('mahasiswa_model');
			
			$mhs = new Mahasiswa_Model();
			$status = $mhs->simpanMhsBaru($nim,$nama,$kelamin,$alamat,$tempat,$tanggal,$bulan,$tahun);
			
			if($status == TRUE)
				redirect(base_url());
			else
				redirect('mahasiswa/tambah');
		}
	}
?>