<?php 

class M_dashboard extends CI_Model{

public function simpan_banner($data){


$this->db->insert('banner',$data);



}


}