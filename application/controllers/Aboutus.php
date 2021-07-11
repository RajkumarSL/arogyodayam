<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    $this->load->model('HomeModel','model');
	    $this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$data['title'] = ""; 
		$data['meta_description'] = ""; 
		$data['meta_keywords'] = "";
		$data['settings'] = $this->model->getSettings();
		$this->load->view('front/layout/header', $data);
		$this->load->view('front/aboutus');
		$this->load->view('front/layout/footer');
	}
}
