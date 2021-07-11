<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$data['get_slider'] = $this->model->getSlider();
		$data['get_ourtreatments'] = $this->model->getOurtreatments();
		$data['get_ourteams'] = $this->model->getOurteams();
		$data['get_testimonials'] = $this->model->getTestimonials();
		$data['get_our_products'] = $this->model->getourproducts();
		$this->load->view('front/layout/header', $data);
		$this->load->view('front/home', $data);
		$this->load->view('front/layout/footer');
	}
	public function our_treatments()
	{
		$data['title'] = ""; 
		$data['meta_description'] = ""; 
		$data['meta_keywords'] = "";
		$data['settings'] = $this->model->getSettings();
		$this->load->view('front/layout/header', $data);
		$this->load->view('front/our_treatments');
		$this->load->view('front/layout/footer');
	}
	public function our_teams()
	{
		$data['title'] = ""; 
		$data['meta_description'] = ""; 
		$data['meta_keywords'] = "";
		$data['settings'] = $this->model->getSettings();
		$this->load->view('front/layout/header', $data);
		$this->load->view('front/our_teams');
		$this->load->view('front/layout/footer');
	}
	
	public function our_team_description($id)
	{
		$data['title'] = ""; 
		$data['meta_description'] = ""; 
		$data['meta_keywords'] = "";
		$data['id'] = $id;
		$data['settings'] = $this->model->getSettings();
		$this->load->view('front/layout/header', $data);
		$this->load->view('front/our_team_description', $data);
		$this->load->view('front/layout/footer');
	}
}
