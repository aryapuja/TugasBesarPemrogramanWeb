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
			$data['info_calon'] = $this->MainModel->getCalon();
			$this->load->view('home2',$data);
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
				$id_akun=$result->id_akun;
				$nama=$result->nama_akun;
				$level=$result->level;
				$memilih=$result->memilih;
				$array = array(
					'id' => $id_akun,
					'nama' => $nama,
					'level' => $level,
					'memilih' => $memilih,
					'status' => 'login'
				);
				$this->session->set_userdata($array);
				if ($level == 'admin') {
	 				redirect('Admin','refresh');
				}else{
					redirect('User','refresh');
				}

			}else{
				echo "<script>alert('Akun yang anda masukkan salah.\\nperiksa kembali username dan password anda!')</script>";
				redirect('','refresh');
			}

		}

		public function logout()
		{
			// $this->session->unset_userdata('logged_in');
			$this->session->sess_destroy();
			redirect('MainController','refresh');
		}

		public function addAkun()
		{
			$this->load->model('MainModel');
			$this->form_validation->set_rules('no_ktm', 'Nomor KTM', 'trim|required|max_length[15]|is_unique[akun.no_ktm]|is_unique[daftar_akun.no_ktm]');
			$this->form_validation->set_rules('id_akun', 'ID Akun', 'trim|required|min_length[4]|max_length[12]|is_unique[akun.id_akun]|is_unique[daftar_akun.id_akun]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[12]');
			$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'trim|required|min_length[4]|max_length[12]|matches[password]');
			$this->form_validation->set_rules('nama_akun', 'Nama Akun', 'trim|required|min_length[1]|max_length[255]');
			if ($this->form_validation->run() == FALSE) {
				// echo "<script>alert('Terdapat kesalahan dalam pendaftaran, silahkan cek kembali data yang ada masukkan')</script>";
				$this->load->view('register3');
			} else {
				$this->MainModel->regisAkun();
				echo "<script>alert('Permintaan pendaftaran berhasil dikirim.\\nJika dalam 2x24 jam belum dapat login, hubungi admin')</script>";
				redirect('','refresh');
			}
		}

	}

	/* End of file MainController.php */
	/* Location: ./application/controllers/MainController.php */
?>