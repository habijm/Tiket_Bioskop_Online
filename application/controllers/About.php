<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
    	$data['head'] = "H O M E";
    	$data['hasil'] = $this->about_model->get_all();
		$tmp['konten'] = $this->load->view('welcome/about',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}
