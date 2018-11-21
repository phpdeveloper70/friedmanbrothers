<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(!empty($user_id)){ redirect('user/myaccount'); }

			if(isset($_POST['login']))
			{
					$this->form_validation->set_rules('email', 'Email Address', 'trim|required');
					$this->form_validation->set_rules('password', 'Password', 'trim|required');
					$this->form_validation->set_error_delimiters('<div class="has-error"><i class="fa fa-warning"></i>&nbsp', '</div>');
					if ($this->form_validation->run() == TRUE)
					{
							$username = $this->input->post('email');
							$password = $this->input->post('password');
							if(!empty($username) || !empty($password))
							{
											$user_data = $this->user_model->user_login($username,$password);
											//print_r($user_data); die;
											if(count($user_data)>0)
											{
													$user_login_data = array('USER_ID'=>$user_data[0]->id,'USER_NAME'=>$user_data[0]->name,'USER_TYPE'=>$user_data[0]->usertype);
				  								$this->session->set_userdata($user_login_data);
													redirect('user/dashboard');
											}else
											{
												$this->session->set_flashdata('message','Error! Invalid login credentials.');
												redirect('user/login');
											}
							}
							else
							{
									$this->session->set_flashdata('message','Error! Invalid login credentials.');
									redirect('user/login');
							}
					}
			}
			$this->load->view('front/user/login');
	}

	public function register()
	{
		$user_id = $this->session->userdata('USER_ID');
		if(!empty($user_id)){ redirect('user/myaccount'); }
			$this->load->view('front/user/register');
	}

	function dashboard()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			$this->load->view('front/user/dashboard');
	}

	function change_password()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			$this->load->view('front/user/change-password');
	}

	function edit_details()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			$this->load->view('front/user/edit-details');
	}

	function orders()
	{
			$user_id = $this->session->userdata('USER_ID');
			if(empty($user_id)){ redirect('user/register'); }
			$this->load->view('front/user/orders');
	}

	function logout()
  {
      $this->session->unset_userdata('USER_ID');
		  $this->session->unset_userdata('USER_NAME');
			$this->session->unset_userdata('USER_TYPE');
      redirect('user/login');
  }

}
