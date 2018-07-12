<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Calon extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('status')=='login') 
			{
				$current_controller = $this->router->fetch_class();
				$this->load->library('Acl');
				if(!$this->acl->is_public($current_controller)){
					if(!$this->acl->is_allowed($current_controller,$this->session->userdata('level'))){
						echo '<script>alert("Hanya akun calon yang bisa mengakses halaman ini")</script>';
						redirect('User','refresh');
					}
				}
			}else{	
				redirect('MainController','refresh');
			}
		}

		public function index()
		{
			// $this->load->model('MainModel');
			// $data['info_calon'] = $this->MainModel->getInfoCalon($id);
			// $this->load->view('user/viewCalon',$data);
		}

		public function editInfoCalon($id)
		{
			$this->load->model('MainModel');

			$this->form_validation->set_rules('visi', 'Visi', 'trim|required');
        	$this->form_validation->set_rules('misi', 'Misi', 'trim|required');

        	$data['info_calon'] = $this->MainModel->getInfoCalon($id);
        	if ($this->form_validation->run() == FALSE) {
        		$this->load->view('user/viewCalon',$data);
        	}else{
        		$this->load->model('UserModel');
        		$config['upload_path'] = './assets/upload/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']  = 10000000; //kb
				$config['max_width']  = 10240; //pixel
				$config['max_height']  = 7680; //pixel
				$this->upload->initialize($config);

				$this->load->library('upload', $config);
				if ( !$this->upload->do_upload('foto')){
					$this->UserModel->editCalon($id);
					echo '<script>alert("Data Calon Berhasil di Update")</script>';
					redirect('User','refresh');
				}else{
					//resize
					$upload_data = $this->upload->data();
					$config['image_library'] = 'gd2';
			        $config['source_image'] = $upload_data['full_path'];
			        $config['maintain_ratio'] = FALSE;
			        $config['width']     = 500;
			        $config['height']   = 500;

			        $this->load->library('image_lib', $config); 

			        $this->image_lib->resize();

					$this->UserModel->editCalonFoto($id);
					echo '<script>alert("Data dan Foto Calon Berhasil di Update")</script>';
					redirect('User','refresh');
				}
        	}
		}
	
	}
	
	/* End of file calon.php */
	/* Location: ./application/controllers/calon.php */

?>