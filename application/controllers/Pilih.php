<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Pilih extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('status')=='login') 
			{
				if($this->session->userdata('memilih')=='belum'){

				}else{
					echo "<script>alert('Hak suara anda telah digunakan!')</script>";
					redirect('User','refresh');
				}
			}else{	
				redirect('MainController','refresh');
			}
		}

		public function index()
		{
			$this->load->model('MainModel');
			$data['info_calon'] = $this->MainModel->getCalon();
			$this->load->view('user/viewPilih',$data);
		}

		public function vote($no_calon)
		{
			$this->load->model('UserModel');
			$this->UserModel->vote($no_calon,$this->session->userdata('id'));
			$this->session->unset_userdata('nama');
			$this->load->model('MainModel');
			$result=$this->MainModel->getInfoAkun($this->session->userdata('id'))->row();
			$memilih=$result->memilih;
			$this->session->set_userdata('memilih',$memilih);
			redirect('User','refresh');
		}
	
	}
	
	/* End of file Pilih.php */
	/* Location: ./application/controllers/Pilih.php */

?>