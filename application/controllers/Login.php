<?php 

class Login extends CI_Controller{
public function __construct() {
parent::__construct();
$this->load->model('M_login');

if($this->session->userdata('id_admin') && $this->session->userdata('nama_admin')){
    redirect(base_url('Dashboard'));    
}
}

public function index(){
$this->load->view('umum/V_header_umum');        
$this->load->view('V_login');        
}

public function proses_login(){
$query = $this->M_login->proses_login($this->input->post('email'),$this->input->post('password'));

$statis = $query->row_array();
if($query->num_rows() >0){
    
$data = array(
'id_admin'   => $statis['email'],    
'nama_admin' => $statis['nama_admin']    
);   
$this->session->set_userdata($data);

echo "berhasil";   
}else{
echo "gagal";    
}

}


}
