<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
        parent::__construct();
	}

	public function index() {
		$data['title'] = 'HSBM Global';
		$data['page'] = 'index';

		$this->load->view('template', $data);
	}

	public function aboutUs() {
		$data['title'] = 'About Us | HSBM Global';
		$data['page'] = 'about-us';

		$this->load->view('template', $data);
	}

	public function contactUs() {
		$data['title'] = 'Contact Us | HSBM Global';
		$data['page'] = 'contact-us';

		$this->load->view('template', $data);
	}
}
