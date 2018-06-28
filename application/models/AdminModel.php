<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class AdminModel extends CI_Model {

		public function getAntri()
		{
			$query=$this->db->get('daftar_akun');
			return $query->result();
		}

		public function listAkun()
		{
			// $this->db->group_by("level");
			$this->db->order_by('level', 'asc');
			$query=$this->db->get('akun');
			return $query->result();
		}

		public function getAntriByNo($no)
		{
			$this->db->where('no_ktm', $no);
			$query = $this->db->get('daftar_akun');
			return $query->result();
		}

		public function terimaAkun($no)
		{
			$data = array
					(
						'no_ktm'=>$this->input->post('no_ktm'),
						'id_akun'=>$this->input->post('id_akun'),
						'password'=>$this->input->post('password'),
						'nama_akun' =>$this->input->post('nama_akun'),
						'level'=>'pemilih',
						'memilih'=>'belum'
					);
			$this->db->where('no_ktm', $no);
			$this->db->insert('akun', $data);
		}

		public function hapusAntri($no)
		{
			$this->db->where('no_ktm', $no);
			$this->db->delete('daftar_akun');
		}

		public function hapusAkun($no)
		{
			$this->db->where('no_ktm', $no);
			$this->db->delete('akun');
		}

		public function getWaktu()
		{
			$query=$this->db->get('waktu');
			return $query->result();
		}

		public function aturWaktu($waktu)
		{
			$query=$this->db->get('waktu');
			return $query->result();
		}

		public function updateWaktu($waktu)
		{
			$data = array
                    (
                        'mulai'=>$this->input->post('mulai'),
                        'selesai'=>$this->input->post('selesai')
                    );
            $this->db->where('mulai', $waktu);
            $this->db->update('waktu', $data);
		}

	}

/* End of file AdminModel.php */
/* Location: ./application/models/AdminModel.php */

?>