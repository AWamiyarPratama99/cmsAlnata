<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct(){
        parent:: __construct();
		if($this->session->userdata('level')=='Admin'){
			redirect('auth');
		}
    }
	public function index()
	{
		$data = array(
			'judul_halaman' => 'Dashboard'
		);
		$this->template->load('template_admin','admin/dashboard',$data);
	}
}