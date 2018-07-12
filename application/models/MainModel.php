<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class MainModel extends CI_Model {
	
		public function getCalon()
		{
			$query=$this->db->get('calon');
			return $query->result();
		}

		public function getInfoCalon($id)
		{
			$this->db->select('no_calon, id_akun, nama_akun, foto, visi, misi');
			$this->db->where('id_akun', $id);
			$query = $this->db->get('calon');
			return $query->result();
		}

		public function getAkun($table,$where)
		{
			return $this->db->get_where($table,$where);
		}

		public function getInfoAkun($id)
		{
			$this->db->select('id_akun, nama_akun, level, memilih');
			$this->db->where('id_Akun',$id);
			return $this->db->get('akun');
		}

		public function regisAkun()
		{
			$password = md5($this->input->post('password'));
			$data = array
					(
						'no_ktm'=>$this->input->post('no_ktm'),
						'id_akun'=>$this->input->post('id_akun'),
						'password'=>$password,
						'nama_akun' =>$this->input->post('nama_akun')
					);
			$this->db->insert('daftar_akun', $data);
		}
	}
	
	/* End of file MainModel.php */
	/* Location: ./application/models/MainModel.php */
?>