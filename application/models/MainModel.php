<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class MainModel extends CI_Model {
	
		public function getCalon()
		{
			$query=$this->db->get('calon');
			return $query->result();
		}

		public function getAkun($table,$where)
		{
			return $this->db->get_where($table,$where);
		}

		public function getInfoAkun($id)
		{
			$this->db->select('nama_akun, level');
		    // $this->db->from('akun');
		    $this->db->where('id_Akun',$id);
		    return $this->db->get('akun');
		}
	}
	
	/* End of file MainModel.php */
	/* Location: ./application/models/MainModel.php */
?>