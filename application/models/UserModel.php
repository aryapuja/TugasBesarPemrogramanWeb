<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class UserModel extends CI_Model {
	
		public function getInfoById($id)
		{
			$this->db->where('id_akun', $id);
			$query = $this->db->get('akun');
			return $query->result();
		}
	
	}
	
	/* End of file UserModel.php */
	/* Location: ./application/models/UserModel.php */

?>