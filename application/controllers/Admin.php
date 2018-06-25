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
			$data['info_calon'] = $this->MainModel->getCalon();
			$this->load->view('admin/home',$data);
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
			$data['antri'] = $this->AdminModel->listAkun();
			$this->load->view('admin/listAkun', $data);
		}

		public function terimaAkun($no)
		{
			$this->load->model('AdminModel');
			$this->form_validation->set_rules('no_ktm', 'Nomor KTM', 'trim');
			$data['antri'] = $this->AdminModel->getAntriByNo($no);

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/konfirmasiAkun',$data);
			} else {
				$this->AdminModel->terimaAkun($no);
				$this->AdminModel->hapusAntri($no);
				echo "<script>alert('Akun telah berhasil ditambahkan!')</script>";

				$data['antri'] = $this->AdminModel->getAntri();
				$this->load->view('admin/listAntri', $data);
			}

		}
	}
	
	/* End of file Admin.php */
	/* Location: ./application/controllers/Admin.php */

?>