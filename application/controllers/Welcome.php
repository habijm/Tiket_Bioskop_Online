<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['head'] = "H O M E";
		$tmp['konten'] =  $this->load->view('welcome/home',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}
