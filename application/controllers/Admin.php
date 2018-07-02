<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Admin extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('status')=='login') 
			{
				
			}else{	
				redirect('MainController','refresh');
			}
			
		}

		public function index()
		{
			$this->load->model('MainModel');
			$this->load->model('AdminModel');
			$data['info_calon'] = $this->MainModel->getCalon();
			$data['belum'] = $this->AdminModel->getBelum('belum');
			$data['sudah'] = $this->AdminModel->getBelum('sudah');
			$data['jmlhBlm'] = count($data['belum']);
			$data['jmlhSdh'] = count($data['sudah']);
			$this->load->view('admin/home',$data);
		}

		public function listAntriCalon()
		{
			$this->load->model('AdminModel');
			$data['calon'] = $this->AdminModel->listDaftarCalon();
			$this->load->view('admin/listDaftarCalon', $data);
		}

		public function listAntri()
		{
			$this->load->model('AdminModel');
			$data['antri'] = $this->AdminModel->getAntri();
			$this->load->view('admin/listAntri', $data);
		}
		
		public function listAkun()
		{
			$this->load->model('AdminModel');
			$data['akun'] = $this->AdminModel->listAkun();
			$this->load->view('admin/listAkun', $data);
		}

		public function terimaAkun($no)
		{
			$this->load->model('AdminModel');
			$this->form_validation->set_rules('no_ktm', 'Nomor KTM', 'trim');
			$data['antri'] = $this->AdminModel->getAntriByNo($no,'daftar_akun');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/konfirmasiAkun',$data);
			} else {
				$this->AdminModel->terimaAkun($no);
				$this->AdminModel->hapus($no,'daftar_akun');
				echo "<script>alert('Akun telah berhasil ditambahkan!')</script>";

				$data['antri'] = $this->AdminModel->getAntri();
				$this->load->view('admin/listAntri', $data);
			}
		}

		public function terimaCalon($no)
		{
			$this->load->model('AdminModel');
			$this->form_validation->set_rules('id_akun', 'ID Akun', 'trim');
			$data['antri'] = $this->AdminModel->getAntriById($no);

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/konfirmasiCalon',$data);
			} else {
				$this->AdminModel->terimaCalon($no);
				$this->AdminModel->hapusCalon($no);
				echo "<script>alert('Akun telah berhasil ditambahkan!')</script>";

				$data['calon'] = $this->AdminModel->listDaftarCalon();
			$this->load->view('admin/listDaftarCalon', $data);
			}
		}

		public function tolakCalon($id)
		{
			$this->load->model('AdminModel');
			$this->AdminModel->hapusCalon($id);
			echo "<script>alert('berhasil dihapus!')</script>";
			$data['calon'] = $this->AdminModel->listDaftarCalon();
			$this->load->view('admin/listDaftarCalon', $data);
		}

		public function tolakAkun($no)
		{
			$this->load->model('AdminModel');
			$this->AdminModel->hapus($no,'daftar_akun');
			echo "<script>alert('Akun telah berhasil dihapus!')</script>";
			$data['antri'] = $this->AdminModel->getAntri();
			$this->load->view('admin/listAntri', $data);
		}

		public function hapusAkun($no)
		{
			$this->load->model('AdminModel');
			$this->AdminModel->hapus($no,'akun');
			echo "<script>alert('Akun telah berhasil dihapus!')</script>";
			$data['antri'] = $this->AdminModel->listAkun();
			$this->load->view('admin/listAkun', $data);
		}

		public function waktu()
		{
			$this->load->model('AdminModel');
			$data['waktu'] = $this->AdminModel->getWaktu();
			$this->load->view('admin/waktu', $data);
		}

		public function aturWaktu($waktu)
		{
			$this->load->model('AdminModel');
			$this->form_validation->set_rules('mulai', 'Tanggal Mulai', 'trim');
			$this->form_validation->set_rules('selesai', 'Tanggal Selesai', 'trim');
			$data['waktu'] = $this->AdminModel->aturWaktu($waktu);

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/aturWaktu',$data);
			} else {
				$this->AdminModel->updateWaktu($waktu);
				echo "<script>alert('Waktu Berhasil Dirubah!')</script>";

				$data['waktu'] = $this->AdminModel->getWaktu();
				$this->load->view('admin/waktu', $data);
			}
		}

	}
	
	/* End of file Admin.php */
	/* Location: ./application/controllers/Admin.php */

?>