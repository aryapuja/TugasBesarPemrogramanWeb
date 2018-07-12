<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Daftar extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('status')=='login') 
			{
				if($this->session->userdata('level')=='pemilih'){

				}else{
					echo "<script>alert('Anda sudah menjadi Calon!')</script>";
					redirect('User','refresh');
				}
			}else{	
				redirect('MainController','refresh');
			}

		}

		public function daftarCalon()
		{
			$this->load->model('MainModel');

			$this->form_validation->set_rules('id_akun', 'ID Akun', 'trim|required|is_unique[calon.id_akun]|is_unique[daftar_calon.id_akun]');
			$this->form_validation->set_rules('visi', 'Visi', 'trim|required');
			$this->form_validation->set_rules('misi', 'Misi', 'trim|required');
			$this->form_validation->set_rules('ipk', 'IPK', 'trim|required|min_length[1]|max_length[5]');

        	if ($this->form_validation->run() == FALSE) {
        		$this->load->view('user/viewDaftar');
        	}else{
        		$this->load->model('UserModel');
        		$config['upload_path'] = './assets/upload/';
				$config['allowed_types'] = 'pdf';
				$config['max_size']  = 10000000; //kb
				$this->upload->initialize($config);

				$this->load->library('upload', $config);
				if ( !$this->upload->do_upload('pdf')){
					$this->load->view('user/viewDaftar',$data);
				}else{
					$this->UserModel->daftarCalon();
					echo '<script>alert("Pendaftaran sebagai calon berhasil.\\nHasil Seleksi bisa dilihat 3 hari sebelum pemilihan")</script>';
					redirect('User','refresh');
				}
        	}
		}
	
	}
	
	/* End of file Daftar.php */
	/* Location: ./application/controllers/Daftar.php */

?>