<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class User extends CI_Controller {
	
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
			$this->load->view('user/user');
		}

		public function editAkun($id)
		{
			$this->load->model('UserModel');
			$data['akun']=$this->UserModel->getInfoById($id);

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('user/editAkun',$data);
			} else {
				$this->UserModel->editAkun($id);
				echo "<script>alert('Informasi Akun Berhasil di Update!')</script>";
				$this->load->view('user/user');
			}
		}
	
	}
	
	/* End of file User.php */
	/* Location: ./application/controllers/User.php */

?>