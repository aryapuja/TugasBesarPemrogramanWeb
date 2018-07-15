<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class AdminModel extends CI_Model {

		public function listAkun()
		{
			// $this->db->group_by("level");
			$this->db->order_by('level', 'asc');
			$query=$this->db->get('akun');
			return $query->result();
		}

		public function listDaftarCalon()
		{
			$query=$this->db->get('daftar_calon');
			return $query->result();
		}

		public function getBelum($status)
		{
			$this->db->where('memilih', $status);
			$query=$this->db->get('akun');
			return $query->result();
		}

		public function getAntri()
		{
			$query=$this->db->get('daftar_akun');
			return $query->result();
		}


		public function getAntriByNo($no,$tabel)
		{
			$this->db->where('no_ktm', $no);
			$query = $this->db->get($tabel);
			return $query->result();
		}

		public function getAntriById($no)
		{
			$this->db->where('id_akun',$no);
			$query = $this->db->get('daftar_calon');
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

		public function terimaCalon($no)
		{
			$data = array
					(
						'id_akun'=>$this->input->post('id_akun'),
						'nama_akun' =>$this->input->post('nama_akun'),
						'visi' =>$this->input->post('visi'),
						'misi' =>$this->input->post(nl2br('misi')),
						'jumlah_suara'=>'0',
						'foto'=>'no_image.png'
					);
			$this->db->where('id_akun', $no);
			$this->db->insert('calon', $data);
			$level = array('level'=>'calon');
			$this->db->where('id_akun', $no);
			$this->db->update('akun', $level);
		}

		public function hapus($no,$tabel)
		{
			$this->db->where('no_ktm', $no);
			$this->db->delete($tabel);
		}

		public function hapusCalon($id)
		{
			$this->db->where('id_akun', $id);
			$this->db->delete('daftar_calon');
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

		public function resetLevel()
		{
			$data = array('level'=>"pemilih",'memilih'=>'belum');
			$this->db->where('level', "calon");
			$this->db->update('akun', $data);
			$this->db->where('level', "pemilih");
			$this->db->update('akun', $data);
			$this->db->empty_table('calon');
		}

	}

/* End of file AdminModel.php */
/* Location: ./application/models/AdminModel.php */

?>