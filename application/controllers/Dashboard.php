<?php

class Dashboard extends CI_Controller{
public function __construct() {
parent::__construct();
$this->load->library('upload');
$this->load->model('M_dashboard');
if(!$this->session->userdata('id_admin') && !$this->session->userdata('nama_admin')){
redirect(base_url('Login'));    
}
}

public function index(){
$this->load->view('umum/V_header_umum');
$this->load->view('dashboard/V_menu');
$this->load->view('dashboard/V_edit_banner');

}

public function keluar(){
$this->session->sess_destroy(); 
redirect(base_url('Login'));  
}

public function upload_banner(){
$config['upload_path'] = './uploads/banner/';
$config['allowed_types'] = 'gif|jpg|png';
$this->upload->initialize($config);

if ( ! $this->upload->do_upload('banner')){
echo $this->upload->display_errors();

}else{
$input = $this->input->post();
$data = array(
'text1' => $input['text1'],  
'text2' => $input['text2'],   
'text3' => $input['text3'],   
'title' => $input['title'],   
'banner' => $this->upload->data('file_name')    
);

$this->M_dashboard->simpan_banner($data);
redirect(base_url('Dashboard'));
}


}

public function hapus_banner(){
 
unlink('./uploads/banner/'.$this->uri->segment(4));    
$this->db->delete('banner',array('id_banner'=>$this->uri->segment(3)));
redirect(base_url('Dashboard'));
}

public function data_banner(){
$query = $this->db->get('banner')->result();    

echo json_encode($query);
}

public function service(){
$this->load->view('umum/V_header_umum');
$this->load->view('dashboard/V_menu');
$this->load->view('dashboard/V_service');
    
    
}

}