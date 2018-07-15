<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class User extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('status')=='login') 
			{
				$this->session->unset_userdata('nama');
				$this->load->model('MainModel');
				$result=$this->MainModel->getInfoAkun($this->session->userdata('id'))->row();
				$nama=$result->nama_akun;
				$this->session->set_userdata('nama',$nama);
			}else{	
				redirect('MainController','refresh');
			}
			
		}

		public function index()
		{
			$this->load->model('MainModel');
			$data['info_calon'] = $this->MainModel->getCalon();
			$this->load->model('AdminModel');
			$data['waktu'] = $this->AdminModel->getWaktu();
			$this->load->view('user/home',$data);
		}

		public function editAkun($id)
		{
			$this->load->model('UserModel');
			$this->UserModel->editAkun($id);
			echo "<script>alert('Informasi Akun Berhasil di Update!')</script>";
			// $this->load->model('MainModel');
			// $data['info_calon'] = $this->MainModel->getCalon();
			// $this->load->view('user/home',$data);
			redirect('User','refresh');
		}
	
	}
	
	/* End of file User.php */
	/* Location: ./application/controllers/User.php */

?>