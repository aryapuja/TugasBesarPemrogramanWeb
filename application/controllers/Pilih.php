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
			$this->load->view('user/viewPilih');
		}
	
	}
	
	/* End of file Pilih.php */
	/* Location: ./application/controllers/Pilih.php */

?>