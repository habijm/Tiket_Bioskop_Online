<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Join extends CI_Controller
{

	public function index()
	{
		$data['head'] = "H O M E";
		$data['hasil'] = $this->theater_model->get_all();
		$tmp['konten'] = $this->load->view('welcome/join', $data, TRUE);
		$this->load->view('template', $tmp);
	}

	public function detail($id=0)
	{
		$data['head'] = "H O M E";
		$data['hasil']  = $this->theater_model->get_detail_by_id($id);	
		$tmp['konten'] = $this->load->view('kursi/detail',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}
