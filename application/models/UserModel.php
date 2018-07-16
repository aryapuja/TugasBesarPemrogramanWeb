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
			$data = array('nama_akun' =>$this->input->post('nama_akun'));
			$this->db->where('id_akun', $id);
			$this->db->update('akun', $data);
			$this->db->where('id_akun', $id);
			$this->db->update('calon', $data);
		}

		public function vote($no_calon,$id_akun)
		{
			$this->db->where('no_calon', $no_calon);
			$this->db->set('jumlah_suara','jumlah_suara+1',FALSE);
			$this->db->update('calon');
			$this->db->where('id_akun', $id_akun);
			$this->db->set('memilih','sudah');
			$this->db->update('akun');
		}

		public function editCalonFoto($id)
		{
			$data = array
					(
						'visi' =>$this->input->post('visi'),
						'misi' =>$this->input->post(nl2br('misi')),
						'foto' =>$this->upload->data('file_name')
					);
			$this->db->where('id_akun', $id);
			$this->db->update('calon', $data);
		}

		public function editCalon($id)
		{
			$data = array
					(
						'visi' =>$this->input->post('visi'),
						'misi' =>$this->input->post(nl2br('misi'))
					);
			$this->db->where('id_akun', $id);
			$this->db->update('calon', $data);
		}

		public function daftarCalon()
		{
			$data = array
					(
						'id_akun' =>$this->input->post('id_akun'),
						'nama_akun' =>$this->input->post('nama_akun'),
						'Visi' =>$this->input->post('visi'),
						'Misi' =>$this->input->post(nl2br('misi')),
						'Ipk' =>$this->input->post('ipk'),
						'lampiran' =>$this->upload->data('file_name')
					);
			$this->db->insert('daftar_calon', $data);
		}
	}
	
	/* End of file UserModel.php */
	/* Location: ./application/models/UserModel.php */

?>