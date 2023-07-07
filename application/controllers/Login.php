<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$data['head'] = "H O M E";
		$tmp['konten'] = $this->load->view('welcome/login', $data, TRUE);
		$this->load->view('template', $tmp);
	}

 	public function cek_login()
      {
            $e = $this->input->post('email');
            $pw = $this->input->post('password');

            $cek = $this->customer_model->verify($e,$pw);

            if (count($cek) > 0)
            {
                $id_user = $cek['CUSTOMER_ID'];

                $login = array(
                    'username_customer' => $e,
                    'login_customer' => $id_user,
                    'login_status' => TRUE
                );
                
                $this->session->set_userdata($login);
                redirect('profil', 'refresh');

            }
            else 
            {
                $this->session->set_flashdata('message','<br>Username atau Password Anda salah<br>');
                redirect('login','refresh');
            }
      }

      
}
