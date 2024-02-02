<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('is_login') != true){
            redirect('Login');
        }

		$this->load->model('Anggota_model');
	}
	
	public function index()
	{
		$data['page'] = 'dashboard_view';
		$data['total_anggota'] = $this->Anggota_model->get_total_rows(); 
        $this->load->view('template', $data);
		//$this->load->view('dashboard_view');
	}
}
