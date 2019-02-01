<?php 

class M_dashboard extends CI_Model{

public function simpan_banner($data){
$this->db->insert('banner',$data);
}

public function simpan_service($data){    
$this->db->insert('data_service',$data);    
}

public function simpan_ebook($data){
$this->db->insert('data_ebook',$data);        
}

}