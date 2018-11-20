<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Welcome_model');
	}

	public function index()
	{
		$this->load->view('front/home');
	}

	public function about_us()
	{
		$this->load->view('front/about_us');
	}

	public function support()
	{
		$this->load->view('front/support');
	}

	public function contact_us()
	{
		$this->load->view('front/contact_us');
	}

	public function faq()
	{
		$this->load->view('front/faq');
	}

	public function catalogs()
	{
		$this->load->view('front/catalogs');
	}

}
