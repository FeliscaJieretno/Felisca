<?php

class M_adat extends CI_Model{

	public function __construct() {
        parent::__construct();
    }

		public function list_adatbudaya(){
			$this->db->select('*');
			$this->db->from('adatbudaya');
			$this->db->order_by("tgl_edit","desc");
			$query=$this->db->get();
      return $query;
    }

		public function inputAdatBudaya($fotopath){
        $data = array(
        		'nama_adat' =>  $this->input->post('inputJudul'),
            'deskripsi' => $this->input->post('inputIsi'),
						'tgl_edit' => $this->input->post('inputTanggal'),
            'link_foto' =>  $fotopath
                );
        $this->db->insert( 'adatbudaya', $data );
        return $this->db->affected_rows() > 0;
    }

		public function lihatAdat($id) {
				$condition = "id_adatbudaya =" . "'" . $id . "'";
				$this->db->select('*');
				$this->db->from('adatbudaya');
				$this->db->where($condition);
				$this->db->limit(1);
				$query = $this->db->get();

				if ($query->num_rows() == 1) {
						return $query->result();
				} else {
						return false;
				}
		}

		public function hapusAdatBudaya($id){
			$this->db->where('id_adatbudaya', $id);
			$this->db->delete('adatbudaya');
		}

}
