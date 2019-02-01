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
$this->load->view('V_banner');

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

public function service(){
$this->load->view('umum/V_header_umum');
$this->load->view('dashboard/V_menu');
$this->load->view('dashboard/V_service');   
$this->load->view('V_service');   
}
public function simpan_service(){
if($this->input->post('judul')){
$input = $this->input->post();

$config['upload_path']          = './uploads/background_service/';
$config['allowed_types']        = 'gif|jpg|png';
$config['encrypt_name']         = TRUE;
$this->upload->initialize($config);


if (!$this->upload->do_upload('background')){
    
echo print_r(($this->upload->display_errors()));
    
}else{

$data = array(
'judul'              =>$input['judul'],    
'title'              =>$input['title'],    
'icon'               =>$input['icon'],    
'background_service' =>$this->upload->data('file_name'),    
'isi_service'        =>$input['isi_service'],    
);
$this->M_dashboard->simpan_service($data);

redirect(base_url('Dashboard/service'));    
}
}else{
redirect(404);    
}
}
public function hapus_service($id){
$this->db->delete('data_service',array('id_service'=>$id));
redirect(base_url('Dashboard/service'));
    
}


public function e_book(){
$this->load->view('umum/V_header_umum');
$this->load->view('dashboard/V_menu');
$this->load->view('dashboard/V_ebook');   
$this->load->view('V_e-book');   
}

public function simpan_ebook(){
if($this->input->post('judul_buku')){
$input = $this->input->post();

$config['upload_path']          = './uploads/cover_ebook/';
$config['allowed_types']        = 'gif|jpg|png';


$this->upload->initialize($config);

if (!$this->upload->do_upload('cover')){
    
echo print_r(($this->upload->display_errors()));
    
}else{
    
$cover                           = $this->upload->data('file_name');
$config2['upload_path']          = './uploads/ebook/';
$config2['allowed_types']        = 'pdf';


$this->upload->initialize($config2);

if (!$this->upload->do_upload('ebook')){
    
echo print_r(($this->upload->display_errors()));
        
}else{    
$data = array(
'judul_buku'              =>$input['judul_buku'],    
'penulis'                 =>$input['penulis'],    
'deskripsi'               =>$input['deskripsi'],    
'cover'                   =>$cover,    
'ebook'                   =>$this->upload->data('file_name'),    
);

$this->M_dashboard->simpan_ebook($data);
}
redirect(base_url('Dashboard/e_book'));    
}  
}else{
redirect(404);    
}    
    
}

public function hapus_ebook($id){
$this->db->delete('data_ebook',array('id_ebook'=>$id));
redirect(base_url('Dashboard/e_book'));
    
}

}