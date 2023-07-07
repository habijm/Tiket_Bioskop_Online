<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{

	public function index()
	{
		$data['head'] = "H O M E";
		$data['hasil'] = $this->transaksi_model->get_all();
		$tmp['konten'] = $this->load->view('welcome/riwayat', $data, TRUE);
		$this->load->view('template', $tmp);
	}
}
