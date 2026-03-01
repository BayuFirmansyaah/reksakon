<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    function __construct()
	 {  // Set zona waktu ke Asia/Jakarta
		 date_default_timezone_set('Asia/Jakarta');
		 
		 parent::__construct();
		 $this->load->model('Home_Model');
		//  $this->load->model('Admin_Model');
		//  $this->auth->cek_login();
	 }
	public function index()
	{
		$data['ID'] = "Home";
		$data['DATA_HOMEPAGE'] = $this->Home_Model->DATA_HOMEPAGE();
		$data['DATA_PROJECT'] = $this->Home_Model->DATA_PROJECT();
		$data['DATA_PARTNERSHIP'] = $this->Home_Model->DATA_PARTNERSHIP();
		$data['DATA_OUR_SERVICE'] = $this->Home_Model->DATA_OUR_SERVICE();
		$this->load->view('template/header', $data);
        $this->load->view('Home/Home', $data);
        $this->load->view('template/footer');
	}

	public function About()
	{
		$data['ID'] = "About";
		$data['DATA_HOMEPAGE'] = $this->Home_Model->DATA_HOMEPAGE();
		$data['DATA_PROJECT'] = $this->Home_Model->DATA_PROJECT();
		$data['DATA_PARTNERSHIP'] = $this->Home_Model->DATA_PARTNERSHIP();
		$data['DATA_OUR_SERVICE'] = $this->Home_Model->DATA_OUR_SERVICE();
		$this->load->view('template/header',$data);
        $this->load->view('Home/About', $data);
        $this->load->view('template/footer');
	}
	public function Contact()
	{
		$data['ID'] = "Contact";
		$data['DATA_HOMEPAGE'] = $this->Home_Model->DATA_HOMEPAGE();
		$data['DATA_PROJECT'] = $this->Home_Model->DATA_PROJECT();
		$data['DATA_PARTNERSHIP'] = $this->Home_Model->DATA_PARTNERSHIP();
		$data['DATA_OUR_SERVICE'] = $this->Home_Model->DATA_OUR_SERVICE();

		$data['DATA_JENIS_CONTACT'] = $this->Home_Model->DATA_JENIS_CONTACT();
		$data['DATA_CONTACT'] = $this->Home_Model->DATA_CONTACT();
		$this->load->view('template/header', $data);
        $this->load->view('Home/Contact',$data);
        $this->load->view('template/footer');
	}

	public function Services(){
		$data['ID'] = "Services";
		$data['DATA_HOMEPAGE'] = $this->Home_Model->DATA_HOMEPAGE();
		$data['DATA_PROJECT'] = $this->Home_Model->DATA_PROJECT();
		$data['DATA_PARTNERSHIP'] = $this->Home_Model->DATA_PARTNERSHIP();
		$data['DATA_OUR_SERVICE'] = $this->Home_Model->DATA_OUR_SERVICE();

		$this->load->view('template/header',$data);
        $this->load->view('Home/Services', $data);
        $this->load->view('template/footer');
	}

	public function Project(){
		$data['ID'] = "Project";
		$data['DATA_HOMEPAGE'] = $this->Home_Model->DATA_HOMEPAGE();
		$data['DATA_PROJECT'] = $this->Home_Model->DATA_PROJECT();
		$data['DATA_PARTNERSHIP'] = $this->Home_Model->DATA_PARTNERSHIP();
		$data['DATA_OUR_SERVICE'] = $this->Home_Model->DATA_OUR_SERVICE();

		$this->load->view('template/header',$data);
        $this->load->view('Home/Project', $data);
        $this->load->view('template/footer');
	}

	public function Project_Reference(){
		$data['ID'] = "Project";
		$data['DATA_HOMEPAGE'] = $this->Home_Model->DATA_HOMEPAGE();
		$data['DATA_PROJECT'] = $this->Home_Model->DATA_PROJECT();
		$data['DATA_PARTNERSHIP'] = $this->Home_Model->DATA_PARTNERSHIP();
		$data['DATA_OUR_SERVICE'] = $this->Home_Model->DATA_OUR_SERVICE();

		$this->load->view('template/header', $data);
		$this->load->view('Home/Project_Reference', $data);
		$this->load->view('template/footer');
	}

	public function Work_Experience(){
		$data['ID'] = "Work_Experience";
		$data['DATA_HOMEPAGE'] = $this->Home_Model->DATA_HOMEPAGE();
		$data['DATA_PROJECT'] = $this->Home_Model->DATA_PROJECT();
		$data['DATA_PARTNERSHIP'] = $this->Home_Model->DATA_PARTNERSHIP();
		$data['DATA_OUR_SERVICE'] = $this->Home_Model->DATA_OUR_SERVICE();

		//TAMBAHAN
		$data['DATA_WORK_EXPERIENCE'] = $this->Home_Model->DATA_WORK_EXPERIENCE();
		//

		$this->load->view('template/header', $data);
		$this->load->view('Home/Work_Experience', $data);
		$this->load->view('template/footer');
	}
	public function VisionMission(){
		echo "ON PROSES";
	}
}
