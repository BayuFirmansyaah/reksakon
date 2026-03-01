<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	function __construct()
	{
		 // Set zona waktu ke Asia/Jakarta
		 date_default_timezone_set('Asia/Jakarta');
		parent::__construct();
		$this->load->model('Auth_Model');
		//$this->Auth_Model->cek_login();
	}

	public function index()
	{
		$this->load->view('vw_register');
	}

	public function cannot_access(){
		$this->load->view('vw_404_not_access');
	}

	public function nord_404(){
		$this->load->view('404/nord_404');
	}
	public function proses()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('email', 'nama', 'trim|required|min_length[1]|max_length[255]');


		//var_dump($foto);


		if ($this->form_validation->run() == true) {
			$username = strtoupper($this->input->post('username'));
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$foto = $_FILES['foto'];

			//$this->auth->register($username, $password, $email);
			//KHUSUS FOTO

			if (empty($_FILES['foto']['name'])) {
				//echo "FOTO KOSONG";
			} else {
				//echo "ADA FOTO";


				if ($foto = '') {
				} else {
					//$this->auth->foto_upload($_FILES['foto'], $username);
					$config['upload_path'] = 'fls/fotokaryawan/ori/';
					$config['allowed_types'] = 'jpg|png|gif';

					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('foto')) {
						echo "Upload Gagal";
						die();
					} else {
						//$foto=$this->upload->data('file_name');
						// Mendapatkan informasi file yang diupload
						$data = $this->upload->data();
						$namaFile = $data['file_name'];
						$pemisah = explode(".", $namaFile);

						// Menentukan nama file baru
						$namaFileBaru = $username . "." . $pemisah[1]; // Ganti 'prefix_' sesuai dengan prefix yang diinginkan

						// Mengganti nama file pada server
						$tujuan = 'fls/fotokaryawan/ori/' . $namaFileBaru;
						rename($data['full_path'], $tujuan); // Menggunakan fungsi rename()

						// Atau menggunakan fungsi move_uploaded_file() jika rename() tidak berfungsi
						// move_uploaded_file($data['full_path'], $tujuan);

						// Menyimpan nama file baru ke dalam variabel $foto untuk digunakan sesuai kebutuhan
						$foto = $namaFileBaru;

						$this->Auth_Model->change_size_foto($username, $pemisah[1]);
					}
				}
			}
			//
			// if($foto=''){

			// }else{

			//$this->auth->foto_upload($foto, $username);

			// }
			//KHUSUS FOTO

			//var_dump($email);
			$this->Auth_Model->register($username, $password, $email);
			$this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
			redirect('login');
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}

	public function do_upload()
	{
		$config['upload_path']          = 'fls/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto')) {
			$error = array('error' => $this->upload->display_errors());

			//$this->load->view('upload_form', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());

			//$this->load->view('upload_success', $data);
		}
	}
	
}
