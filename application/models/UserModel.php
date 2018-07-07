<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class UserModel extends CI_Model {
	
		public function getInfoById($id)
		{
			$this->db->where('id_akun', $id);
			$query = $this->db->get('akun');
			return $query->result();
		}

		public function editAkun($id)
		{
			$data = array
					(
						'id_akun'=>$this->input->post('id_akun'),
						'nama_akun' =>$this->input->post('nama_akun'),
						'visi' =>$this->input->post('visi'),
						'misi' =>$this->input->post(nl2br('misi')),
						'jumlah_suara'=>'0',
						'foto'=>'kosong'
					);
			$memilih = array('memilih'=>'tidak');
			$this->db->where('id_akun', $no);
			$this->db->insert('calon', $data);
			$this->db->where('id_akun', $no);
			$this->db->update('akun', $memilih);
		}
	
	}
	
	/* End of file UserModel.php */
	/* Location: ./application/models/UserModel.php */

?>