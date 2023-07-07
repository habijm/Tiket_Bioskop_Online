<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher extends CI_Controller {

	public function index()
	{
    $data['head'] = "H O M E";
		$tmp['konten'] = $this->load->view('welcome/voucher',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}
