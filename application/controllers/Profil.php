<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index($id=0)
	{
    	$data['head'] = "H O M E";
    	$data['hasil']  = $this->customer_model->get_all($id);
		$tmp['konten'] = $this->load->view('welcome/profil',$data,TRUE);
		$this->load->view('template',$tmp);
	}


}
