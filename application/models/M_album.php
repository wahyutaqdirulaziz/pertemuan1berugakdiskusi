<?php


class M_album extends CI_Model{
    public function getalbum(){
        return $this->db->get('album')->result();
    }
   
    public function getbyid($id){

          
      
            return $this->db->get_where('sound', ["album_id" => $id])->result();
      
    }

    public function cari()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from sound where judul like '%$cari%' ");
		return $data->result();
	}
   
}