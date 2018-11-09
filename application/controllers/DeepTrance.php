<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeepTrance extends CI_Controller {
public function index(){
$this->load->view('umum/V_header');
$this->load->view('umum/V_banner');
$this->load->view('V_beranda');
}
}
