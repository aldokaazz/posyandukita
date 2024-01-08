<?php
Class M_Balita extends CI_Model{

	function tampil_data(){
		return $this->db->get('tbl_balita');
	}

	function tampil_data2(){
		$this->db->select('*');
		$this->db->from('tbl_balita');
		$this->db->JOIN('tbl_ortu','tbl_ortu.id_ortu=tbl_balita.id_ortu');
		$query = $this->db->get();
		return $query->result();
	}

	function tampil_data_perkembangan($where){
		$this->db->select('*');
		$this->db->from('tbl_balita');
		$this->db->JOIN('tbl_ortu','tbl_ortu.id_ortu=tbl_balita.id_ortu');
		$this->db->where('tbl_ortu.id_ortu = '.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function view_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function jumlah_balita(){
		$this->db->select('*');
		$this->db->from('tbl_balita');
		return $this->db->get()->num_rows();
	}

	function input_data_pertumbuhan_balita($data,$table){
		$this->db->insert($table,$data);
	}

	function join_data($where){
		$this->db->select('*');
		$this->db->from('tbl_pertumbuhan');
		$this->db->JOIN('tbl_balita','tbl_balita.id_balita=tbl_pertumbuhan.balita');
		$this->db->where('tbl_pertumbuhan.balita='.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function join_data2($where){
		$this->db->select('*');
		$this->db->from('tbl_pertumbuhan_balita');
		$this->db->JOIN('tbl_balita','tbl_balita.id_balita=tbl_pertumbuhan_balita.balita');
		$this->db->where('tbl_pertumbuhan_balita.balita='.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function join_data_pertumbuhan_front($where){
		$this->db->select('*');
		$this->db->from('tbl_pertumbuhan');
		$this->db->JOIN('tbl_balita','tbl_balita.id_balita=tbl_pertumbuhan.balita');
		$this->db->JOIN('tbl_ortu','tbl_ortu.id_ortu=tbl_balita.id_ortu');
		$this->db->where('tbl_pertumbuhan.balita='.$where);
		$query = $this->db->get();
		return $query->result();
	}
}