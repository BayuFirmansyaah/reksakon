<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		 // Set zona waktu ke Asia/Jakarta
		 date_default_timezone_set('Asia/Jakarta');
		parent::__construct();
		$this->load->model('Auth_Model');
	}

	public function index()
	{
		$this->load->view('vw_login');
	}

	public function proses()
	{
		$username = strtoupper($this->input->post('username'));
		$password = $this->input->post('password');
        // var_dump($password);

        //$this->auth->login_user($username,$password)
		if($this->Auth_Model->login_user($username,$password))
		{
			redirect('Administrator');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('Login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('USERNAME');
		$this->session->unset_userdata('EMAIL');
        $this->session->unset_userdata('AVATAR');
		$this->session->unset_userdata('is_login');
		redirect('Home');
	}

	

}