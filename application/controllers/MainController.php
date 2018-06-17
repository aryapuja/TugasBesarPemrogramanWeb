<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class MainController extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$this->load->model('MainModel');
			$data['calon_list'] = $this->MainModel->getCalon();
			$this->load->view('home', $data);
		}

		public function login()
		{
			$this->load->model('MainModel');
			$id_akun = $this->input->post('id_akun');
			$password = $this->input->post('password');
			$where = array(
				'id_akun' => $id_akun,
				'password' => md5($password)
			);
			$cek = $this->MainModel->getAkun("akun",$where)->num_rows();
			if($cek > 0){
				$result=$this->MainModel->getInfoAkun($id_akun)->row();
				$nama=$result->nama_akun;
				$level=$result->level;
				$array = array(
					'name' => $nama,
					'level' => $level
				);
				$this->session->set_userdata( $array );
	 			$this->load->view('sukses');
			}else{
				// $this->load->view('gagal');
				echo "<script>alert('Akun yang anda masukkan salah.\\nperiksa kembali username dan password anda!')</script>";
				redirect('','refresh');
			}

		}

		public function addAkun()
		{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->load->model('MainModel');
			$this->form_validation->set_rules('no_ktm', 'Nomor KTM', 'trim|required|min_length[]|max_length[16]');
			$this->form_validation->set_rules('id_akun', 'ID Akun', 'trim|required|min_length[4]|max_length[12]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[12]');
			$this->form_validation->set_rules('nama', 'Nama Akun', 'trim|required|min_length[1]|max_length[255]');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('register');
			} else {
				$this->MainModel->regisAkun();
				echo "<script>alert('Akun anda berhasil terdaftar')</script>";
				redirect('','refresh');
			}
		}

	}

	/* End of file MainController.php */
	/* Location: ./application/controllers/MainController.php */
?>