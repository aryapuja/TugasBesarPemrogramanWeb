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


	}

	/* End of file MainController.php */
	/* Location: ./application/controllers/MainController.php */
?>