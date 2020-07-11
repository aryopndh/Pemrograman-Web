<?php

class Model_hunian extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_hunian');
	}

	public function tambah_hunian($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_hunian($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where, $tabel)
    {
        $this->db->where($where);
        $this->db->delete($tabel);
    }

    public function detail_hunian($id_hunian)
    {
    	$result = $this->db->where('id_hunian',$id_hunian)->get('tb_hunian');
    	if($result->num_rows() > 0){
    		return $result->result();
    	}else {
    		return false;
    	}
    }
}