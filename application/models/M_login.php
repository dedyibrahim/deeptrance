<?php 

class M_login extends CI_Model{

public function proses_login($email,$password){
$query = $this->db->get_where('user',array('email'=>$email,'password'=>md5($password)));
return $query;
}


}