<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeepTrance extends CI_Controller {
public function index(){
    
    
$this->load->view('umum/V_header');
$this->load->view('V_banner');
$this->load->view('V_service');
$this->load->view('V_choose');
$this->load->view('V_e-book');
$this->load->view('V_beranda');
}


public function data_banner(){
$query = $this->db->get('banner')->result();    

echo json_encode($query);
}

public function service_single(){
$this->load->view('umum/V_header_umum');
$this->load->view('V_service_single');  
}

public function get_book(){
if($this->input->post('id_ebook')){

$data = $this->db->get_where('data_ebook',array('id_ebook'=>$this->input->post('id_ebook')))->result();

echo json_encode($data);    
}    
}
public function simpan_user_download(){
if($this->input->post('nama')){
$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset']  = 'utf-8';
$config['mailtype'] = 'html';
$config['wordwrap'] = TRUE;

$input = $this->input->post();
$this->load->library('email',$config);

$this->email->set_newline("\r\n");
$this->email->set_mailtype("html");
$this->email->from('info@deeptranceinstitute.com', 'Admin DeepTrance');
$this->email->to($input['email']);
$this->email->subject('Link Download Buku');
$html = "<h3 style='padding: 2%; color: #fff; background-color:#050a52;' align='center'>Download Buku ".$input['buku']."</h3>"; 

$html .= "Terimakasih Telah Mengunjungi Web DeepTranceInstitute dan mengisi seluruh detail yang di perlukan "
        . "untuk mendownload Buku ".$input['buku']." dan berikut adalah link untuk mendownload di bawah ini"
        . "<br></br>"
        . ""
        ."".base_url('uploads/ebook/'.$input['ebook'])."";

$this->email->message($html);

if (!$this->email->send()){    

echo $this->email->print_debugger();

    
}else{
       


$data = array(
'nama'      => $input['nama'],
'email'     => $input['email'],
'institusi' => $input['institusi'],   
'buku'      => $input['buku'],
);

$this->db->insert('data_download',$data);
echo "berhasil";
}
}else{
redirect(404);    
}
    
}


}
