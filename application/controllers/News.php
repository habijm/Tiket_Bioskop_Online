<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');

class News extends CI_Controller
{
	//digunakan untuk menampilkan list berita
	public function index()
	{
		$data['head'] = "N E W S";
		$data['hasil'] = $this->news_model->get_all();
		$tmp['konten'] = $this->load->view('news/home',$data,TRUE);
		$this->load->view('template',$tmp);
	}

	//digunakan untuk menampilkan detail berita
	public function detail($id=0)
	{
		$data['head'] = "N E W S - Detail";
		$data['hasil']  = $this->news_model->get_detail_by_id($id);
		$data['hasil2']  = $this->theater_model->get_all($id);
		$data['hasil3']  = $this->theater_model->get_detail_by_id($id);
		$tmp['konten'] = $this->load->view('news/detail',$data,TRUE);
		$this->load->view('template',$tmp);
	}

	
}
?> 