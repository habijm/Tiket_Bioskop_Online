<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie extends CI_Controller {

	public function index()
	{
    	$data['head'] = "H O M E";
    	$data['hasil1'] = $this->news_model->get_all();
		$data['hasil3'] = $this->news_cat_model->get_all();
		$tmp['konten'] = $this->load->view('welcome/movie',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}
