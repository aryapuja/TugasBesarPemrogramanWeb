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
			$this->load->view('admin/admin');
		}
	
	}
	
	/* End of file Admin.php */
	/* Location: ./application/controllers/Admin.php */

?>