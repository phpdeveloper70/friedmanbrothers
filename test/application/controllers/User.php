<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
			$this->load->view('front/user/login');
	}

	public function register()
	{
			$this->load->view('front/user/register');
	}


}
